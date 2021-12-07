@extends('layouts.admin')

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid"><div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ count($developers) }}</h3>

                <p>Developrs</p>
              </div>
              <div class="icon">
                <i class="fas fa-tools"></i>
              </div>
              <a href="/admin/listdevelopers" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ count($categories )}}</h3>

                <p>Category</p>
              </div>
              <div class="icon">
                <i class="fas fa-list-ul"></i>
              </div>
              <a href="/admin/listcategory" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ count($projects )}}</h3>

                <p>Project</p>
              </div>
              <div class="icon">
                <i class="fas fa-building"></i>
              </div>
              <a href="/admin/listproject" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{count($units)}}</h3>

                <p>Units</p>
              </div>
              <div class="icon">
                <i class="fas fa-building"></i>
              </div>
              <a href="/admin/listunit" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ count($districts) }}</h3>

                <p>Districts</p>
              </div>
              <div class="icon">
                <i class="fas fa-th"></i>
              </div>
              <a href="/admin/listdistrict" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ count($propertytypes )}}</h3>

                <p>Property Type</p>
              </div>
              <div class="icon">
                <i class="fas fa-warehouse"></i>
              </div>
              <a href="/admin/listpropertytype" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ count($facilities )}}</h3>

                <p>Facilities</p>
              </div>
              <div class="icon">
                <i class="fas fa-warehouse"></i>
              </div>
              <a href="/admin/listfacilities" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>--</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection
