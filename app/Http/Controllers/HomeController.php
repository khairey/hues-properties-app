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
use App\Models\PropertyType;
use App\Models\UnitType;

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
    public function searchproperties(Request  $request)
    {
        

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
        if( $request->price){
            $projects = $projects->where('price',   $request->price  );
        } 
        if( $request->installments){
            $projects = $projects->where('installments',   $request->installments  );
        } 
        if( $request->unit_area){
            $projects = $projects->where('unit_area',   $request->unit_area  );
        } 
        if( $request->downpayment){
            $projects = $projects->where('downpayment',   $request->downpayment  );
        } 
        
        $projects = $projects->get();

        

     $requestData = $request->all();
     var_dump($projects);
     exit;
        return view('home/searchproperties');
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
