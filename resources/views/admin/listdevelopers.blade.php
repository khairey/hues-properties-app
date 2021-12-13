@extends('layouts.admin')

@section('content')



    <!-- Main content -->
    <section class="content">



        <div class="card card-primary collapsed-card">
            <div class="card-header">
                <h3 class="card-title">Add Developers</h3>
                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <!-- form start -->

                <form method="POST" action="{{url('/');}}/admin/adddev" enctype="multipart/form-data">
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
                        <script>
                            $(document).ready(function() {
                                $('#summernoteen').summernote();
                                $('#summernotear').summernote();
                            });
                        </script>
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
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
                <!-- form end -->
            </div>
        </div>

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Developers</h3>

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
                                Title EN
                            </th>
                            <th style="width: 20%">
                                Title AR
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
                            <th style="width: 8%" class="text-center">
                                Details EN 
                            </th>
                            <th style="width: 8%" class="text-center">
                                Details AR 
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($developers as $developer)
                            <tr>
                                <td>
                                    <img width="50" height="50" src="{{asset('');}}uploads/{{ $developer->image }}">
                                </td>
                                <td>
                                    {{ $developer->title_en }}
                                </td>
                                <td>
                                    {{ $developer->title_ar }}
                                </td>
                                <!-- <td>
                    {{ $developer->address }}
                    </td>
                    <td class="project_progress">
                    {{ $developer->phone }}
                    </td>
                    <td class="project-state">
                    {{ $developer->email }}
                    </td> -->
                                <td class="project-state">
                                    {{ $developer->details_en }}
                                </td>
                                <td class="project-state">
                                    {{ $developer->details_ar }}
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
