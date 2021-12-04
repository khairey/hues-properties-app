<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Developers;
use App\Models\District;
use App\Models\Project;

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
        $projects=Project::all();

        return view('home',
             ['projects'=>$projects]
         );
    }



    public function property($id)
    {
        return view('home/property');
    }
    public function category($slug)
    {
        
        $category = Category::where('slug', $slug )->first();

        $projects = Project::where('category_id', $category->id )->get();
 
        return view(
            'home/category',
            [
                'projects' => $projects,
                'category' => $category,  
            ]
        );
    }
    public function list($categoryslug,$districtslug)
    {
        
        $category = Category::where('slug', $categoryslug )->first();

        $district = District::where('slug', $districtslug )->first();

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
        $projects=Project::all();

        return view('home',
             ['projects'=>$projects]
         );
    }




    public function developers()
    {
        $developers=Developers::all();

        return view('home/developers',
             ['developers'=>$developers]
         );
    }

    public function about()
    { 
        return view('home/about');
    }
    public function developer()
    { 
        return view('home/developer');
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
