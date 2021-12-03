<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Developers;
use App\Models\District;
use App\Models\Project;
use App\Models\PropertyType;
use App\Models\UnitType;

class AdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    public function listdevelopers()
    {
        $developers=Developers::all();

        return view('admin/listdevelopers',
             ['developers'=>$developers]
         );
    }
    public function adddev( )
    { 
        $imageName = time().'.'.request()->image->extension();  
    
        request()->image->move(public_path('uploads'), $imageName);

        $product = new Developers();
        $product->title_en = request()->title_en;
        $product->title_ar = request()->title_ar;
        $product->details_en = request()->details_en;
        $product->details_ar = request()->details_ar;
        $product->image = $imageName;
        $product->save();
   

        return back();
    }
    
    public function listcategory()
    {
        $category=Category::all();
        
        return view('admin/listcategory',
        ['category'=>$category]
    );
}
public function addcat( )
{ 
     
    $product = new Category();
    $product->title_en = request()->title_en;
    $product->title_ar = request()->title_ar;
    $product->residential = request()->residential; 
    $product->save(); 

    return back();
}



public function listproject()
    {
        $projects=Project::all();
        
        $developers=Developers::all();

        $districts=District::all();

        //var_dump($developers);
        return view('admin/listproject',
        [
        'projects'=>$projects,
        'developers'=>$developers,
        'districts'=>$districts,
        ]
    );
}



public function viewproject($slug)
{ 
    $project = Project::where('slug', $slug)->first();

    return view('admin/viewproject',
    ['project'=>$project]
    );
 
}
public function listunittypes($slug)
{ 
    $project = Project::where('slug', $slug)->first();
    $list=UnitType::where('project_id', $project->id)->get();
    $propertytypes=PropertyType::all();
    return view('admin/listunittypes',
    [
        'project'=>$project,
        'list'=>$list,
        'propertytypes'=>$propertytypes,
    ]
    );
 
}
public function addunittype()
{ 
 
$product = new UnitType();
$product->title_en = request()->title_en;
$product->title_ar = request()->title_ar;  
$product->details_en = request()->details_en;  
$product->details_ar = request()->details_ar; 
$product->property_type_id = request()->property_type_id; 
$product->project_id = request()->project_id; 
$product->save(); 

return back();
}

public function addproject( )
{ 
     
    $imageName = time().'.'.request()->brochure->extension();  
    request()->brochure->move(public_path('uploads'), $imageName);


    $image = time().'.'.request()->image->extension();  
    request()->image->move(public_path('uploads'), $image);

    $project = new Project();
    $project->title_en = request()->title_en; 
    $project->title_ar = request()->title_ar; 
    $project->longitude = request()->longitude; 
    $project->latitude = request()->latitude; 
    $project->address_en = request()->address_en; 
    $project->address_ar = request()->address_ar; 
    $project->price = request()->price; 
    $project->downpayment = request()->downpayment; 
    $project->delivery_date = request()->delivery_date; 
    // $project->unit_area = request()->unit_area; 
    // $project->kitchen = request()->kitchen; 
    // $project->bathroom = request()->bathroom; 
    // $project->bedroom = request()->bedroom; 
    // $project->masterroom = request()->masterroom; 
    $project->details_en = request()->details_en; 
    $project->additional_info_en = request()->additional_info_en; 
    $project->details_ar = request()->details_ar; 
    $project->additional_info_ar = request()->additional_info_ar; 
    $project->developer_id = request()->developer; 
    $project->district_id = request()->district; 
    $project->meta_des = request()->meta_des; 
    $project->meta_key = request()->meta_key; 
    $project->user_id = request()->user()->id; 
    $project->brochure = $imageName;
    $project->image = $image;
    $project->save(); 

 

    return back();
}





public function listdistrict()
{
    $districts=District::all();
    
    return view('admin/listdistrict',
    ['districts'=>$districts]
    );
}



public function adddistrict( )
{ 
 
$product = new District();
$product->title_en = request()->title_en;
$product->title_ar = request()->title_ar; 
$product->save(); 

return back();
}


public function listpropertytype()
{
    $propertytypes=PropertyType::all();
    
    return view('admin/listpropertytype',
    ['propertytypes'=>$propertytypes]
    );
}
public function addpropertytype( )
{ 
 
    $image = time().'.'.request()->image->extension();  
    request()->image->move(public_path('uploads'), $image);

$propertytype = new PropertyType();
$propertytype->title_en = request()->title_en;  
$propertytype->title_ar = request()->title_ar;  
$propertytype->image = $image;  
$propertytype->save(); 

return back();
}

}
