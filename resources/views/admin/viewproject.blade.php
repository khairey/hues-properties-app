
@extends('layouts.admin')

@section('content')
  
   <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Project Detail</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
              <div class="row">

              @if(!empty($project->title)) 
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Title</span>
                      <span class="info-box-number text-center text-muted mb-0">{{$project->title}}</span>
                    </div>
                  </div>
                </div> 
              @endif
              @if(!empty($project->address)) 
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Address</span>
                      <span class="info-box-number text-center text-muted mb-0">{{$project->address}}</span>
                    </div>
                  </div>
                </div> 
              @endif
              @if(!empty($project->price)) 
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Price</span>
                      <span class="info-box-number text-center text-muted mb-0">{{$project->price}}</span>
                    </div>
                  </div>
                </div> 
              @endif
              @if(!empty($project->downpayment)) 
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Downpayment</span>
                      <span class="info-box-number text-center text-muted mb-0">{{$project->downpayment}}</span>
                    </div>
                  </div>
                </div> 
              @endif
              @if(!empty($project->delivery_date)) 
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Delivery Date</span>
                      <span class="info-box-number text-center text-muted mb-0">{{$project->delivery_date}}</span>
                    </div>
                  </div>
                </div> 
              @endif
              @if(!empty($project->unit_area)) 
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Unit Area</span>
                      <span class="info-box-number text-center text-muted mb-0">{{$project->unit_area}}</span>
                    </div>
                  </div>
                </div> 
              @endif
              @if(!empty($project->kitchen)) 
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">No. kitchen</span>
                      <span class="info-box-number text-center text-muted mb-0">{{$project->kitchen}}</span>
                    </div>
                  </div>
                </div> 
              @endif
              @if(!empty($project->bathroom)) 
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">No. bathroom</span>
                      <span class="info-box-number text-center text-muted mb-0">{{$project->bathroom}}</span>
                    </div>
                  </div>
                </div> 
              @endif
              @if(!empty($project->bedroom)) 
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">No. bedroom</span>
                      <span class="info-box-number text-center text-muted mb-0">{{$project->bedroom}}</span>
                    </div>
                  </div>
                </div> 
              @endif
              @if(!empty($project->masterroom)) 
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">No. masterroom</span>
                      <span class="info-box-number text-center text-muted mb-0">{{$project->masterroom}}</span>
                    </div>
                  </div>
                </div> 
              @endif
              @if(!empty($project->developer_id)) 
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Developer</span>
                      <span class="info-box-number text-center text-muted mb-0">{{$project->developer->title}}</span>
                    </div>
                  </div>
                </div> 
              @endif
              @if(!empty($project->district_id)) 
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">District</span>
                      <span class="info-box-number text-center text-muted mb-0">{{$project->district->title}}</span>
                    </div>
                  </div>
                </div> 
              @endif

              </div>
              <div class="row">


              @if(!empty($project->details)) 
                <div class="col-12">
                  <h4>Details</h4>
                    <div class="post">  
                      {!!$project->details!!}
                    </div> 
                </div>
                @endif
              @if(!empty($project->additional_info)) 
                <div class="col-12">
                  <h4>Details</h4>
                    <div class="post"> 
                      {!!$project->additional_info!!}
                    </div> 
                </div>
                @endif



              </div>
              <div class="row">
 


              @if(!empty($project->brochure)) 
              <a href="/uploads/{{$project->brochure}}" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                @endif

              </div>

            </div> 
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

@endsection

