<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Developers;
use App\Models\District;
use App\Models\Facilities;
use App\Models\Gallery;
use App\Models\Project;
use App\Models\PropertyType;
use App\Models\UnitType;
use App\Models\ProjectFacility;

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
        $projects = Project::where('unit', NULL)->get();
        $units = Project::where('unit', 1)->get();

        $propertytypes = PropertyType::all();
        $facilities = Facilities::all();

        $developers = Developers::all();

        $districts = District::all();

        $categories = Category::all();
        return view('admin.dashboard', [

            'projects' => $projects,
            'units' => $units,
            'propertytypes' => $propertytypes,
            'facilities' => $facilities,
            'developers' => $developers,
            'districts' => $districts,
            'categories' => $categories,
        ]);
    }
    public function listdevelopers()
    {
        $developers = Developers::all();

        return view(
            'admin/listdevelopers',
            ['developers' => $developers]
        );
    }
    public function adddev()
    {
        $imageName = time() . '.' . request()->image->extension();

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

    public function listfacilities()
    {
        $facilities = Facilities::all();

        return view(
            'admin/listfacilities',
            ['facilitites' => $facilities]
        );
    }
    public function addfacilities()
    {

        $imageName = time() . '.' . request()->image->extension();

        request()->image->move(public_path('uploads'), $imageName);

        $product = new Facilities();
        $product->title_en = request()->title_en;
        $product->title_ar = request()->title_ar;
        $product->image = $imageName;
        $product->save();

        return back();
    }
    public function listcategory()
    {
        $category = Category::all();

        return view(
            'admin/listcategory',
            ['category' => $category]
        );
    }
    public function addcat()
    {

        $product = new Category();
        $product->title_en = request()->title_en;
        $product->title_ar = request()->title_ar;
        $product->residential = request()->residential;
        $product->save();

        return back();
    }



    public function listunit()
    {
        $projects = Project::where('unit', 1)->get();

        $propertytypes = PropertyType::all();

        $districts = District::all();

        $categories = Category::all();

        return view(
            'admin/listunit',
            [
                'projects' => $projects,
                'propertytypes' => $propertytypes,
                'districts' => $districts,
                'categories' => $categories,
            ]
        );
    }
    public function listproject()
    {
        $projects = Project::where('unit', NULL)->get();

        $facilities = Facilities::all();

        $developers = Developers::all();

        $districts = District::all();

        $categories = Category::all();

        //var_dump($developers);
        return view(
            'admin/listproject',
            [
                'projects' => $projects,
                'facilities' => $facilities,
                'developers' => $developers,
                'districts' => $districts,
                'categories' => $categories,
            ]
        );
    }



    public function viewproject($slug)
    {
        $project = Project::where('slug', $slug)->first();

        return view(
            'admin/viewproject',
            ['project' => $project]
        );
    }
    public function listgallery($slug)
    {
        $project = Project::where('slug', $slug)->first();
        $list = Gallery::where('project_id', $project->id)->get();
        return view(
            'admin/listgallery',
            [
                'project' => $project,
                'list' => $list,
            ]
        );
    }


    public function filesupload(Request $request)
    {


        // $this->validate($request, [
        //     'filenames' => 'required',
        //     'filenames.*' => 'mimes:doc,pdf,docx,zip'
        // ]);


        if ($request->hasfile('filenames')) {
            foreach ($request->file('filenames') as $file) {

                $name = rand() . time() . '.' . $file->extension();
                // $name = $file->getClientOriginalName().'-'.time() . '.' . $file->extension();
                $file->move(public_path('uploads'), $name);
                $file = new Gallery();
                $file->image = $name;
                $file->project_id = request()->project_id;
                $file->level = request()->level;
                $file->save();
            }
        }


        return back()->with('success', 'Data Your files has been successfully added');
    }


    public function listunittypes($slug)
    {
        $project = Project::where('slug', $slug)->first();
        $list = UnitType::where('project_id', $project->id)->get();
        $propertytypes = PropertyType::all();
        return view(
            'admin/listunittypes',
            [
                'project' => $project,
                'list' => $list,
                'propertytypes' => $propertytypes,
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

    public function addproject()
    {

        $project = new Project();

        if (request()->hasFile('brochure')) {
            $imageName = time() . '.' . request()->brochure->extension();
            request()->brochure->move(public_path('uploads'), $imageName);
            $project->brochure = $imageName;
        }
        if (request()->hasFile('image')) {
            $image = time() . '.' . request()->image->extension();
            request()->image->move(public_path('uploads'), $image);
            $project->image = $image;
        }


        $project->title_en = request()->title_en;
        $project->title_ar = request()->title_ar;
        $project->longitude = request()->longitude;
        $project->latitude = request()->latitude;
        $project->address_en = request()->address_en;
        $project->address_ar = request()->address_ar;
        $project->price = request()->price;
        $project->downpayment = request()->downpayment;
        $project->delivery_date = request()->delivery_date;
        $project->installments = request()->installments;
        $project->details_en = request()->details_en;
        $project->additional_info_en = request()->additional_info_en;
        $project->details_ar = request()->details_ar;
        $project->additional_info_ar = request()->additional_info_ar;
        $project->developer_id = request()->developer;
        $project->category_id = request()->category_id;
        $project->district_id = request()->district;
        $project->meta_des = request()->meta_des;
        $project->meta_key = request()->meta_key;
        $project->user_id = request()->user()->id;

        $project->unit_area = request()->unit_area;
        $project->kitchen = request()->kitchen;
        $project->bathroom = request()->bathroom;
        $project->bedroom = request()->bedroom;
        $project->masterroom = request()->masterroom;
        $project->property_type_id = request()->property_type_id;
        $project->main_type = request()->main_type;
        $project->unit = request()->unit;
        $project->save();
        if (request()->facilities)
            foreach (request()->facilities as $facility) {
                $projectfacility = new ProjectFacility;
                $projectfacility->project_id = $project->id;
                $projectfacility->facility_id = $facility;
                $projectfacility->save();
            }


        return back();
    }





    public function listdistrict()
    {
        $districts = District::all();

        return view(
            'admin/listdistrict',
            ['districts' => $districts]
        );
    }



    public function adddistrict()
    {

        $product = new District();
        if (request()->hasFile('image')) {
            $imageName = time() . '.' . request()->image->extension();
            request()->image->move(public_path('uploads'), $imageName);
            $product->image = $imageName;
        }
        $product->title_en = request()->title_en;
        $product->title_ar = request()->title_ar;
        $product->save();

        return back();
    }


    public function listpropertytype()
    {
        $propertytypes = PropertyType::all();

        return view(
            'admin/listpropertytype',
            ['propertytypes' => $propertytypes]
        );
    }
    public function addpropertytype()
    {

        $image = time() . '.' . request()->image->extension();
        request()->image->move(public_path('uploads'), $image);

        $propertytype = new PropertyType();
        $propertytype->title_en = request()->title_en;
        $propertytype->title_ar = request()->title_ar;
        $propertytype->image = $image;
        $propertytype->save();

        return back();
    }
    
    public function destroy($model,$id)
    {
        $namespace = "\\App\\Models\\".$model;
       $model = $namespace::find($id);
       if(File::delete(public_path("uploads/".$model->image))) {
          $model->delete();
          return redirect()->back()->with('success', 'Deleted Successfully');  
       } else
       return redirect()->back()->with('error', 'Couldn\'t Delete');  
        
    }
}
