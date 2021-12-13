@extends('layouts.master')

@section('title', 'Wishlist')


@section('content')
 
 <section class="pt-12 pb-11">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mb-12 mb-lg-0">
            <div class="row align-items-sm-center mb-6">
              <div class="col-md-6">
                <h2 class="fs-15 text-dark mb-0">We found <span class="text-primary">45</span> properties available for
                  you
                </h2>
              </div> 
            </div>
            <div class="media mb-8 mb-lg-6 flex-column flex-lg-row align-items-lg-center no-gutters"
              data-animate="fadeInUp">
              <div class="col-lg-6 mr-lg-6 card border-sm-0 hover-change-image bg-hover-overlay">
                <img src="{{asset('');}}images/properties-list-06.jpg" class="card-img" alt="Home in Metric Way">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge badge-primary">For Sale</span>
                  </div>
                  <div class="mt-auto d-flex hover-image">
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
                      <li class="list-inline-item h-32  mr-3" data-toggle="tooltip" title="Compare">
                        <a href="#" class="text-white fs-20 hover-primary">
                          <i class="fas fa-exchange-alt"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="media-body mt-5 mt-lg-0">
                <h2 class="my-0"><a href="single-property-1.html"
                    class="fs-16 lh-2 text-dark hover-primary d-block">Home in Metric Way</a></h2>
                <p class="mb-1 font-weight-500 text-gray-light">1421 San Pedro St, Los Angeles</p>
                <p class="mb-2 ml-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse suscorem ipsum dolor
                  sitorem sit amet, sectetur cing elit uspe ndisse suscorem</p>
                <p class="fs-17 font-weight-bold text-heading mb-3">
                  $1.250.000
                </p>
                <ul class="list-inline d-flex mb-0 flex-wrap border-top pt-3 mr-n3 mr-n7">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg> 3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg> 3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg> 2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg> 1 Gr
                  </li>
                </ul>
              </div>
            </div>
            <div class="media mb-8 mb-lg-6 flex-column flex-lg-row align-items-lg-center no-gutters"
              data-animate="fadeInUp">
              <div class="col-lg-6 mr-lg-6 card border-sm-0 hover-change-image bg-hover-overlay">
                <img src="{{asset('');}}images/properties-list-16.jpg" class="card-img" alt="Garden Gingerbread House">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge badge-indigo">for Rent</span>
                  </div>
                  <div class="mt-auto d-flex hover-image">
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
                      <li class="list-inline-item h-32  mr-3" data-toggle="tooltip" title="Compare">
                        <a href="#" class="text-white fs-20 hover-primary">
                          <i class="fas fa-exchange-alt"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="media-body mt-5 mt-lg-0">
                <h2 class="my-0"><a href="single-property-1.html"
                    class="fs-16 lh-2 text-dark hover-primary d-block">Garden Gingerbread House</a></h2>
                <p class="mb-1 font-weight-500 text-gray-light">1421 San Pedro St, Los Angeles</p>
                <p class="mb-2 ml-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse suscorem ipsum dolor
                  sitorem sit amet, sectetur cing elit uspe ndisse suscorem</p>
                <p class="fs-17 font-weight-bold text-heading mb-3">
                  $550
                  <span class="fs-14 font-weight-500 text-gray-light"> /month</span>
                </p>
                <ul class="list-inline d-flex mb-0 flex-wrap border-top pt-3 mr-n3 mr-n7">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg> 3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg> 3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg> 2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg> 1 Gr
                  </li>
                </ul>
              </div>
            </div>
            <div class="media mb-8 mb-lg-6 flex-column flex-lg-row align-items-lg-center no-gutters"
              data-animate="fadeInUp">
              <div class="col-lg-6 mr-lg-6 card border-sm-0 hover-change-image bg-hover-overlay">
                <img src="{{asset('');}}images/properties-list-05.jpg" class="card-img" alt="Affordable Urban House">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge badge-indigo">for Rent</span>
                  </div>
                  <div class="mt-auto d-flex hover-image">
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
                      <li class="list-inline-item h-32  mr-3" data-toggle="tooltip" title="Compare">
                        <a href="#" class="text-white fs-20 hover-primary">
                          <i class="fas fa-exchange-alt"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="media-body mt-5 mt-lg-0">
                <h2 class="my-0"><a href="single-property-1.html"
                    class="fs-16 lh-2 text-dark hover-primary d-block">Affordable Urban House</a></h2>
                <p class="mb-1 font-weight-500 text-gray-light">1421 San Pedro St, Los Angeles</p>
                <p class="mb-2 ml-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse suscorem ipsum dolor
                  sitorem sit amet, sectetur cing elit uspe ndisse suscorem</p>
                <p class="fs-17 font-weight-bold text-heading mb-3">
                  $550
                  <span class="fs-14 font-weight-500 text-gray-light"> /month</span>
                </p>
                <ul class="list-inline d-flex mb-0 flex-wrap border-top pt-3 mr-n3 mr-n7">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg> 3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg> 3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg> 2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg> 1 Gr
                  </li>
                </ul>
              </div>
            </div>
            <div class="media mb-8 mb-lg-6 flex-column flex-lg-row align-items-lg-center no-gutters"
              data-animate="fadeInUp">
              <div class="col-lg-6 mr-lg-6 card border-sm-0 hover-change-image bg-hover-overlay">
                <img src="{{asset('');}}images/properties-list-17.jpg" class="card-img" alt="Villa on Hollywood Boulevard">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge badge-primary">For Sale</span>
                  </div>
                  <div class="mt-auto d-flex hover-image">
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
                      <li class="list-inline-item h-32  mr-3" data-toggle="tooltip" title="Compare">
                        <a href="#" class="text-white fs-20 hover-primary">
                          <i class="fas fa-exchange-alt"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="media-body mt-5 mt-lg-0">
                <h2 class="my-0"><a href="single-property-1.html"
                    class="fs-16 lh-2 text-dark hover-primary d-block">Villa on Hollywood Boulevard</a></h2>
                <p class="mb-1 font-weight-500 text-gray-light">1421 San Pedro St, Los Angeles</p>
                <p class="mb-2 ml-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse suscorem ipsum dolor
                  sitorem sit amet, sectetur cing elit uspe ndisse suscorem</p>
                <p class="fs-17 font-weight-bold text-heading mb-3">
                  $1.250.000
                </p>
                <ul class="list-inline d-flex mb-0 flex-wrap border-top pt-3 mr-n3 mr-n7">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg> 3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg> 3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg> 2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg> 1 Gr
                  </li>
                </ul>
              </div>
            </div>
            <div class="media mb-8 mb-lg-6 flex-column flex-lg-row align-items-lg-center no-gutters"
              data-animate="fadeInUp">
              <div class="col-lg-6 mr-lg-6 card border-sm-0 hover-change-image bg-hover-overlay">
                <img src="{{asset('');}}images/properties-list-18.jpg" class="card-img" alt="Explore Old Barcelona">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge badge-primary">For Sale</span>
                  </div>
                  <div class="mt-auto d-flex hover-image">
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
                      <li class="list-inline-item h-32  mr-3" data-toggle="tooltip" title="Compare">
                        <a href="#" class="text-white fs-20 hover-primary">
                          <i class="fas fa-exchange-alt"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="media-body mt-5 mt-lg-0">
                <h2 class="my-0"><a href="single-property-1.html"
                    class="fs-16 lh-2 text-dark hover-primary d-block">Explore Old Barcelona</a></h2>
                <p class="mb-1 font-weight-500 text-gray-light">1421 San Pedro St, Los Angeles</p>
                <p class="mb-2 ml-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse suscorem ipsum dolor
                  sitorem sit amet, sectetur cing elit uspe ndisse suscorem</p>
                <p class="fs-17 font-weight-bold text-heading mb-3">
                  $1.250.000
                </p>
                <ul class="list-inline d-flex mb-0 flex-wrap border-top pt-3 mr-n3 mr-n7">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg> 3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg> 3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg> 2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg> 1 Gr
                  </li>
                </ul>
              </div>
            </div>
            <div class="media mb-8 mb-lg-6 flex-column flex-lg-row align-items-lg-center no-gutters"
              data-animate="fadeInUp">
              <div class="col-lg-6 mr-lg-6 card border-sm-0 hover-change-image bg-hover-overlay">
                <img src="{{asset('');}}images/properties-list-19.jpg" class="card-img" alt="Home in Metric Way">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge badge-indigo">for Rent</span>
                  </div>
                  <div class="mt-auto d-flex hover-image">
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
                      <li class="list-inline-item h-32  mr-3" data-toggle="tooltip" title="Compare">
                        <a href="#" class="text-white fs-20 hover-primary">
                          <i class="fas fa-exchange-alt"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="media-body mt-5 mt-lg-0">
                <h2 class="my-0"><a href="single-property-1.html"
                    class="fs-16 lh-2 text-dark hover-primary d-block">Home in Metric Way</a></h2>
                <p class="mb-1 font-weight-500 text-gray-light">1421 San Pedro St, Los Angeles</p>
                <p class="mb-2 ml-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse suscorem ipsum dolor
                  sitorem sit amet, sectetur cing elit uspe ndisse suscorem</p>
                <p class="fs-17 font-weight-bold text-heading mb-3">
                  $550
                  <span class="fs-14 font-weight-500 text-gray-light"> /month</span>
                </p>
                <ul class="list-inline d-flex mb-0 flex-wrap border-top pt-3 mr-n3 mr-n7">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg> 3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg> 3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg> 2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg> 1 Gr
                  </li>
                </ul>
              </div>
            </div>
            <div class="media mb-8 mb-lg-6 flex-column flex-lg-row align-items-lg-center no-gutters"
              data-animate="fadeInUp">
              <div class="col-lg-6 mr-lg-6 card border-sm-0 hover-change-image bg-hover-overlay">
                <img src="{{asset('');}}images/properties-list-20.jpg" class="card-img" alt="Home in Metric Way">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge badge-primary">For Sale</span>
                  </div>
                  <div class="mt-auto d-flex hover-image">
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
                      <li class="list-inline-item h-32  mr-3" data-toggle="tooltip" title="Compare">
                        <a href="#" class="text-white fs-20 hover-primary">
                          <i class="fas fa-exchange-alt"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="media-body mt-5 mt-lg-0">
                <h2 class="my-0"><a href="single-property-1.html"
                    class="fs-16 lh-2 text-dark hover-primary d-block">Home in Metric Way</a></h2>
                <p class="mb-1 font-weight-500 text-gray-light">1421 San Pedro St, Los Angeles</p>
                <p class="mb-2 ml-0">Lorem ipsum dolor sit amet, sectetur cing elit uspe ndisse suscorem ipsum dolor
                  sitorem sit amet, sectetur cing elit uspe ndisse suscorem</p>
                <p class="fs-17 font-weight-bold text-heading mb-3">
                  $1.250.000
                </p>
                <ul class="list-inline d-flex mb-0 flex-wrap border-top pt-3 mr-n3 mr-n7">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg> 3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg> 3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg> 2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-xl-7 mr-3"
                    data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg> 1 Gr
                  </li>
                </ul>
              </div>
            </div>
            <nav class="pt-4 pt-lg-6">
              <ul class="pagination rounded-active justify-content-center mb-0">
                <li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-double-left"></i></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                <li class="page-item">...</li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-double-right"></i></a></li>
              </ul>
            </nav>
          </div> 
        </div>
      </div>
    </section>


@stop
