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

    <form method="POST" action="/addproject" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="Title">Title</label>
          <input type="text" name="title" class="form-control" id="Title" placeholder="Title">
        </div>
        <div class="form-group">
          <label for="longitude">Longitude</label>
          <input type="text" name="longitude" class="form-control" id="longitude" placeholder="Longitude">
        </div>
        <div class="form-group">
          <label for="latitude">Latitude</label>
          <input type="text" name="latitude" class="form-control" id="latitude" placeholder="Latitude">
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" name="address" class="form-control" id="address" placeholder="Address">
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" name="price" class="form-control" id="price" placeholder="Price">
        </div>
        <div class="form-group">
          <label for="downpayment">Downpayment</label>
          <input type="number" name="downpayment" class="form-control" id="downpayment" placeholder="Downpayment">
        </div>
        <div class="form-group">
          <label for="delivery_date">Delivery Date</label>
          <input type="number" name="delivery_date" class="form-control" id="delivery_date" placeholder="Delivery Date">
        </div>
        <div class="form-group">
          <label for="unit_area">Unit Area</label>
          <input type="number" name="unit_area" class="form-control" id="unit_area" placeholder="Unit Area">
        </div>
        <div class="form-group">
          <label for="kitchen">Kitchen</label>
          <input type="number" name="kitchen" class="form-control" id="kitchen" placeholder="Kitchen">
        </div>
        <div class="form-group">
          <label for="bathroom">Bathroom</label>
          <input type="number" name="bathroom" class="form-control" id="bathroom" placeholder="Bathroom">
        </div>
        <div class="form-group">
          <label for="bedroom">Bedroom</label>
          <input type="number" name="bedroom" class="form-control" id="bedroom" placeholder="Bedroom">
        </div>
        <div class="form-group">
          <label for="masterroom">Master Room</label>
          <input type="number" name="masterroom" class="form-control" id="masterroom" placeholder="Master Room">
        </div>
        <div class="form-group">
          <label for="summernote">Details</label>
          <textarea name="details" id="summernote"></textarea>
        </div>
        <div class="form-group">
          <label for="summernote2">Additional Info</label>
          <textarea name="additional_info" id="summernote2"></textarea>
        </div>
        <div class="form-group">
          <label for="summernotedes">Meta Description</label>
          <textarea name="meta_des" id="summernotedes"></textarea>
        </div>
        <div class="form-group">
          <label for="summernotekey">Meta Keywords</label>
          <textarea name="meta_key" id="summernotekey"></textarea>
        </div>
        <script src="plugins/jquery/jquery.min.js"></script>
        <script>
          $(document).ready(function() {
            $('#summernote').summernote();
            $('#summernote2').summernote();
            $('#summernotedes').summernote();
            $('#summernotekey').summernote();
          });
        </script>
        <div class="form-group">
          <label for="developers">Choose a Developer:</label>
          <select name="developer" id="developers">

            @foreach($developers as $dev)
            <option value="{{$dev->id}}">{{$dev->title}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="district">Choose a District:</label>
          <select name="district" id="district">

            @foreach($districts as $district)
            <option value="{{$district->id}}">{{$district->title}}</option>
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
            <th style="width: 8%" class="text-center">
              Details
            </th>
            <th style="width: 20%">
            </th>
          </tr>
        </thead>
        <tbody>

          @foreach($projects as $project)
          <tr>
            <td>
              <a width="50" height="50" href="uploads/{{$project->brochure}}">{{$project->brochure}} </a>
            </td>
            <td>
              {{$project->title}}
            </td>

            <td class="project-state">
              {{$project->details}}
            </td>
            <td class="project-actions text-right">
              <a class="btn btn-primary btn-sm" href="/admin/viewproject/{{$project->slug}}">
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