@extends('layouts.master')

@section('title', 'Wishlist')


@section('content')
 
  
    <section class="pt-12">
      <div class="container">
        <h2 class="text-heading mb-4 fs-22 fs-md-32 text-center lh-16 px-md-13">
          GrandHome is an estate agency that helps people live in more thoughtful and beautiful ways.
        </h2>
         
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
    </section> 

@stop
