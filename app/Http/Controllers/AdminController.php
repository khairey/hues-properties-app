<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Developers;
use App\Models\District;
use App\Models\Project;

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
        $product->title = request()->title;
        $product->details = request()->details;
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
    $product->title = request()->title;
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
$product->title = request()->title;  
$product->save(); 

return back();
}


}
