<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Developers;
use App\Models\District;
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

        return view(
            'home',
            ['projects' => $projects]
        );
    }



    public function property($slug)
    {
        
        $project = Project::where('slug', $slug)->first();
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

        return view(
            'home/category',
            [
                'projects' => $projects,
                'category' => $category,
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

        return view(
            'home/list',
            [
                'projects' => $projects,
                'district' => $district,
                'category' => $category,
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
    public function searchproperties()
    {
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
