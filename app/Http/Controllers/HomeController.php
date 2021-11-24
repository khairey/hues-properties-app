<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developers;

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
        return view('home');
    }



    public function property($id)
    {
        return view('home/property');
    }
    public function home()
    {
        return view('home');
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
}
