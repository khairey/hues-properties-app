
@extends('layouts.admin')

@section('content')
 
 

<!-- Main content -->
<section class="content">

 
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Property Type</h3>
              </div> 
              <form method="POST" action="/addpropertytype"   > 
                  @csrf 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title">
                  </div> 
                  
                </div> 
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div> 
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Property Types</h3>

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
            
        @foreach($propertytypes as $propertytype)
            <tr>
                
                <td>
                {{$propertytype->title}} 
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

