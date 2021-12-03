@extends('layouts.admin')

@section('content')



    <!-- Main content -->
    <section class="content">


{{-- 
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Gallery ON {{ $project->title_en }} -- {{ $project->title_ar }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form method="POST" action="/admin/addgallery"  >
                @csrf
                <div class="card-body">
                   

                    <input type="hidden" value="{{ $project->id }}" name="project_id">
                    <input type="level" value="1" name="level">

                        
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>


        </div> --}} 
        
        <script src="/plugins/jquery/jquery.min.js"></script>
<div class="container lst">


@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
</div>
@endif


@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div> 
@endif


<h3 class="card-title">Add Gallery ON {{ $project->title_en }} -- {{ $project->title_ar }}</h3>
<form method="post" action="{{url('admin/file')}}" enctype="multipart/form-data">
  {{csrf_field()}}


    <div class="input-group hdtuto control-group lst increment" >
      <input type="file" name="filenames[]" class="myfrm form-control" Multiple>
    </div> 


                    <input type="hidden" value="{{ $project->id }}" name="project_id">
                    <input type="hidden" value="1" name="level">


    <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>


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
                                Image
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
                                <td class="project-state"> 
                                     <img width="50" height="50" src="/uploads/{{ $lista->image }}">
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
