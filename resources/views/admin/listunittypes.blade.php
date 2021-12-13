@extends('layouts.admin')

@section('content')



    <!-- Main content -->
    <section class="content">



        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Unit Type ON {{ $project->title_en }} -- {{ $project->title_ar }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form method="POST" action="{{url('/');}}/admin/addunittype"  >
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title EN</label>
                        <input type="text" name="title_en" class="form-control" id="exampleInputEmail1" placeholder="Title EN">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Title AR</label>
                        <input type="text" name="title_ar" class="form-control" id="exampleInputEmail" placeholder="Title AR">
                    </div>
                    <div class="form-group">
                        <label for="summernoteen">Details EN</label>
                        <textarea name="details_en" id="summernoteen"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="summernotear">Details AR</label>
                        <textarea name="details_ar" id="summernotear"></textarea>
                    </div>
                    <script src="/plugins/jquery/jquery.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#summernoteen').summernote();
                            $('#summernotear').summernote();
                        });
                    </script> 

                     <div class="form-group">
                        <label for="property_type_id">Choose a Property Type:</label>
                        <select name="property_type_id" id="property_type_id">

                            @foreach($propertytypes as $propertytype)
                            <option value="{{$propertytype->id}}">{{$propertytype->title_en}} -- {{$propertytype->title_ar}}</option>
                            @endforeach
                        </select>
                    </div>

                    <input type="hidden" value="{{ $project->id }}" name="project_id">

                        
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
                <h3 class="card-title">Types</h3>

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
                            
                            <th style="width: 20%">
                                Type
                            </th>
                            <th style="width: 20%">
                                Title EN
                            </th>
                            <th style="width: 20%">
                                Title AR
                            </th>
                            <th style="width: 1%">
                                Details EN
                            </th>
                            <th style="width: 1%">
                                Details AR
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

                        @foreach ($list as $lista)
                            <tr>
                                <td>
                                    {{ $lista->propertytype->title_en }}
                                </td>
                                <td>
                                    {{ $lista->title_en }}
                                </td>
                                <td>
                                    {{ $lista->title_ar }}
                                </td>
                                
                                <td class="project-state">
                                    {{ $lista->details_en }}
                                </td>
                                <td class="project-state">
                                    {{ $lista->details_ar }}
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="#">
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
