@extends('layouts.master')

@section('title', 'Developer')


@section('content')
 
 

  <div class="bg-gray-01"> 
      <section class="pb-11">
        <div class="container">
          <div class="row h-100">
            <div class="col-lg-8">
              <div class="card border-0 px-6 pt-6 pb-10">
                <div class="row h-100">
                  <div class="col-sm-5 mb-6 mb-sm-0">
                    <img class="rounded-lg border card-img" src="images/agency-list-01.jpg" alt="Eco house company">
                  </div>
                  <div class="col-sm-7">
                    <div class="card-body p-0">
                      <h2 class="card-title fs-22 lh-15 mb-1 text-dark">
                        Eco House Company
                      </h2>
                      <p class="card-text mb-1">
                        398 Pete Pascale Pl, New York
                      </p>
                      <ul class="list-inline mb-3">
                        <li class="list-inline-item fs-13 text-heading font-weight-500">4.8/5</li>
                        <li class="list-inline-item fs-13 text-heading font-weight-500 mr-1">
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-0">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-0">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-0">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-0">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-0">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                          </ul>
                        </li>
                      </ul>
                      <ul class="list-group list-group-no-border">
                        <li class="list-group-item d-flex align-items-sm-center lh-214 row mb-0 mt-3 mx-n1 p-0 ">
                          <span class="col-sm-3 px-1">Social</span>
                          <ul class="col-sm-9 list-inline text-gray-lighter m-0 px-1">
                            <li class="list-inline-item m-0">
                              <a href="#"
                                class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                  class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item mr-0 ml-2">
                              <a href="#"
                                class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                  class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item mr-0 ml-2">
                              <a href="#"
                                class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                  class="fab fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item mr-0 ml-2">
                              <a href="#"
                                class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i
                                  class="fab fa-linkedin-in"></i></a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card border-0">
                <div class="card-body p-6">
                  <h3 class="card-title fs-16 text-dark mb-6">
                    Contact us about this developer
                  </h3>
                  <form>
                    <div class="form-group mb-2">
                      <input type="text" class="form-control form-control-lg border-0"
                        placeholder="First Name, Last Name" name="name">
                    </div>
                    <div class="form-group mb-2">
                      <input type="email" class="form-control form-control-lg border-0" placeholder="Your Email"
                        name="email">
                    </div>
                    <div class="form-group mb-2">
                      <input type="tel" class="form-control form-control-lg border-0" placeholder="Your phone"
                        name="phone">
                    </div>
                    <div class="form-group mb-4">
                      <textarea class="form-control form-control-lg border-0" rows="5" placeholder="Message"
                        name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Send Message</button>
                  </form>
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
              <li class="nav-item ml-0">
                <a href="#projects" class="nav-link shadow-none fs-13" data-toggle="tab" role="tab">
                  Projects
                </a>
              </li>
              <li class="nav-item ml-0">
                <a href="#agency-map" class="nav-link shadow-none fs-13" data-toggle="tab" role="tab">
                  Map
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
                          About EcoHouse Company
                        </h2>
                        <p class="card-text lh-214 mb-3">Massa tempor nec feugiat nisl pretium. Egestas fringilla
                          phasellus faucibus scelerisque eleifend donec. Porta nibh venenatis cras sed felis eget velit
                          aliquet. Neque volutpat ac tincidunt vitae semper quis
                          lectus. Turpis in eu mi bibendum neque egestas congue quisque. Sed elementum tempus egestas
                          sed sed risus pretium quam. Dignissim sodales ut eu sem. Nibh mauris cursus mattis mole stie a
                          iaculis at erat
                          pellentesque. Id interdum velit laoreet id donec ultrices tincidunt. Pelle ntesque eu
                          tincidunt tortor aliquam nulla facilisi cras fermentum odio. </p>
                        <p class="card-text lh-213 fs-16 font-weight-500 text-dark pl-lg-8 mb-6">
                          Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Duis
                          mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio.
                        </p>
                        <p class="card-text mb-6 mb-md-0">Massa tempor nec feugiat nisl pretium. Egestas fringilla
                          phasellus faucibus scelerisque eleifend donec. Porta nibh venenatis cras sed felis eget velit
                          aliquet. Neque volutpat ac tincidunt vitae semper quis
                          lectus. Turpis in eu mi bibendum neque egestas congue quisque. Nibh mauris cursus mattis
                          molestie a iaculis at erat pellentesque. Massa tempor nec feugiat nisl pretium. Egestas
                          fringilla phasellus faucibus
                          scelerisque eleifend donec. Porta nibh venenatis cras sed felis eget velit aliquet. Neque
                          volutpat ac tincidunt vitae semper quis lectus. </p>
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
                              All (6)
                            </a>
                          </li>
                          <li class="nav-item ml-0 px-3 px-sm-6 py-1">
                            <a href="#sale"
                              class="nav-link shadow-none nested-nav-link bg-transparent p-0 letter-spacing-1"
                              data-toggle="pill" role="tab">
                              For Sale (3)
                            </a>
                          </li>
                          <li class="nav-item ml-0 px-3 px-sm-6 py-1">
                            <a href="#rent"
                              class="nav-link shadow-none nested-nav-link bg-transparent p-0 letter-spacing-1"
                              data-toggle="pill" role="tab">
                              For Rent (3)
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content shadow-none pt-5 pb-0 px-0 bg-white">
                          <div class="tab-pane nested-tab-pane fade show active" id="all" role="tabpanel">
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
                            <a href="#" class="btn btn-lg text-heading bg-hover-light border px-5">View
                              more <span class="text-primary fs-15 lh-1 text-primary d-inline-block ml-2">
                                <i class="fal fa-long-arrow-down"></i>
                              </span> </a>
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
                <div class="tab-pane tab-pane-parent fade" id="projects" role="tabpanel">
                  <div class="card border-0 bg-transparent">
                    <div class="card-header border-0 d-block d-md-none bg-transparent p-0">
                      <h5 class="mb-0">
                        <button
                          class="btn lh-2 fs-18 bg-white py-1 px-6 shadow-none w-100 collapse-parent border collapsed mb-4"
                          data-toggle="collapse" data-target="#agents-collapse" aria-expanded="true"
                          aria-controls="agents-collapse">
                          Agents
                        </button>
                      </h5>
                    </div>
                    <div id="agents-collapse" class="collapse collapsible pb-5 pb-md-0"
                      data-parent="#collapse-tabs-accordion-01">
                      <div class="card-body p-0">
                        <h2 class="card-title fs-22 lh-15 mb-6 text-dark">
                          Developer Projects
                        </h2>
                        <div class="d-flex flex-wrap listing-agents">
                          <div class="card border-0 px-7 mb-8">
                            <div class="card-body p-0 text-center">
                              <a href="agent-details-1.html" class="d-block text-center">
                                <img src="images/project.png" class="mb-2" alt="Oliver Beddows">
                              </a>
                              <a href="agent-details-1.html"
                                class="card-title d-block text-dark fs-16 font-weight-500 lh-2 hover-primary mb-0">
                                Stone Residence
                              </a>
                              <p class="card-text">
                                Project
                              </p>
                            </div>
                          </div>
                          <div class="card border-0 px-7 mb-8">
                            <div class="card-body p-0 text-center">
                              <a href="agent-details-1.html" class="d-block text-center">
                                <img src="images/project.png" class="mb-2" alt="Oliver Beddows">
                              </a>
                              <a href="agent-details-1.html"
                                class="card-title d-block text-dark fs-16 font-weight-500 lh-2 hover-primary mb-0">
                                Stone Residence
                              </a>
                              <p class="card-text">
                                Project
                              </p>
                            </div>
                          </div>
                          <div class="card border-0 px-7 mb-8">
                            <div class="card-body p-0 text-center">
                              <a href="agent-details-1.html" class="d-block text-center">
                                <img src="images/project.png" class="mb-2" alt="Oliver Beddows">
                              </a>
                              <a href="agent-details-1.html"
                                class="card-title d-block text-dark fs-16 font-weight-500 lh-2 hover-primary mb-0">
                                Stone Residence
                              </a>
                              <p class="card-text">
                                Project
                              </p>
                            </div>
                          </div>
                          <div class="card border-0 px-7 mb-8">
                            <div class="card-body p-0 text-center">
                              <a href="agent-details-1.html" class="d-block text-center">
                                <img src="images/project.png" class="mb-2" alt="Oliver Beddows">
                              </a>
                              <a href="agent-details-1.html"
                                class="card-title d-block text-dark fs-16 font-weight-500 lh-2 hover-primary mb-0">
                                Stone Residence
                              </a>
                              <p class="card-text">
                                Project
                              </p>
                            </div>
                          </div>
                          <div class="card border-0 px-7 mb-8">
                            <div class="card-body p-0 text-center">
                              <a href="agent-details-1.html" class="d-block text-center">
                                <img src="images/project.png" class="mb-2" alt="Oliver Beddows">
                              </a>
                              <a href="agent-details-1.html"
                                class="card-title d-block text-dark fs-16 font-weight-500 lh-2 hover-primary mb-0">
                                Stone Residence
                              </a>
                              <p class="card-text">
                                Project
                              </p>
                            </div>
                          </div>
                          <div class="card border-0 px-7 mb-8">
                            <div class="card-body p-0 text-center">
                              <a href="agent-details-1.html" class="d-block text-center">
                                <img src="images/project.png" class="mb-2" alt="Oliver Beddows">
                              </a>
                              <a href="agent-details-1.html"
                                class="card-title d-block text-dark fs-16 font-weight-500 lh-2 hover-primary mb-0">
                                Stone Residence
                              </a>
                              <p class="card-text">
                                Project
                              </p>
                            </div>
                          </div>
                          <div class="card border-0 px-7 mb-8">
                            <div class="card-body p-0 text-center">
                              <a href="agent-details-1.html" class="d-block text-center">
                                <img src="images/project.png" class="mb-2" alt="Oliver Beddows">
                              </a>
                              <a href="agent-details-1.html"
                                class="card-title d-block text-dark fs-16 font-weight-500 lh-2 hover-primary mb-0">
                                Stone Residence
                              </a>
                              <p class="card-text">
                                Project
                              </p>
                            </div>
                          </div>
                          <div class="card border-0 px-7 mb-8">
                            <div class="card-body p-0 text-center">
                              <a href="agent-details-1.html" class="d-block text-center">
                                <img src="images/project.png" class="mb-2" alt="Oliver Beddows">
                              </a>
                              <a href="agent-details-1.html"
                                class="card-title d-block text-dark fs-16 font-weight-500 lh-2 hover-primary mb-0">
                                Stone Residence
                              </a>
                              <p class="card-text">
                                Project
                              </p>
                            </div>
                          </div>
                          <div class="card border-0 px-7 mb-8">
                            <div class="card-body p-0 text-center">
                              <a href="agent-details-1.html" class="d-block text-center">
                                <img src="images/project.png" class="mb-2" alt="Oliver Beddows">
                              </a>
                              <a href="agent-details-1.html"
                                class="card-title d-block text-dark fs-16 font-weight-500 lh-2 hover-primary mb-0">
                                Stone Residence
                              </a>
                              <p class="card-text">
                                Project
                              </p>
                            </div>
                          </div>
                          <div class="card border-0 px-7 mb-8">
                            <div class="card-body p-0 text-center">
                              <a href="agent-details-1.html" class="d-block text-center">
                                <img src="images/project.png" class="mb-2" alt="Oliver Beddows">
                              </a>
                              <a href="agent-details-1.html"
                                class="card-title d-block text-dark fs-16 font-weight-500 lh-2 hover-primary mb-0">
                                Stone Residence
                              </a>
                              <p class="card-text">
                                Project
                              </p>
                            </div>
                          </div>
                          <div class="card border-0 px-7 mb-8">
                            <div class="card-body p-0 text-center">
                              <a href="agent-details-1.html" class="d-block text-center">
                                <img src="images/project.png" class="mb-2" alt="Oliver Beddows">
                              </a>
                              <a href="agent-details-1.html"
                                class="card-title d-block text-dark fs-16 font-weight-500 lh-2 hover-primary mb-0">
                                Stone Residence
                              </a>
                              <p class="card-text">
                                Project
                              </p>
                            </div>
                          </div>
                          <div class="card border-0 px-7 mb-8">
                            <div class="card-body p-0 text-center">
                              <a href="agent-details-1.html" class="d-block text-center">
                                <img src="images/project.png" class="mb-2" alt="Oliver Beddows">
                              </a>
                              <a href="agent-details-1.html"
                                class="card-title d-block text-dark fs-16 font-weight-500 lh-2 hover-primary mb-0">
                                Stone Residence
                              </a>
                              <p class="card-text">
                                Project
                              </p>
                            </div>
                          </div>
                          <div class="card border-0 px-7 mb-8">
                            <div class="card-body p-0 text-center">
                              <a href="agent-details-1.html" class="d-block text-center">
                                <img src="images/project.png" class="mb-2" alt="Oliver Beddows">
                              </a>
                              <a href="agent-details-1.html"
                                class="card-title d-block text-dark fs-16 font-weight-500 lh-2 hover-primary mb-0">
                                Stone Residence
                              </a>
                              <p class="card-text">
                                Project
                              </p>
                            </div>
                          </div>
                        </div>
                        <a href="#" class="btn btn-lg text-heading bg-hover-light border px-5">View
                          more <span class="text-primary fs-15 lh-1 text-primary d-inline-block ml-2">
                            <i class="fal fa-long-arrow-down"></i>
                          </span> </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane tab-pane-parent fade" id="agency-map" role="tabpanel">
                  <div class="card border-0 bg-transparent">
                    <div class="card-header border-0 d-block d-md-none bg-transparent p-0">
                      <h5 class="mb-0">
                        <button
                          class="btn lh-2 fs-18 bg-white py-1 px-6 shadow-none w-100 collapse-parent border collapsed mb-4"
                          data-toggle="collapse" data-target="#map-collapse" aria-expanded="true"
                          aria-controls="map-collapse">
                          Map
                        </button>
                      </h5>
                    </div>
                    <div id="map-collapse" class="collapse collapsible" data-parent="#collapse-tabs-accordion-01">
                      <div class="card-body p-0">
                        <h2 class="card-title fs-22 lh-15 mb-1 text-dark">
                          Visit our office
                        </h2>
                        <p class="card-text mb-7">
                          2005 Stokes Isle Apt. 896, Venaville, New York
                        </p>
                        <div id="map" class="mapbox-gl map-point-animate" style="height: 470px"
                          data-mapbox-access-token="pk.eyJ1IjoicW1hc3RlcjEwMSIsImEiOiJja3ZzYnU3ZXkwZzRlMm5seTNiYmdrYTBxIn0.Zfs6r4Bc1_llJdZCeVGPkQ"
                          data-mapbox-options='{"zoom":4,"center":[-73.9927227, 40.6741035],"setLngLat":[-73.9927227, 40.6741035]}'
                          data-mapbox-marker='[{"position":[-73.9927227, 40.6741035],"className":"marker","backgroundImage":"images/googlle-market-01.png","backgroundRepeat":"no-repeat","width":"30px","height":"40px"}]'>
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
    <div class="bottom-bar-action py-2 px-4 bg-gray-01 position-fixed fixed-bottom d-block d-sm-none">
      <div class="container">
        <div class="row no-gutters mx-n2 mxw-571 mx-auto">
          <div class="col-6 px-2">
            <a href="#modal-messenger" data-toggle="modal"
              class="btn btn-primary btn-lg btn-block fs-14 px-1 py-3 h-auto lh-13">Send Message</a>
          </div>
          <div class="col-6 px-2">
            <a href="tel:(+84)2388-969-888"
              class="btn btn-primary btn-lg btn-block fs-14 px-1 py-3 h-auto lh-13">Call</a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modal-messenger" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header border-0 pb-0">
            <h4 class="modal-title text-heading" id="exampleModalLabel">Contact Form</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pb-6">
            <div class="form-group mb-2">
              <input type="text" class="form-control form-control-lg border-0" placeholder="First Name, Last Name">
            </div>
            <div class="form-group mb-2">
              <input type="email" class="form-control form-control-lg border-0" placeholder="Your Email">
            </div>
            <div class="form-group mb-2">
              <input type="tel" class="form-control form-control-lg border-0" placeholder="Your phone">
            </div>
            <div class="form-group mb-2">
              <textarea class="form-control border-0"
                rows="4">Hello, I'm interested in Villa Called Archangel</textarea>
            </div>
            <div class="form-group form-check mb-4">
              <input type="checkbox" class="form-check-input" id="exampleCheck3">
              <label class="form-check-label fs-13" for="exampleCheck3">Egestas fringilla phasellus faucibus
                scelerisque eleifend donec.</label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Request Info</button>
          </div>
        </div>
      </div>
    </div>


    
@stop
