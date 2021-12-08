<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Developers;
use App\Models\District;
use App\Models\Facilities;
use App\Models\Gallery;
use App\Models\Project;
use App\Models\ProjectFacility;
use App\Models\PropertyType;
use App\Models\UnitType;
use Database\Factories\ProjectFactory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
        //$this->middleware('auth')->except(['guest']);
        $this->middleware('auth')->only(['guest', 'admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     
    public function index()
    {
        $projects = Project::all();
        
        $districts = District::all();
        $propertytypes = PropertyType::all();
        $developers = Developers::all();
        $categories = Category::all();
        $facilities = Facilities::all();
        
        $deliverydates= Project::select('delivery_date')->distinct()->get(['delivery_date']);
        $minprice= Project::select('price')->min('price');
        $maxprice= Project::select('price')->max('price'); 
        $minpayment= Project::select('downpayment')->min('downpayment');
        $maxpayment= Project::select('downpayment')->max('downpayment'); 
        $minarea= Project::select('unit_area')->min('unit_area');
        $maxarea= Project::select('unit_area')->max('unit_area'); 
        $mininst= Project::select('installments')->min('installments');
        $maxinst= Project::select('installments')->max('installments'); 
        
        
        //var_dump($maxprice);
        //exit;
        

        return view(
            'home',
            [
                'districts' => $districts,
                'propertytypes' => $propertytypes,
                'developers' => $developers,
                'projects' => $projects,
                'categories' => $categories,
                'facilities' => $facilities,
                'deliverydates' => $deliverydates,
                'minprice' => $minprice,
                'maxprice' => $maxprice,
                'minpayment' => $minpayment,
                'maxpayment' => $maxpayment,
                'minarea' => $minarea,
                'maxarea' => $maxarea,
                'mininst' => $mininst,
                'maxinst' => $maxinst,
            ]
        );
    }

    public function searchproperties(Request  $request)
    {
        $districts = District::all();
        $propertytypes = PropertyType::all();
        $developers = Developers::all();
        $categories = Category::all();
        $facilities = Facilities::all();
        $deliverydates= Project::select('delivery_date')->distinct()->get(['delivery_date']);

        $minprice= Project::select('price')->min('price');
        $maxprice= Project::select('price')->max('price'); 
        $minpayment= Project::select('downpayment')->min('downpayment');
        $maxpayment= Project::select('downpayment')->max('downpayment'); 
        $minarea= Project::select('unit_area')->min('unit_area');
        $maxarea= Project::select('unit_area')->max('unit_area'); 
        $mininst= Project::select('installments')->min('installments');
        $maxinst= Project::select('installments')->max('installments');


        $projects = Project::where('deactive',  NULL  ) ;
        if( $request->title){
            $projects = $projects->where( 'title_ar', 'like', '%' . $request->title . '%'  );
            $projects = $projects->orWhere( 'title_en', 'like', '%' . $request->title . '%'  ); 
            $projects = $projects->orWhere( 'details_ar', 'like', '%' . $request->title . '%'  ); 
            $projects = $projects->orWhere( 'details_en', 'like', '%' . $request->title . '%'  ); 
            $projects = $projects->orWhere( 'additional_info_ar', 'like', '%' . $request->title . '%'  ); 
            $projects = $projects->orWhere( 'additional_info_en', 'like', '%' . $request->title . '%'  );  
        } 
        if( $request->category){
            $projects = $projects->where('category_id',  $request->category  ) ;
        }
        if( $request->district){
            $projects = $projects->where('district_id',   $request->district  );
        } 

        if( $request->developer){
            $projects = $projects->where('developer_id',   $request->developer  );
        } 
        if( $request->delivery_date){
            $projects = $projects->where('delivery_date',   $request->delivery_date  );
        } 
        if( $request->property_type){
            $projects = $projects->where('property_type_id',   $request->property_type  );
        }  
        if( $request->main_type){
            $projects = $projects->where('main_type',   $request->main_type  );
        }  
        if( $request->unit==1){
            $projects = $projects->where('unit',   $request->unit  );
        }else if( $request->unit==2){
            $projects = $projects->where('unit',   NULL  );
        }  
        
        $request->pricemax = preg_replace("/[^\d]/", "", $request->pricemax);
        $request->pricemin = preg_replace("/[^\d]/", "", $request->pricemin);

        if( $request->pricemax!=0){
            $projects = $projects->whereBetween('price', [$request->pricemin, $request->pricemax]);
        }
        $request->downpaymentmin = preg_replace("/[^\d]/", "", $request->downpaymentmin);
        $request->downpaymentmax = preg_replace("/[^\d]/", "", $request->downpaymentmax);
        if( $request->downpaymentmax!=0){
            $projects = $projects->whereBetween('downpayment', [$request->downpaymentmin, $request->downpaymentmax]);
        }
        $request->installmentsmin = preg_replace("/[^\d]/", "", $request->installmentsmin);
        $request->installmentsmax = preg_replace("/[^\d]/", "", $request->installmentsmax);
        if( $request->installmentsmax!=0){
            $projects = $projects->whereBetween('installments', [$request->installmentsmin, $request->installmentsmax]);
        }
        $request->unit_areamin = preg_replace("/[^\d]/", "", $request->unit_areamin);
        $request->unit_areamax = preg_replace("/[^\d]/", "", $request->unit_areamax);
        if( $request->unit_areamax!=0){
            $projects = $projects->whereBetween('unit_area', [$request->unit_areamin, $request->unit_areamax]);
        }



        $request->kitchenmin = preg_replace("/[^\d]/", "", $request->kitchenmin);
        $request->kitchenmax = preg_replace("/[^\d]/", "", $request->kitchenmax);
        if( $request->kitchenmax!='0'){
             
            $projects = $projects->whereBetween('kitchen', [$request->kitchenmin, $request->kitchenmax]);
        }
        $request->bathroommin = preg_replace("/[^\d]/", "", $request->bathroommin);
        $request->bathroommax = preg_replace("/[^\d]/", "", $request->bathroommax);
        if( $request->bathroommax!=0){
            $projects = $projects->whereBetween('bathroom', [$request->bathroommin, $request->bathroommax]);
        }
        $request->bedroommin = preg_replace("/[^\d]/", "", $request->bedroommin);
        $request->bedroommax = preg_replace("/[^\d]/", "", $request->bedroommax);
        if($request->bedroommax!=0){
            $projects = $projects->whereBetween('bedroom', [$request->bedroommin, $request->bedroommax]);
        }
        $request->masterroommin = preg_replace("/[^\d]/", "", $request->masterroommin);
        $request->masterroommax = preg_replace("/[^\d]/", "", $request->masterroommax);
        if($request->masterroommax!=0){
            $projects = $projects->whereBetween('masterroommin', [$request->masterroommin, $request->masterroommax]);
        }

        if(!empty($request->features)){
            $projectfacilities = ProjectFacility::distinct()->whereIn('facility_id', $request->features)->get('project_id');
            $projects = $projects->whereIn('id', $projectfacilities);
            
        }
         
        
        $projects = $projects->get();

        

        //$requestData = $request->all();
        //var_dump($projects);
        //exit;
        // return view('home/searchproperties');
        return view(
            'home/searchproperties',
            [
                'projects' => $projects, 
                'districts' => $districts,
                'propertytypes' => $propertytypes,
                'developers' => $developers,
                'projects' => $projects,
                'categories' => $categories,
                'facilities' => $facilities,
                'deliverydates' => $deliverydates,
                'minprice' => $minprice,
                'maxprice' => $maxprice,
                'minpayment' => $minpayment,
                'maxpayment' => $maxpayment,
                'minarea' => $minarea,
                'maxarea' => $maxarea,
                'mininst' => $mininst,
                'maxinst' => $maxinst,
            ]
        );
    }


    public function internalsearch(Request $request)
    {
         
        
        $projects = Project::where('deactive',  NULL  ) ;
        if( $request->category){
            $projects = $projects->where('category_id',  $request->category  ) ;
        }
        if( $request->district){
            $projects = $projects->where('district_id',   $request->district  );
        } 
        $projects = $projects->get();

        
        $categories = Category::all();
        $districts = District::all();

        return view('home/internalsearch', [
            'projects'=> $projects,
            'categories'=>$categories,
            'districts'=>$districts, 
        ]);
 
    }



    public function property($slug)
    {
        
        $project = Project::where('slug', $slug)->first();
        $project->view_count+=1;
        $project->save();
        $similars = Project::where([
            ['category_id', $project->category_id],
            ['id', '!=' , $project->id],
            ])->get();
        $photoes = Gallery::where('project_id',$project->id)->get(); 
        $categories = Category::all();
        $districts = District::all();
        $propertytypes = PropertyType::all();
        
        //get an array associative array with types and data
        $types= UnitType::distinct()->where('project_id', $project->id)->get(['property_type_id']);
        $arraytypes=array();
        if(!empty($types)){
            foreach($types as $type){
                $projecttypes = UnitType::where([
                    ['project_id',$project->id],
                    ['property_type_id',$type->property_type_id],
                    ])->get();  
                    //var_dump($projecttypes);
                if(!empty($projecttypes)){  
                    foreach($projecttypes as $projecttype){ 
                        $arraytypes[$type->propertytype->{'title_' . App()->getLocale()}][]=$projecttype;
                    }
                }
            }
        }
        // Date of Project
        $timestamp = strtotime($project->created_at);
        $projectdate = date('d-m-Y', $timestamp);

        return view('home/property',
        [
            'project' => $project,
            'similars' => $similars,
            'photoes' => $photoes, 
            'arraytypes' => $arraytypes,
            'types' => $types,
            'categories' => $categories,
            'districts' => $districts,
            'projectdate' => $projectdate,
            'propertytypes' => $propertytypes,
        ]
    );
    }
    public function category($slug)
    {

        $category = Category::where('slug', $slug)->first();

        $projects = Project::where('category_id', $category->id)->get();

        $categories = Category::all();
        $districts = District::all();

        return view(
            'home/category',
            [
                'projects' => $projects,
                'category' => $category,
                'districts' => $districts,
                'categories' => $categories,
            ]
        );
    }
    public function list($categoryslug, $districtslug)
    {

        $category = Category::where('slug', $categoryslug)->first();

        $district = District::where('slug', $districtslug)->first();

        $projects = Project::where([
            ['category_id', $category->id],
            ['district_id', $district->id]
        ])->get();


        
        $categories = Category::all();
        $districts = District::all();

        return view(
            'home/list',
            [
                'projects' => $projects,
                'district' => $district,
                'category' => $category,
                'districts' => $districts,
                'categories' => $categories,
            ]
        );
    }


    public function home()
    {
        $projects = Project::all();

        return view(
            'home',
            ['projects' => $projects]
        );
    }




    public function developers()
    {
        $developers = Developers::all();

        return view(
            'home/developers',
            ['developers' => $developers]
        );
    }

    public function about()
    {
        return view('home/about');
    }
    public function developer($slug)
    {

        $developer = Developers::where('slug', $slug)->first();
        $projects = Project::where([
            ['developer_id', $developer->id],
            ['deactive', NULL]
        ])->get();
        return view(
            'home/developer',
            [
                'developer' => $developer,
                'projects' => $projects,
            ]
        );
    }

    public function contactus()
    {
        return view('home/contactus');
    }
    
    public function wishlist()
    {
        return view('home/wishlist');
    }
    public function wishlistview()
    {
        return view('home/wishlistview');
    }
}
