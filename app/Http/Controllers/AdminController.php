<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developers;

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

}
