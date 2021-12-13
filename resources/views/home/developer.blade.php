@extends('layouts.master')

@section('title', $developer->{'title_' . App()->getLocale()} )


@section('content')
 
 
<section class="pt-5 py-6"></section>
  <div class="bg-gray-01"> 
      <section class="pb-11">
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-12">
              <div class="card border-0 px-6 pt-6 pb-10">
                <div class="row h-100">
                  <div class="col-sm-12 mb-6 mb-sm-0 text-center">
                    <img width="300"  class="rounded-lg border " src="{{asset('');}}uploads/{{ $developer->image }}" alt="{{ $developer->{'title_' . App()->getLocale()} }}">
                  </div>
                  <p></p>
                  <div class="col-sm-12">
                    <div class="card-body p-0">
                      <h2 class="card-title fs-22 lh-15 mb-1 text-dark text-center">
                        {{ $developer->{'title_' . App()->getLocale()} }}
                      </h2>   
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </section>
      <section class="pb-11">
        <div class="container">
          <div class="collapse-tabs mb-10">
            <ul class="nav nav-tabs text-uppercase d-none d-md-inline-flex agent-details-tabs" role="tablist">
              <li class="nav-item">
                <a href="#overview" class="nav-link active shadow-none fs-13" data-toggle="tab" role="tab">
                  Overview
                </a>
              </li>
              <li class="nav-item ml-0">
                <a href="#listing" class="nav-link shadow-none fs-13" data-toggle="tab" role="tab">
                  Listings
                </a>
              </li> 
            </ul>
            <div class="tab-content shadow-none py-7 px-6 bg-white">
              <div id="collapse-tabs-accordion-01">
                <div class="tab-pane tab-pane-parent fade show active" id="overview" role="tabpanel">
                  <div class="card border-0 bg-transparent">
                    <div class="card-header border-0 d-block d-md-none bg-transparent px-0 py-1">
                      <h5 class="mb-0">
                        <button class="btn lh-2 fs-18 bg-white py-1 px-6 mb-4 shadow-none w-100 collapse-parent border"
                          data-toggle="collapse" data-target="#overview-collapse" aria-expanded="true"
                          aria-controls="overview-collapse">
                          Overview
                        </button>
                      </h5>
                    </div>
                    <div id="overview-collapse" class="collapse show collapsible"
                      data-parent="#collapse-tabs-accordion-01">
                      <div class="card-body p-0">
                        <h2 class="card-title fs-22 lh-15 mb-1 text-dark">
                          About  {{ $developer->{'title_' . App()->getLocale()} }}
                        </h2>
                         {!! $developer->{'details_' . App()->getLocale()} !!}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane tab-pane-parent fade" id="listing" role="tabpanel">
                  <div class="card border-0 bg-transparent">
                    <div class="card-header border-0 d-block d-md-none bg-transparent p-0">
                      <h5 class="mb-0">
                        <button
                          class="btn lh-2 fs-18 bg-white py-1 px-6 shadow-none w-100 collapse-parent border collapsed mb-4"
                          data-toggle="collapse" data-target="#listing-collapse" aria-expanded="true"
                          aria-controls="listing-collapse">
                          Listings
                        </button>
                      </h5>
                    </div>
                    <div id="listing-collapse" class="collapse collapsible pb-5 pb-md-0"
                      data-parent="#collapse-tabs-accordion-01">
                      <div class="card-body p-0">
                        <h2 class="card-title fs-22 lh-15 mb-3 text-dark">
                          Our Listing
                        </h2>
                        <ul class="nav nav-pills text-capitalize nav-pills-01 mx-n5" role="tablist">
                          <li class="nav-item px-3 px-sm-6 py-1">
                            <a href="#all"
                              class="nav-link active shadow-none nested-nav-link bg-transparent p-0 letter-spacing-1"
                              data-toggle="pill" role="tab">
                              All ({{ count($projects) }})
                            </a>
                          </li> 
                        </ul>
                        <div class="tab-content shadow-none pt-5 pb-0 px-0 bg-white">
                          <div class="tab-pane nested-tab-pane fade show active" id="all" role="tabpanel">
                            <div class="row">
                              

                              @foreach ( $projects as $project ) 
                    <div class="col-4 box pb-7 pt-2">
                        <a href="{{url('');}}/property/{{ $project->slug }}">
                            <div class="card" data-animate="zoomIn">
                                <div class="hover-change-imagee rounded-lg card-img-top" onmouseenter="runAnimation(this)"
                                    onmouseleave="runAnimation2(this)">
                                    <special></special>
                                    <img src="{{asset('');}}uploads/{{ $project->image }}" style=""
                                        alt="{{ $project->{'title_'.App()->getLocale()} }}">
                                    <div class="card-img-overlayy p-2 d-flex flex-column">
                                        <div>
                                            @if ($project->unit)
                                                <span class="badge mr-2 badge-orange">Unit</span>
                                            @endif
                                            @if ($project->main_type==1)
                                            <span class="badge mr-2 badge-primary">for Sale</span>
                                            @endif
                                            @if ($project->main_type==2)
                                            <span class="badge mr-2 badge-primary">for Rent</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-3">
                                    <h2 class="card-title fs-16 lh-2 mb-0">{{ $project->{'title_'.App()->getLocale()} }}</h2>
                                    <p class="card-text font-weight-500 text-gray-light mb-2">{{ $project->{'address_'.App()->getLocale()} }}
                                    </p>
                                    <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                                    <?php $i=0; ?>
                                    @foreach ($project->facilities as $facility) 
                                        @if($i<6) 
                                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                            data-toggle="tooltip"
                                            title="{{ $facility->facility->{'title_' . App()->getLocale()} }}">
                                            <img src="{{asset('');}}uploads/{{ $facility->facility->image }}" width="30">
                                        </li>
                                        @endif
                                    <?php $i++; ?>
                                    @endforeach
                                    </ul>
                                </div>
                                <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                    <p class="fs-17 font-weight-bold text-heading mb-0">{{ $project->price }} </p>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="#"
                                                class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent"
                                                data-toggle="tooltip" title="Wishlist"><i class="fas fa-heart"></i></a>
                                        </li> 
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

                            </div>
                            {{-- <a href="#" class="btn btn-lg text-heading bg-hover-light border px-5">View
                              more <span class="text-primary fs-15 lh-1 text-primary d-inline-block ml-2">
                                <i class="fal fa-long-arrow-down"></i>
                              </span> </a> --}}
                          </div>
                          <div class="tab-pane nested-tab-pane fade" id="sale" role="tabpanel">
                            <div class="row">
                              <div class="col-md-6 col-lg-4 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="images/properties-grid-35.jpg" alt="Home in Metric Way">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-primary">For Sale</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
                                            <a href="#" class="text-white hover-primary">
                                              <i class="far fa-images"></i><span class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                                            <a href="#" class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32" data-toggle="tooltip" title="Wishlist">
                                            <a href="#" class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32" data-toggle="tooltip" title="Compare">
                                            <a href="#" class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a href="single-property-1.html"
                                        class="text-dark hover-primary">Home in Metric Way</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $1.250.000
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                        data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg> 3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                        data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg> 3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13" data-toggle="tooltip"
                                        title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg> 2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 col-lg-4 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="images/properties-grid-37.jpg" alt="Affordable Urban House">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-primary">For Sale</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
                                            <a href="#" class="text-white hover-primary">
                                              <i class="far fa-images"></i><span class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                                            <a href="#" class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32" data-toggle="tooltip" title="Wishlist">
                                            <a href="#" class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32" data-toggle="tooltip" title="Compare">
                                            <a href="#" class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a href="single-property-1.html"
                                        class="text-dark hover-primary">Affordable Urban House</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $1.250.000
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                        data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg> 3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                        data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg> 3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13" data-toggle="tooltip"
                                        title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg> 2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 col-lg-4 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="images/properties-grid-67.jpg" alt="Home in Metric Way">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-primary">For Sale</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
                                            <a href="#" class="text-white hover-primary">
                                              <i class="far fa-images"></i><span class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                                            <a href="#" class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32" data-toggle="tooltip" title="Wishlist">
                                            <a href="#" class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32" data-toggle="tooltip" title="Compare">
                                            <a href="#" class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a href="single-property-1.html"
                                        class="text-dark hover-primary">Home in Metric Way</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $1.250.000
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                        data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg> 3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                        data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg> 3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13" data-toggle="tooltip"
                                        title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg> 2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane nested-tab-pane fade" id="rent" role="tabpanel">
                            <div class="row">
                              <div class="col-md-6 col-lg-4 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="images/properties-grid-36.jpg" alt="Villa on Hollywood Boulevard">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-indigo">for Rent</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
                                            <a href="#" class="text-white hover-primary">
                                              <i class="far fa-images"></i><span class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                                            <a href="#" class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32" data-toggle="tooltip" title="Wishlist">
                                            <a href="#" class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32" data-toggle="tooltip" title="Compare">
                                            <a href="#" class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a href="single-property-1.html"
                                        class="text-dark hover-primary">Villa on Hollywood Boulevard</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $550
                                      <span class="fs-14 font-weight-500 text-gray-light"> /month</span>
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                        data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg> 3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                        data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg> 3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13" data-toggle="tooltip"
                                        title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg> 2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 col-lg-4 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="images/properties-grid-73.jpg" alt="Explore Old Barcelona">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-indigo">for Rent</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
                                            <a href="#" class="text-white hover-primary">
                                              <i class="far fa-images"></i><span class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                                            <a href="#" class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32" data-toggle="tooltip" title="Wishlist">
                                            <a href="#" class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32" data-toggle="tooltip" title="Compare">
                                            <a href="#" class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a href="single-property-1.html"
                                        class="text-dark hover-primary">Explore Old Barcelona</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $1.250.000
                                      <span class="fs-14 font-weight-500 text-gray-light"> /month</span>
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                        data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg> 3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                        data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg> 3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13" data-toggle="tooltip"
                                        title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg> 2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6 col-lg-4 mb-7">
                                <div class="card border-0">
                                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                    <img src="images/properties-grid-68.jpg" alt="Garden Gingerbread House">
                                    <div class="card-img-overlay d-flex flex-column">
                                      <div class="mb-auto">
                                        <span class="badge badge-indigo">for Rent</span>
                                      </div>
                                      <div class="d-flex hover-image">
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                                          <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
                                            <a href="#" class="text-white hover-primary">
                                              <i class="far fa-images"></i><span class="pl-1">9</span>
                                            </a>
                                          </li>
                                          <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                                            <a href="#" class="text-white hover-primary">
                                              <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                                          <li class="list-inline-item mr-3 h-32" data-toggle="tooltip" title="Wishlist">
                                            <a href="#" class="text-white fs-20 hover-primary">
                                              <i class="far fa-heart"></i>
                                            </a>
                                          </li>
                                          <li class="list-inline-item mr-3 h-32" data-toggle="tooltip" title="Compare">
                                            <a href="#" class="text-white fs-20 hover-primary">
                                              <i class="fas fa-exchange-alt"></i>
                                            </a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body pt-3 px-0 pb-1">
                                    <h2 class="fs-16 mb-1"><a href="single-property-1.html"
                                        class="text-dark hover-primary">Garden Gingerbread House</a>
                                    </h2>
                                    <p class="font-weight-500 text-gray-light mb-0">
                                      1421 San Pedro St, Los Angeles</p>
                                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                                      $550
                                      <span class="fs-14 font-weight-500 text-gray-light"> /month</span>
                                    </p>
                                  </div>
                                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                        data-toggle="tooltip" title="3 Br">
                                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                        </svg> 3 Br
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7"
                                        data-toggle="tooltip" title="3 Ba">
                                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                        </svg> 3 Ba
                                      </li>
                                      <li class="list-inline-item text-gray font-weight-500 fs-13" data-toggle="tooltip"
                                        title="2300 Sq.Ft">
                                        <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                        </svg> 2300 Sq.Ft
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>  


    
@stop
