@extends('layouts.admin')

@section('content')



    <!-- Main content -->
    <section class="content">



        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Project</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form method="POST" action="/admin/addproject" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Title EN</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Title AR</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <input type="text" name="title_en" class="form-control" id="Titleen"
                                    placeholder="Title EN" required>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <input type="text" name="title_ar" class="form-control" id="Titlear"
                                    placeholder="Title AR" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="longitude">Longitude</label>
                            <input type="text" name="longitude" class="form-control" id="longitude"
                                placeholder="Longitude">
                        </div>
                        <div class="col-6">
                            <label for="latitude">Latitude</label>
                            <input type="text" name="latitude" class="form-control" id="latitude" placeholder="Latitude">
                        </div>
                    </div>
                    <div class="form-group">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home2-tab" data-toggle="tab" href="#home2" role="tab"
                                    aria-controls="home2" aria-selected="true">Address EN</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile2-tab" data-toggle="tab" href="#profile2" role="tab"
                                    aria-controls="profile2" aria-selected="false">Address AR</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                                <input type="text" name="address_en" class="form-control" id="addressen"
                                    placeholder="Address EN">
                            </div>
                            <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile2-tab">
                                <input type="text" name="address_ar" class="form-control" id="addressar"
                                    placeholder="Address AR">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" class="form-control" id="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label for="downpayment">Downpayment</label>
                        <input type="number" name="downpayment" class="form-control" id="downpayment"
                            placeholder="Downpayment">
                    </div>
                    <div class="form-group">
                        <label for="delivery_date">Delivery Date</label>
                        <input type="number" name="delivery_date" class="form-control" id="delivery_date"
                            placeholder="Delivery Date">
                    </div>
                    <div class="form-group">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home3-tab" data-toggle="tab" href="#home3" role="tab"
                                    aria-controls="home3" aria-selected="true">Details EN</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile3-tab" data-toggle="tab" href="#profile3" role="tab"
                                    aria-controls="profile3" aria-selected="false">Details AR</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home3-tab">
                                <textarea class="summernote" name="details_en" id="summernoteen"></textarea>
                            </div>
                            <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile3-tab">
                                <textarea class="summernote" name="details_ar" id="summernotear"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home4-tab" data-toggle="tab" href="#home4" role="tab"
                                    aria-controls="home4" aria-selected="true">Additional Info EN</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile4-tab" data-toggle="tab" href="#profile4" role="tab"
                                    aria-controls="profile4" aria-selected="false">Additional Info AR</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home4-tab">
                                <textarea class="summernote" name="additional_info_en" id="summernote2en"></textarea>
                            </div>
                            <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile4-tab">
                                <textarea class="summernote" name="additional_info_ar" id="summernote2ar"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home5-tab" data-toggle="tab" href="#home5" role="tab"
                                    aria-controls="home5" aria-selected="true">Meta Description</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile5-tab" data-toggle="tab" href="#profile5" role="tab"
                                    aria-controls="profile5" aria-selected="false">Meta Keywords</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home4-tab">
                                <textarea class="summernote" name="meta_des" id="summernotedes"></textarea>
                            </div>
                            <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile5-tab">
                                <textarea class="summernote" name="meta_key" id="summernotekey"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="developers">Choose a Developer:</label>
                        <select class="select2" style="width: 100%" name="developer" id="developers">

                            @foreach ($developers as $dev)
                                <option value="{{ $dev->id }}">{{ $dev->title_en }} -- {{ $dev->title_ar }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="categories">Choose a Category:</label>
                        <select class="select2" style="width: 100%" name="category_id" id="categories">

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title_en }} --
                                    {{ $category->title_ar }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="district">Choose a District:</label>
                        <select class="select2" style="width: 100%" name="district" id="district">

                            @foreach ($districts as $district)
                                <option value="{{ $district->id }}">{{ $district->title_en }} --
                                    {{ $district->title_ar }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="district">Choose Facilities:</label>
                        <select class="duallistbox_demo" multiple="multiple" name="facilities">
                            @foreach ($facilities as $facility)
                                <option style="background-position: right;background-repeat: no-repeat;background-size: 25px 25px;background-image:url('/uploads/{{ $facility->image }}');" value="{{ $facility->id }}">{{ $facility->title_en }} --
                                    {{ $facility->title_ar }} -- 
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile2">Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="image" type="file" class="custom-file-input" id="exampleInputFile2">
                                <label class="custom-file-label" for="exampleInputFile2">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Brochure</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="brochure" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                Image
                            </th>
                            <th style="width: 20%">
                                Title
                            </th>
                            <!-- <th style="width: 30%">
                                            Address
                                        </th>
                                        <th>
                                            Phone
                                        </th>
                                        <th style="width: 8%" class="text-center">
                                            Email
                                        </th> -->
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($projects as $project)
                            <tr>
                                <td>
                                    <img width="50" height="50" src="{{ asset('uploads') }}/{{ $project->image }}">
                                </td>
                                <td>
                                    {{ $project->title_en }}
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="/admin/listgallery/{{ $project->slug }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        Gallery
                                    </a>
                                    <a class="btn btn-primary btn-sm" href="/admin/listunittypes/{{ $project->slug }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        Unit Types
                                    </a>
                                    <a class="btn btn-primary btn-sm" href="/admin/viewproject/{{ $project->slug }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->

@endsection
