@extends('layouts.master')

@section('title', 'Property page')


@section('content')
    <section class="pt-5 py-6"></section>
    <section class="bg-secondary pt-5 py-6">
        <div class="container">
            <form class="search-form d-none d-lg-block">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-md-6">
                                <label
                                    class="text-uppercase font-weight-500 opacity-7 text-white letter-spacing-093 mb-1">Home
                                    Type</label>
                                <select
                                    class="form-control selectpicker bg-transparent border-bottom rounded-0 border-input-opacity-02"
                                    name="type" title="Select" data-style="p-0 h-24 lh-17 text-white">
                                    <option>Condominium</option>
                                    <option>Single-Family Home</option>
                                    <option>Townhouse</option>
                                    <option>Multi-Family Home</option>
                                </select>
                            </div>
                            <div class="col-md-6 pl-md-3 pt-md-0 pt-6">
                                <label
                                    class="text-uppercase font-weight-500 opacity-7 text-white letter-spacing-093 mb-1">Location</label>
                                <select
                                    class="form-control selectpicker bg-transparent border-bottom rounded-0 border-input-opacity-02"
                                    name="location" title="Select" data-style="p-0 h-24 lh-17 text-white">
                                    <option>Austin</option>
                                    <option>Boston</option>
                                    <option>Chicago</option>
                                    <option>Denver</option>
                                    <option>Los Angeles</option>
                                    <option>New York</option>
                                    <option>San Francisco</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 pt-lg-0 pt-6">
                        <label class="text-uppercase font-weight-500 opacity-7 text-white letter-spacing-093">Search</label>
                        <div class="position-relative">
                            <input type="text" name="search"
                                class="form-control bg-transparent shadow-none border-top-0 border-right-0 border-left-0 border-bottom rounded-0 h-24 lh-17 p-0 pr-md-5 text-white placeholder-light font-weight-500 border-input-opacity-02"
                                placeholder="Enter an address, neighbourhood...">
                            <i
                                class="far fa-search position-absolute pos-fixed-right-center pr-0 fs-18 text-white pb-2 d-none d-md-block"></i>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 pt-lg-0 pt-7">
                        <button type="submit"
                            class="btn bg-white-opacity-01 bg-white-hover-opacity-03 h-lg-100 w-100 shadow-none text-white rounded-0 fs-16 font-weight-600">
                            Search
                        </button>
                    </div>
                </div>
            </form>
            <form class="property-search property-search-mobile d-lg-none">
                <div class="row align-items-lg-center" id="accordion-mobile">
                    <div class="col-12">
                        <div class="form-group mb-0 position-relative">
                            <a href="#advanced-search-filters-mobile"
                                class="icon-primary btn advanced-search shadow-none pr-3 pl-0 d-flex align-items-center position-absolute pos-fixed-left-center py-0 h-100 border-right collapsed"
                                data-toggle="collapse" data-target="#advanced-search-filters-mobile" aria-expanded="true"
                                aria-controls="advanced-search-filters-mobile">
                            </a>
                            <input type="text"
                                class="form-control form-control-lg border-0 shadow-none pr-9 pl-11 bg-white placeholder-muted"
                                name="key-word" placeholder="Search...">
                            <button type="submit"
                                class="btn position-absolute pos-fixed-right-center p-0 text-heading fs-20 px-3 shadow-none h-100 border-left bg-white">
                                <i class="far fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div id="advanced-search-filters-mobile" class="col-12 pt-2 collapse" data-parent="#accordion-mobile">
                        <div class="row mx-n2">
                            <div class="col-sm-6 pt-4 px-2">
                                <select class="form-control border-0 shadow-none form-control-lg selectpicker bg-white"
                                    title="Home Types" data-style="btn-lg py-2 h-52 bg-white" name="type">
                                    <option>Condominium</option>
                                    <option>Single-Family Home</option>
                                    <option>Townhouse</option>
                                    <option>Multi-Family Home</option>
                                </select>
                            </div>
                            <div class="col-sm-6 pt-4 px-2">
                                <select class="form-control border-0 shadow-none form-control-lg selectpicker bg-white"
                                    name="bedroom" title="Location" data-style="btn-lg py-2 h-52 bg-white">
                                    <option>Austin</option>
                                    <option>Boston</option>
                                    <option>Chicago</option>
                                    <option>Denver</option>
                                    <option>Los Angeles</option>
                                    <option>New York</option>
                                    <option>San Francisco</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="bg-white shadow-5 pb-1">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb py-3">
                    <li class="breadcrumb-item fs-12 letter-spacing-087">
                        <a href=".html">Home</a>
                    </li>
                    <li class="breadcrumb-item fs-12 letter-spacing-087">
                        <a href="listing-grid-with-left-filter.html">Listing</a>
                    </li>
                    <li class="breadcrumb-item fs-12 letter-spacing-087 active">Villa on Hollywood Boulevard</li>
                </ol>
            </nav>
            <div class="galleries position-relative" data-animate="zoomIn">
                <div class="position-absolute pos-fixed-top-right z-index-3">
                    <ul class="list-inline pt-4 pr-5">
                        <li class="list-inline-item mr-2">
                            <a href="#" data-toggle="tooltip" title=""
                                class="d-flex align-items-center justify-content-center w-40px h-40 bg-white text-heading bg-hover-primary hover-white rounded-circle"
                                data-original-title="Favourite">
                                <i class="far fa-heart"></i></a>
                        </li>
                        <li class="list-inline-item mr-2">
                            <button type="button"
                                class="btn btn-white p-0 d-flex align-items-center justify-content-center w-40px h-40 text-heading bg-hover-primary hover-white rounded-circle border-0 shadow-none"
                                data-container="body" data-toggle="popover" data-placement="top" data-html="true"
                                data-content=' <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                          <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                                    class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item ">
                          <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                                    class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                                    class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                                    class="fab fa-youtube"></i></a>
                        </li>
                      </ul>
                      '>
                                <i class="far fa-share-alt"></i>
                            </button>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" data-toggle="tooltip" title=""
                                class="d-flex align-items-center justify-content-center w-40px h-40 bg-white text-heading bg-hover-primary hover-white rounded-circle"
                                data-original-title="Print">
                                <i class="far fa-print"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="slick-slider slider-for"
                    data-slick-options='{"slidesToShow": 1, "autoplay":false,"dots":false,"arrows":false,"asNavFor": ".slider-nav"}'>
                    <div class="box">
                        <div class="item item-size-3-2">
                            <div class="card p-0 hover-change-images">
                                <a href="/images/single-property-lg-1.jpg" class="card-img" data-gtf-mfp="true"
                                    data-gallery-id="02" style="background-image:url('/images/single-property-lg-1.jpg')">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="item item-size-3-2">
                            <div class="card p-0 hover-change-images">
                                <a href="/images/single-property-lg-4.jpg" class="card-img" data-gtf-mfp="true"
                                    data-gallery-id="02" style="background-image:url('/images/single-property-lg-4.jpg')">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="item item-size-3-2">
                            <div class="card p-0 hover-change-images">
                                <a href="/images/single-property-17.jpg" class="card-img" data-gtf-mfp="true"
                                    data-gallery-id="02" style="background-image:url('/images/single-property-17.jpg')">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="item item-size-3-2">
                            <div class="card p-0 hover-change-images">
                                <a href="/images/single-property-lg-3.jpg" class="card-img" data-gtf-mfp="true"
                                    data-gallery-id="02" style="background-image:url('/images/single-property-lg-3.jpg')">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="item item-size-3-2">
                            <div class="card p-0 hover-change-images">
                                <a href="/images/single-property-7.jpg" class="card-img" data-gtf-mfp="true"
                                    data-gallery-id="02" style="background-image:url('/images/single-property-7.jpg')">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="item item-size-3-2">
                            <div class="card p-0 hover-change-images">
                                <a href="/images/single-property-18.jpg" class="card-img" data-gtf-mfp="true"
                                    data-gallery-id="02" style="background-image:url('/images/single-property-18.jpg')">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="item item-size-3-2">
                            <div class="card p-0 hover-change-images">
                                <a href="/images/single-property-8.jpg" class="card-img" data-gtf-mfp="true"
                                    data-gallery-id="02" style="background-image:url('/images/single-property-8.jpg')">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slider slider-nav mt-1 mx-n1 arrow-haft-inner"
                    data-slick-options='{"slidesToShow": 6, "autoplay":false,"dots":false,"arrows":true,"asNavFor": ".slider-for","focusOnSelect": true,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow": 4,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 4,"arrows":false}},{"breakpoint": 576,"settings": {"slidesToShow": 2,"arrows":false}}]}'>
                    <div class="box pb-6 px-0">
                        <div class="bg-white p-1 shadow-hover-xs-3 h-100 rounded-lg">
                            <img src="/images/single-property-sm-7.jpg" alt="Gallery 01" class="h-100 w-100 rounded-lg">
                        </div>
                    </div>
                    <div class="box pb-6 px-0">
                        <div class="bg-white p-1 shadow-hover-xs-3 h-100 rounded-lg">
                            <img src="/images/single-property-sm-2.jpg" alt="Gallery 02" class="h-100 w-100 rounded-lg">
                        </div>
                    </div>
                    <div class="box pb-6 px-0">
                        <div class="bg-white p-1 shadow-hover-xs-3 h-100 rounded-lg">
                            <img src="/images/single-property-sm-3.jpg" alt="Gallery 03" class="h-100 w-100 rounded-lg">
                        </div>
                    </div>
                    <div class="box pb-6 px-0">
                        <div class="bg-white p-1 shadow-hover-xs-3 h-100 rounded-lg">
                            <img src="/images/single-property-sm-4.jpg" alt="Gallery 04" class="h-100 w-100 rounded-lg">
                        </div>
                    </div>
                    <div class="box pb-6 px-0">
                        <div class="bg-white p-1 shadow-hover-xs-3 h-100 rounded-lg">
                            <img src="/images/single-property-sm-5.jpg" alt="Gallery 05" class="h-100 w-100 rounded-lg">
                        </div>
                    </div>
                    <div class="box pb-6 px-0">
                        <div class="bg-white p-1 shadow-hover-xs-3 h-100 rounded-lg">
                            <img src="/images/single-property-sm-6.jpg" alt="Gallery 06" class="h-100 w-100 rounded-lg">
                        </div>
                    </div>
                    <div class="box pb-6 px-0">
                        <div class="bg-white p-1 shadow-hover-xs-3 h-100 rounded-lg">
                            <img src="/images/single-property-sm-8.jpg" alt="Gallery 07" class="h-100 w-100 rounded-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="primary-content bg-gray-01 pt-7 pb-12">
        <div class="container">
            <div class="row">
                <article class="col-lg-8">
                    <section class="pb-8 px-6 pt-6 bg-white rounded-lg">
                        <ul class="list-inline d-sm-flex align-items-sm-center mb-2">
                            <li class="list-inline-item badge badge-orange mr-2">Featured</li>
                            <li class="list-inline-item badge badge-primary mr-3">For Sale</li>
                            <li class="list-inline-item mr-2 mt-2 mt-sm-0"><i class="fal fa-clock mr-1"></i>2 months ago
                            </li>
                            <li class="list-inline-item mt-2 mt-sm-0"><i class="fal fa-eye mr-1"></i>1039 views</li>
                        </ul>
                        <div class="d-sm-flex justify-content-sm-between">
                            <div>
                                <h2 class="fs-35 font-weight-600 lh-15 text-heading">Villa on Hollywood Boulevard</h2>
                                <p class="mb-0"><i class="fal fa-map-marker-alt mr-2"></i>398 Pete Pascale Pl,
                                    New York</p>
                            </div>
                            <div class="mt-2 text-lg-right">
                                <p class="fs-22 text-heading font-weight-bold mb-0">$1.250.000</p>
                                <p class="mb-0">$9350/SqFt</p>
                            </div>
                        </div>
                        <h4 class="fs-22 text-heading mt-6 mb-2">Description</h4>
                        <p class="mb-0 lh-214">Massa tempor nec feugiat nisl pretium. Egestas fringilla phasellus
                            faucibus scelerisque eleifend donec. Porta nibh venenatis cras sed felis eget velit aliquet.
                            Neque volutpat ac tincidunt vitae semper quis lectus. Turpis in
                            eu mi bibendum neque egestas congue quisque. Sed elementum tempus egestas sed sed risus pretium
                            quam. Dignissim sodales ut eu sem. Nibh mauris cursus mattis molestie a iaculis at erat
                            pellentesque. Id interdum velit laoreet
                            id donec ultrices tincidunt.</p>
                    </section>
                    <section class="mt-2 pb-3 px-6 pt-5 bg-white rounded-lg">
                        <h4 class="fs-22 text-heading mb-6">Facts and Features</h4>
                        <div class="row">
                            <div class="col-lg-3 col-sm-4 mb-6">
                                <div class="media">
                                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                        <svg class="icon icon-family fs-32 text-primary">
                                            <use xlink:href="#icon-family"></use>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">Type
                                        </h5>
                                        <p class="mb-0 fs-13 font-weight-bold text-heading">Single Family</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 mb-6">
                                <div class="media">
                                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                        <svg class="icon icon-year fs-32 text-primary">
                                            <use xlink:href="#icon-year"></use>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">year
                                            built</h5>
                                        <p class="mb-0 fs-13 font-weight-bold text-heading">2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 mb-6">
                                <div class="media">
                                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                        <svg class="icon icon-heating fs-32 text-primary">
                                            <use xlink:href="#icon-heating"></use>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">heating
                                        </h5>
                                        <p class="mb-0 fs-13 font-weight-bold text-heading">Radiant</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 mb-6">
                                <div class="media">
                                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                        <svg class="icon icon-price fs-32 text-primary">
                                            <use xlink:href="#icon-price"></use>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">SQFT
                                        </h5>
                                        <p class="mb-0 fs-13 font-weight-bold text-heading">979.0</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 mb-6">
                                <div class="media">
                                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                        <svg class="icon icon-bedroom fs-32 text-primary">
                                            <use xlink:href="#icon-bedroom"></use>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">
                                            Bedrooms</h5>
                                        <p class="mb-0 fs-13 font-weight-bold text-heading">3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 mb-6">
                                <div class="media">
                                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                        <svg class="icon icon-sofa fs-32 text-primary">
                                            <use xlink:href="#icon-sofa"></use>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">
                                            bathrooms</h5>
                                        <p class="mb-0 fs-13 font-weight-bold text-heading">2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 mb-6">
                                <div class="media">
                                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                        <svg class="icon icon-Garage fs-32 text-primary">
                                            <use xlink:href="#icon-Garage"></use>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">GARAGE
                                        </h5>
                                        <p class="mb-0 fs-13 font-weight-bold text-heading">1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 mb-6">
                                <div class="media">
                                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                        <svg class="icon icon-status fs-32 text-primary">
                                            <use xlink:href="#icon-status"></use>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">Status
                                        </h5>
                                        <p class="mb-0 fs-13 font-weight-bold text-heading">Active</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="mt-2 pb-6 px-6 pt-5 bg-white rounded-lg">
                        <h4 class="fs-22 text-heading mb-4">Additional Details</h4>
                        <div class="row">
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property ID</dt>
                                <dd>AD-2910</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Price</dt>
                                <dd>$890.000</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property type</dt>
                                <dd>Apartment, bar, cafe, villa</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property status</dt>
                                <dd>For Sale</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Rooms</dt>
                                <dd>4</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Bedrooms</dt>
                                <dd>3</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Size</dt>
                                <dd>900SqFt</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Bathrooms</dt>
                                <dd>2</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Garage</dt>
                                <dd>1</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Bathrooms</dt>
                                <dd>2000 SqFt</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Garage size</dt>
                                <dd>50 SqFt</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Year build</dt>
                                <dd>2020</dd>
                            </dl>
                            <dl class="offset-sm-6 col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Label</dt>
                                <dd>Bestseller</dd>
                            </dl>
                        </div>
                    </section>
                    <section class="mt-2 pb-7 px-6 pt-5 bg-white rounded-lg">
                        <h4 class="fs-22 text-heading mb-4">Offices Amenities</h4>
                        <ul class="list-unstyled mb-0 row no-gutters">
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Balcony</li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Fireplace</li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Balcony</li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Fireplace</li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Basement</li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Cooling</li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Basement</li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Cooling</li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dining room</li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dishwasher</li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dining room</li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dishwasher</li>
                        </ul>
                    </section>
                    <section class="mt-2 pb-7 px-6 pt-6 bg-white rounded-lg">
                        <h4 class="fs-22 text-heading mb-6">Floor Plans</h4>
                        <div class="accordion accordion-03 mb-3" id="accordion-01">
                            <div class="card border-0 shadow-xxs-5 bg-gray-01">
                                <div class="card-header bg-gray-01 border-gray border-0 p-0" id="floor-plans-01">
                                    <div class="heading bg-gray-01 d-flex justify-content-between align-items-center px-6"
                                        data-toggle="collapse" data-target="#collapse-01" aria-expanded="true"
                                        aria-controls="collapse-01" role="button">
                                        <h2 class="mb-0 fs-16 text-heading font-weight-500 py-4 lh-13">First Floor</h2>
                                        <ul class="list-inline mb-0 d-none d-sm-block pr-2">
                                            <li class=" list-inline-item text-muted mr-4">Beds : <span
                                                    class="font-weight-500 text-heading">2</span></li>
                                            <li class=" list-inline-item text-muted mr-4">Bath : <span
                                                    class="font-weight-500 text-heading">2</span></li>
                                            <li class=" list-inline-item text-muted mr-4">Sqft : <span
                                                    class="font-weight-500 text-heading">900</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="collapse-01" class="collapse show mx-6 mb-6 bg-white"
                                    aria-labelledby="floor-plans-01" data-parent="#accordion-01">
                                    <div class="card-body card-body col-sm-6 offset-sm-3 mb-3">
                                        <img src="/images/single-detail-property-01.jpg" class="card-img"
                                            alt="Floor Plans">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion accordion-03 mb-3" id="accordion-02">
                            <div class="card border-0 shadow-xxs-5 bg-gray-01">
                                <div class="card-header bg-gray-01 border-gray border-0 p-0" id="floor-plans-02">
                                    <div class="heading bg-gray-01 d-flex justify-content-between align-items-center px-6"
                                        data-toggle="collapse" data-target="#collapse-02" aria-expanded="true"
                                        aria-controls="collapse-02" role="button">
                                        <h2 class="mb-0 fs-16 text-heading font-weight-500 py-4 lh-13">Second Floor</h2>
                                        <ul class="list-inline mb-0 d-none d-sm-block pr-2">
                                            <li class=" list-inline-item text-muted mr-4">Beds : <span
                                                    class="font-weight-500 text-heading">2</span></li>
                                            <li class=" list-inline-item text-muted mr-4">Bath : <span
                                                    class="font-weight-500 text-heading">2</span></li>
                                            <li class=" list-inline-item text-muted mr-4">Sqft : <span
                                                    class="font-weight-500 text-heading">900</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="collapse-02" class="collapse  mx-6 mb-6 bg-white" aria-labelledby="floor-plans-02"
                                    data-parent="#accordion-02">
                                    <div class="card-body card-body col-sm-6 offset-sm-3 mb-3">
                                        <img src="/images/single-detail-property-01.jpg" class="card-img"
                                            alt="Floor Plans">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion accordion-03 mb-3" id="accordion-03">
                            <div class="card border-0 shadow-xxs-5 bg-gray-01">
                                <div class="card-header bg-gray-01 border-gray border-0 p-0" id="floor-plans-03">
                                    <div class="heading bg-gray-01 d-flex justify-content-between align-items-center px-6"
                                        data-toggle="collapse" data-target="#collapse-03" aria-expanded="true"
                                        aria-controls="collapse-03" role="button">
                                        <h2 class="mb-0 fs-16 text-heading font-weight-500 py-4 lh-13">Third Floor</h2>
                                        <ul class="list-inline mb-0 d-none d-sm-block pr-2">
                                            <li class=" list-inline-item text-muted mr-4">Beds : <span
                                                    class="font-weight-500 text-heading">2</span></li>
                                            <li class=" list-inline-item text-muted mr-4">Bath : <span
                                                    class="font-weight-500 text-heading">2</span></li>
                                            <li class=" list-inline-item text-muted mr-4">Sqft : <span
                                                    class="font-weight-500 text-heading">900</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="collapse-03" class="collapse  mx-6 mb-6 bg-white" aria-labelledby="floor-plans-03"
                                    data-parent="#accordion-03">
                                    <div class="card-body card-body col-sm-6 offset-sm-3 mb-3">
                                        <img src="/images/single-detail-property-01.jpg" class="card-img"
                                            alt="Floor Plans">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--<section class="mt-2 pb-7 px-6 pt-6 bg-white rounded-lg">
                                <h4 class="fs-22 text-heading lh-15 mb-5">Rating & Reviews</h4>
                                <div class="card border-0">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-sm-6 mb-6 mb-sm-0">
                                                <div class="bg-gray-01 rounded-lg pt-2 px-6 pb-6">
                                                    <h5 class="fs-16 lh-2 text-heading mb-6">
                                                        Avarage User Rating
                                                    </h5>
                                                    <p class="fs-40 text-heading font-weight-bold mb-6 lh-1">4.6 <span class="fs-18 text-gray-light font-weight-normal">/5</span></p>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item bg-gray-04 text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 pt-3">
                                                <h5 class="fs-16 lh-2 text-heading mb-5">
                                                    Rating Breakdown
                                                </h5>
                                                <div class="d-flex align-items-center mx-n1">
                                                    <ul class="list-inline d-flex px-1 mb-0">
                                                        <li class="list-inline-item text-warning mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-warning mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-warning mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-warning mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-warning mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="d-block w-100 px-1">
                                                        <div class="progress rating-progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-muted px-1">60%</div>
                                                </div>
                                                <div class="d-flex align-items-center mx-n1">
                                                    <ul class="list-inline d-flex px-1 mb-0">
                                                        <li class="list-inline-item text-warning mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-warning mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-warning mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-warning mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-border mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="d-block w-100 px-1">
                                                        <div class="progress rating-progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-muted px-1">40%</div>
                                                </div>
                                                <div class="d-flex align-items-center mx-n1">
                                                    <ul class="list-inline d-flex px-1 mb-0">
                                                        <li class="list-inline-item text-warning mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-warning mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-warning mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-border mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-border mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="d-block w-100 px-1">
                                                        <div class="progress rating-progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-muted px-1">0%</div>
                                                </div>
                                                <div class="d-flex align-items-center mx-n1">
                                                    <ul class="list-inline d-flex px-1 mb-0">
                                                        <li class="list-inline-item text-warning mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-warning mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-border mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-border mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-border mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="d-block w-100 px-1">
                                                        <div class="progress rating-progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-muted px-1">0%</div>
                                                </div>
                                                <div class="d-flex align-items-center mx-n1">
                                                    <ul class="list-inline d-flex px-1 mb-0">
                                                        <li class="list-inline-item text-warning mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-border mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-border mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-border mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item text-border mr-1">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <div class="d-block w-100 px-1">
                                                        <div class="progress rating-progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-muted px-1">0%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="mt-2 pb-2 px-6 pt-6 bg-white rounded-lg">
                                <div class="card border-0">
                                    <div class="card-body p-0">
                                        <h3 class="fs-16 lh-2 text-heading mb-0 d-inline-block pr-4 border-bottom border-primary">5 Reviews</h3>
                                        <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                            <img src="/images/review-07.jpg" alt="Danny Fox" class="mr-sm-8 mb-4 mb-sm-0">
                                            <div class="media-body">
                                                <div class="row mb-1 align-items-center">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <h4 class="mb-0 text-heading fs-14">Danny Fox</h4>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="mb-3 pr-xl-17">Very good and fast support during the week. Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
                                                <div class="d-flex justify-content-sm-start justify-content-center">
                                                    <p class="mb-0 text-muted fs-13 lh-1">02 Dec 2020 at 2:40pm</p>
                                                    <a href="#" class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media border-top py-6 d-sm-flex d-block text-sm-left text-center">
                                            <img src="/images/review-08.jpg" alt="Viola Austin" class="mr-sm-8 mb-4 mb-sm-0">
                                            <div class="media-body">
                                                <div class="row mb-1 align-items-center">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <h4 class="mb-0 text-heading fs-14">Viola Austin</h4>
                                                    </div>
                                                    <div class="col-sm-6 ">
                                                        <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="mb-3 pr-xl-17">Very good and fast support during the week. Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
                                                <div class="d-flex justify-content-sm-start justify-content-center">
                                                    <p class="mb-0 text-muted fs-13 lh-1">02 Dec 2020 at 2:40pm</p>
                                                    <a href="#" class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media border-top py-6 d-sm-flex d-block text-sm-left text-center">
                                            <img src="/images/review-09.jpg" alt="Nettie Singleton" class="mr-sm-8 mb-4 mb-sm-0">
                                            <div class="media-body">
                                                <div class="row mb-1 align-items-center">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <h4 class="mb-0 text-heading fs-14">Nettie Singleton</h4>
                                                    </div>
                                                    <div class="col-sm-6 ">
                                                        <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="mb-3 pr-xl-17">Very good and fast support during the week. Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
                                                <div class="d-flex justify-content-sm-start justify-content-center">
                                                    <p class="mb-0 text-muted fs-13 lh-1">02 Dec 2020 at 2:40pm</p>
                                                    <a href="#" class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media border-top py-6 d-sm-flex d-block text-sm-left text-center">
                                            <img src="/images/review-07.jpg" alt="Vernon Fisher" class="mr-sm-8 mb-4 mb-sm-0">
                                            <div class="media-body">
                                                <div class="row mb-1 align-items-center">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <h4 class="mb-0 text-heading fs-14">Vernon Fisher</h4>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-border fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="mb-3 pr-xl-17">Very good and fast support during the week. Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
                                                <div class="d-flex justify-content-sm-start justify-content-center">
                                                    <p class="mb-0 text-muted fs-13 lh-1">02 Dec 2020 at 2:40pm</p>
                                                    <a href="#" class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media border-top py-6 d-sm-flex d-block text-sm-left text-center">
                                            <div class="w-82px h-82 mr-2 bg-gray-01 rounded-circle fs-25 font-weight-500 text-muted d-flex align-items-center justify-content-center text-uppercase mr-sm-8 mb-4 mb-sm-0 mx-auto">
                                                HI
                                            </div>
                                            <div class="media-body">
                                                <div class="row mb-1 align-items-center">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <h4 class="mb-0 text-heading fs-14">Harry Iglesias</h4>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                            <li class="list-inline-item mr-1">
                                                                <span class="text-border fs-12 lh-2"><i class="fas fa-star"></i></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="mb-3 pr-xl-17">Very good and fast support during the week. Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
                                                <div class="d-flex justify-content-sm-start justify-content-center">
                                                    <p class="mb-0 text-muted fs-13 lh-1">02 Dec 2020 at 2:40pm</p>
                                                    <a href="#" class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>-->
                    <!--<section class="mt-2 pb-7 px-6 pt-6 bg-white rounded-lg">
                                <div class="card border-0">
                                    <div class="card-body p-0">
                                        <h3 class="fs-16 lh-2 text-heading mb-4">Write A Review</h3>
                                        <form>
                                            <div class="form-group mb-4 d-flex justify-content-start">
                                                <div class="rate-input">
                                                    <input type="radio" id="star5" name="rate" value="5">
                                                    <label for="star5" title="text" class="mb-0 mr-1 lh-1">
    <i class="fas fa-star"></i>
    </label>
                                                    <input type="radio" id="star4" name="rate" value="4">
                                                    <label for="star4" title="text" class="mb-0 mr-1 lh-1">
    <i class="fas fa-star"></i>
    </label>
                                                    <input type="radio" id="star3" name="rate" value="3">
                                                    <label for="star3" title="text" class="mb-0 mr-1 lh-1">
    <i class="fas fa-star"></i>
    </label>
                                                    <input type="radio" id="star2" name="rate" value="2">
                                                    <label for="star2" title="text" class="mb-0 mr-1 lh-1">
    <i class="fas fa-star"></i>
    </label>
                                                    <input type="radio" id="star1" name="rate" value="1">
                                                    <label for="star1" title="text" class="mb-0 mr-1 lh-1">
    <i class="fas fa-star"></i>
    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-4">
                                                        <input placeholder="Your Name" class="form-control form-control-lg border-0" type="text" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-4">
                                                        <input type="email" placeholder="Email" name="email" class="form-control form-control-lg border-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-6">
                                                <textarea class="form-control form-control-lg border-0" placeholder="Your Review" name="message" rows="5"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-lg btn-primary px-10">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </section>-->
                    <section class="mt-2 pb-5 px-6 pt-6 bg-white rounded-lg">
                        <h4 class="fs-22 text-heading mb-5">What is Nearby?</h4>
                        <div class="mt-4">
                            <h6 class="mb-0 mt-5"><a href="#"
                                    class="fs-16 lh-2 text-heading border-bottom border-primary pb-1">Restaurants</a></h6>
                            <div class="border-top pt-2">
                                <div class="py-3 border-bottom d-sm-flex justify-content-sm-between">
                                    <div class="media align-items-sm-center d-sm-flex d-block">
                                        <a href="#" class="hover-shine">
                                            <img src="/images/single-detail-property-02.jpg"
                                                class="mr-sm-4 rounded-lg w-sm-90"
                                                alt="Bacchanal Buffet-Temporarily Closed">
                                        </a>
                                        <div class="mt-sm-0 mt-2">
                                            <h4 class="my-0"><a href="#"
                                                    class="lh-186 fs-15 text-heading hover-primary">Bacchanal
                                                    Buffet-Temporarily Closed</a></h4>
                                            <p class="lh-186 fs-15 font-weight-500 mb-0">3570 S Las Vegas BlvdLas Vegas, NV
                                                89109</p>
                                        </div>
                                    </div>
                                    <div class="text-lg-right mt-lg-0 mt-2">
                                        <p class="mb-2 mb-0 lh-13">120 Reviews</p>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                    </div>
                                </div>
                                <div class="py-3 border-bottom d-sm-flex justify-content-sm-between">
                                    <div class="media align-items-sm-center d-sm-flex d-block">
                                        <a href="#" class="hover-shine">
                                            <img src="/images/single-detail-property-03.jpg"
                                                class="mr-sm-4 rounded-lg w-sm-90"
                                                alt="Bacchanal Buffet-Temporarily Closed">
                                        </a>
                                        <div class="mt-sm-0 mt-2">
                                            <h4 class="my-0"><a href="#"
                                                    class="lh-186 fs-15 text-heading hover-primary">Bacchanal
                                                    Buffet-Temporarily Closed</a></h4>
                                            <p class="lh-186 fs-15 font-weight-500 mb-0">3084 S Highland DrSte C</p>
                                        </div>
                                    </div>
                                    <div class="text-lg-right mt-lg-0 mt-2">
                                        <p class="mb-2 mb-0 lh-13">120 Reviews</p>
                                        <div class="text-lg-right mt-lg-0 mt-2">
                                            <i
                                                class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                                            <i
                                                class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                                            <i
                                                class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                                            <i
                                                class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                                            <i
                                                class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-3 border-bottom d-sm-flex justify-content-sm-between">
                                    <div class="media align-items-sm-center d-sm-flex d-block">
                                        <a href="#" class="hover-shine">
                                            <img src="/images/single-detail-property-04.jpg"
                                                class="mr-sm-4 rounded-lg w-sm-90"
                                                alt="Bacchanal Buffet-Temporarily Closed">
                                        </a>
                                        <div class="mt-sm-0 mt-2">
                                            <h4 class="my-0"><a href="#"
                                                    class="lh-186 fs-15 text-heading hover-primary">Bacchanal
                                                    Buffet-Temporarily Closed</a></h4>
                                            <p class="lh-186 fs-15 font-weight-500 mb-0">3570 S Las Vegas BlvdLas Vegas, NV
                                                89109</p>
                                        </div>
                                    </div>
                                    <div class="text-lg-right mt-lg-0 mt-2">
                                        <p class="mb-2 mb-0 lh-13">120 Reviews</p>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                    </div>
                                </div>
                            </div>
                            <h6 class="mb-0 mt-5"><a href="#"
                                    class="fs-16 lh-2 text-heading border-bottom border-primary pb-1">Education</a></h6>
                            <div class="border-top pt-2">
                                <div class="py-3 border-bottom d-sm-flex justify-content-sm-between">
                                    <div class="media align-items-sm-center d-sm-flex d-block">
                                        <a href="#" class="hover-shine">
                                            <img src="/images/single-detail-property-07.jpg"
                                                class="mr-sm-4 rounded-lg w-sm-90"
                                                alt="Bacchanal Buffet-Temporarily Closed">
                                        </a>
                                        <div class="mt-sm-0 mt-2">
                                            <h4 class="my-0"><a href="#"
                                                    class="lh-186 fs-15 text-heading hover-primary">Safe Direction Firearms
                                                    Training</a></h4>
                                            <p class="lh-186 fs-15 font-weight-500 mb-0">3570 S Las Vegas BlvdLas Vegas, NV
                                                89109</p>
                                        </div>
                                    </div>
                                    <div class="text-lg-right mt-lg-0 mt-2">
                                        <p class="mb-2 mb-0 lh-13">120 Reviews</p>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                    </div>
                                </div>
                                <div class="py-3 border-bottom d-sm-flex justify-content-sm-between">
                                    <div class="media align-items-sm-center d-sm-flex d-block">
                                        <a href="#" class="hover-shine">
                                            <img src="/images/single-detail-property-08.jpg"
                                                class="mr-sm-4 rounded-lg w-sm-90"
                                                alt="Bacchanal Buffet-Temporarily Closed">
                                        </a>
                                        <div class="mt-sm-0 mt-2">
                                            <h4 class="my-0"><a href="#"
                                                    class="lh-186 fs-15 text-heading hover-primary">Rabbi Shai
                                                    Specht-Sandler</a></h4>
                                            <p class="lh-186 fs-15 font-weight-500 mb-0">3084 S Highland DrSte C</p>
                                        </div>
                                    </div>
                                    <div class="text-lg-right mt-lg-0 mt-2">
                                        <p class="mb-2 mb-0 lh-13">120 Reviews</p>
                                        <div class="text-lg-right mt-lg-0 mt-2">
                                            <i
                                                class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                                            <i
                                                class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                                            <i
                                                class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                                            <i
                                                class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                                            <i
                                                class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-1"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-3 border-bottom d-sm-flex justify-content-sm-between">
                                    <div class="media align-items-sm-center d-sm-flex d-block">
                                        <a href="#" class="hover-shine">
                                            <img src="/images/single-detail-property-09.jpg"
                                                class="mr-sm-4 rounded-lg w-sm-90"
                                                alt="Bacchanal Buffet-Temporarily Closed">
                                        </a>
                                        <div class="mt-sm-0 mt-2">
                                            <h4 class="my-0"><a href="#"
                                                    class="lh-186 fs-15 text-heading hover-primary">Safe Direction Firearms
                                                    Training</a></h4>
                                            <p class="lh-186 fs-15 font-weight-500 mb-0">3570 S Las Vegas BlvdLas Vegas, NV
                                                89109</p>
                                        </div>
                                    </div>
                                    <div class="text-lg-right mt-lg-0 mt-2">
                                        <p class="mb-2 mb-0 lh-13">120 Reviews</p>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                    </div>
                                </div>
                            </div>
                            <h6 class="mb-0 mt-5"><a href="#"
                                    class="fs-16 lh-2 text-heading border-bottom border-primary pb-1">Health & Medical</a>
                            </h6>
                            <div class="border-top pt-2">
                                <div class="py-3 border-bottom d-sm-flex justify-content-sm-between">
                                    <div class="media align-items-sm-center d-sm-flex d-block">
                                        <a href="#" class="hover-shine">
                                            <img src="/images/single-detail-property-10.jpg"
                                                class="mr-sm-4 rounded-lg w-sm-90"
                                                alt="Bacchanal Buffet-Temporarily Closed">
                                        </a>
                                        <div class="mt-sm-0 mt-2">
                                            <h4 class="my-0"><a href="#"
                                                    class="lh-186 fs-15 text-heading hover-primary">Coppola David F DC &
                                                    Assoc</a></h4>
                                            <p class="lh-186 fs-15 font-weight-500 mb-0">3570 S Las Vegas BlvdLas Vegas, NV
                                                89109</p>
                                        </div>
                                    </div>
                                    <div class="text-lg-right mt-lg-0 mt-2">
                                        <p class="mb-2 mb-0 lh-13">120 Reviews</p>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                        <i
                                            class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm"></i>
                                    </div>
                                </div>
                                <div class="py-3 border-bottom d-sm-flex justify-content-sm-between">
                                    <div class="media align-items-sm-center d-sm-flex d-block">
                                        <a href="#" class="hover-shine">
                                            <img src="/images/single-detail-property-11.jpg"
                                                class="mr-sm-4 rounded-lg w-sm-90"
                                                alt="Bacchanal Buffet-Temporarily Closed">
                                        </a>
                                        <div class="mt-sm-0 mt-2">
                                            <h4 class="my-0"><a href="#"
                                                    class="lh-186 fs-15 text-heading hover-primary">Elite Medical
                                                    Center</a></h4>
                                            <p class="lh-186 fs-15 font-weight-500 mb-0">3084 S Highland DrSte C</p>
                                        </div>
                                    </div>
                                    <div class="text-lg-right mt-lg-0 mt-2">
                                        <p class="mb-2 mb-0 lh-13">120 Reviews</p>
                                        <div class="text-lg-right mt-lg-0 mt-2">
                                            <i
                                                class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                                            <i
                                                class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                                            <i
                                                class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                                            <i
                                                class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-7"></i>
                                            <i
                                                class="fas fa-star w-18px h-18 d-inline-flex justify-content-center align-items-center rate-bg-blue text-white fs-12 rounded-sm opacity-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="mt-2 pb-7 px-6 pt-6 bg-white rounded-lg">
                        <h4 class="fs-22 text-heading mb-6">Property Attachments</h4>
                        <div class="d-sm-flex">
                            <div class="w-sm-170 mb-sm-0 mb-6 mr-sm-6">
                                <div class="card text-center pt-4">
                                    <img src="/images/single-detail-property-05.png"
                                        class="card-img card-img w-78px mx-auto"
                                        alt="Villa Called Archangel Word Document">
                                    <div class="card-body p-0 mt-4">
                                        <p class="fs-13 lh-2  mb-0 py-0 px-2">Villa Called Archangel Word Document</p>
                                        <a href="#" class="btn btn-block bg-gray-01 border-0 fs-14 text-heading">Download<i
                                                class="far fa-arrow-alt-circle-down ml-1 text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-sm-170 mb-sm-0 mb-6 mr-sm-6">
                                <div class="card text-center pt-4">
                                    <img src="/images/single-detail-property-06.png"
                                        class="card-img card-img w-78px mx-auto" alt="Villa Called Archangel PDF Document">
                                    <div class="card-body p-0 mt-4">
                                        <p class="fs-13 lh-2  mb-0 py-0 px-2">Villa Called Archangel PDF Document</p>
                                        <a href="#" class="btn btn-block bg-gray-01 border-0 fs-14 text-heading">Download<i
                                                class="far fa-arrow-alt-circle-down ml-1 text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--<section class="mt-2 pb-6 px-6 pt-6 bg-white rounded-lg">
                                <h4 class="fs-22 text-heading mb-6">Location</h4>
                                <div class="position-relative">
                                    <div id="map" class="mapbox-gl map-point-animate" data-mapbox-access-token="pk.eyJ1IjoiZHVvbmdsaCIsImEiOiJjanJnNHQ4czExMzhyNDVwdWo5bW13ZmtnIn0.f1bmXQsS6o4bzFFJc8RCcQ" data-mapbox-options='{"center":[-73.9927227, 40.6741035],"setLngLat":[-73.9927227, 40.6741035]}'
                                        data-mapbox-marker='[{"position":[-73.9927227, 40.6741035],"className":"marker","backgroundImage":"/images/googlle-market-01.png","backgroundRepeat":"no-repeat","width":"30px","height":"40px"}]'>
                                    </div>
                                    <p class="mb-0 p-3 bg-white shadow rounded-lg position-absolute pos-fixed-bottom mb-4 ml-4 lh-17 z-index-2">62 Gresham St, Victoria Park <br /> WA 6100, Australia</p>
                                </div>
                            </section>-->
                    <section class="mt-2 pb-7 px-6 pt-6 bg-white rounded-lg">
                        <h4 class="fs-22 text-heading mb-5">Mortgage calculator</h4>
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label>Total Amount</label>
                                    <div class="position-relative">
                                        <input type="number" class="form-control border-0 pr-3 h-52 pl-7" value="345"
                                            name="total-amount">
                                        <span
                                            class="position-absolute pl-3 pos-fixed-left-center fs-13 font-weight-600">$</span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label>Down Payment</label>
                                    <div class="position-relative">
                                        <input type="number" class="form-control border-0 pr-3 h-52 pl-7" value="0"
                                            name="down-payment">
                                        <span
                                            class="position-absolute pl-3 pos-fixed-left-center fs-13 font-weight-600">$</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label>Interest Rate</label>
                                    <div class="position-relative">
                                        <input type="number" class="form-control border-0 pr-3 h-52 pl-7" value="2.500"
                                            step="0.25" name="interest-rate">
                                        <span
                                            class="position-absolute pl-3 pos-fixed-left-center fs-13 font-weight-600">%</span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label>Number of years</label>
                                    <input type="number" class="form-control border-0 px-3 h-52" value="25" name="years">
                                </div>
                            </div>
                            <div class="form-group mb-6">
                                <label>Payment Period</label>
                                <select class="form-control selectpicker" data-style="btn-lg h-52 px-3"
                                    name="payment-period">
                                    <option selected>Monthly</option>
                                    <option>Yearly</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <button class="btn btn-primary fs-14 h-52 px-8" type="submit">Caculate</button>
                                </div>
                                <div class="col-lg-6">
                                    <div
                                        class="shadow-xxs-2 pt-1 pb-2 px-6 border-bottom border-primary border-5x rounded-lg">
                                        <dl class="d-flex mb-0 justify-content-between py-2">
                                            <dt class="font-weight-normal">Monthly Payment</dt>
                                            <dd class="font-weight-500 text-heading mb-0">$33</dd>
                                        </dl>
                                        <dl class="d-flex mb-0 justify-content-between border-top py-2">
                                            <dt class="font-weight-normal">Total Cost of Loan</dt>
                                            <dd class="font-weight-500 text-heading mb-0">$464</dd>
                                        </dl>
                                        <dl class="d-flex mb-0 justify-content-between border-top py-2">
                                            <dt class="font-weight-normal">Total interest Paid</dt>
                                            <dd class="font-weight-500 text-heading mb-0">$119</dd>
                                        </dl>
                                        <dl class="d-flex mb-0 justify-content-between border-top py-2">
                                            <dt class="font-weight-normal">Mortgage Payment</dt>
                                            <dd class="font-weight-500 text-heading mb-0">$1.55</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                    <section class="mt-2 pb-7 px-6 pt-6 bg-white rounded-lg">
                        <h4 class="fs-22 text-heading mb-6">Similar Homes You May Like</h4>
                        <div class="slick-slider"
                            data-slick-options='{"slidesToShow": 2, "dots":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":2,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":2}},{"breakpoint": 768,"settings": {"slidesToShow": 1}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>
                            <div class="box">
                                <div class="card shadow-hover-2">
                                    <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                        <img src="/images/properties-grid-38.jpg" alt="Home in Metric Way">
                                        <div class="card-img-overlay p-2 d-flex flex-column">
                                            <div>
                                                <span class="badge mr-2 badge-primary">for Sale</span>
                                            </div>
                                            <ul class="list-inline mb-0 mt-auto hover-image">
                                                <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 /images">
                                                    <a href="#" class="text-white hover-primary">
                                                        <i class="far fa-/images"></i><span
                                                            class="pl-1">9</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                                                    <a href="#" class="text-white hover-primary">
                                                        <i class="far fa-play-circle"></i><span
                                                            class="pl-1">2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body pt-3">
                                        <h2 class="card-title fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                                class="text-dark hover-primary">Home in Metric Way</a></h2>
                                        <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los
                                            Angeles</p>
                                        <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                                            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bedroom">
                                                <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                                    <use xlink:href="#icon-bedroom"></use>
                                                </svg>3 Br
                                            </li>
                                            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bathrooms">
                                                <svg class="icon icon-shower fs-18 text-primary mr-1">
                                                    <use xlink:href="#icon-shower"></use>
                                                </svg>3 Ba
                                            </li>
                                            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5-2"
                                                data-toggle="tooltip" title="Size">
                                                <svg class="icon icon-square fs-18 text-primary mr-1">
                                                    <use xlink:href="#icon-square"></use>
                                                </svg>2300 Sq.Ft
                                            </li>
                                            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="1 Garage">
                                                <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                                    <use xlink:href="#icon-Garage"></use>
                                                </svg>1 Gr
                                            </li>
                                        </ul>
                                    </div>
                                    <div
                                        class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                        <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="#"
                                                    class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent"
                                                    data-toggle="tooltip" title="Wishlist"><i
                                                        class="fas fa-heart"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#"
                                                    class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                    data-toggle="tooltip" title="Compare"><i
                                                        class="fas fa-exchange-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="card shadow-hover-2">
                                    <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                        <img src="/images/properties-grid-01.jpg" alt="Garden Gingerbread House">
                                        <div class="card-img-overlay p-2 d-flex flex-column">
                                            <div>
                                                <span class="badge mr-2 badge-orange">featured</span>
                                                <span class="badge mr-2 badge-indigo">for Sale</span>
                                            </div>
                                            <ul class="list-inline mb-0 mt-auto hover-image">
                                                <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 /images">
                                                    <a href="#" class="text-white hover-primary">
                                                        <i class="far fa-/images"></i><span
                                                            class="pl-1">9</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                                                    <a href="#" class="text-white hover-primary">
                                                        <i class="far fa-play-circle"></i><span
                                                            class="pl-1">2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body pt-3">
                                        <h2 class="card-title fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                                class="text-dark hover-primary">Garden Gingerbread House</a></h2>
                                        <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los
                                            Angeles</p>
                                        <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                                            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bedroom">
                                                <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                                    <use xlink:href="#icon-bedroom"></use>
                                                </svg>3 Br
                                            </li>
                                            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bathrooms">
                                                <svg class="icon icon-shower fs-18 text-primary mr-1">
                                                    <use xlink:href="#icon-shower"></use>
                                                </svg>3 Ba
                                            </li>
                                            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5-2"
                                                data-toggle="tooltip" title="Size">
                                                <svg class="icon icon-square fs-18 text-primary mr-1">
                                                    <use xlink:href="#icon-square"></use>
                                                </svg>2300 Sq.Ft
                                            </li>
                                            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="1 Garage">
                                                <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                                    <use xlink:href="#icon-Garage"></use>
                                                </svg>1 Gr
                                            </li>
                                        </ul>
                                    </div>
                                    <div
                                        class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                        <p class="fs-17 font-weight-bold text-heading mb-0">$550<span
                                                class="text-gray-light font-weight-500 fs-14"> / month</span></p>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="#"
                                                    class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                    data-toggle="tooltip" title="Wishlist"><i
                                                        class="far fa-heart"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#"
                                                    class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                    data-toggle="tooltip" title="Compare"><i
                                                        class="fas fa-exchange-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="card shadow-hover-2">
                                    <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                                        <img src="/images/properties-grid-02.jpg" alt="Affordable Urban House">
                                        <div class="card-img-overlay p-2 d-flex flex-column">
                                            <div>
                                                <span class="badge mr-2 badge-primary">for Sale</span>
                                            </div>
                                            <ul class="list-inline mb-0 mt-auto hover-image">
                                                <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 /images">
                                                    <a href="#" class="text-white hover-primary">
                                                        <i class="far fa-/images"></i><span
                                                            class="pl-1">9</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                                                    <a href="#" class="text-white hover-primary">
                                                        <i class="far fa-play-circle"></i><span
                                                            class="pl-1">2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body pt-3">
                                        <h2 class="card-title fs-16 lh-2 mb-0"><a href="single-property-1.html"
                                                class="text-dark hover-primary">Affordable Urban House</a></h2>
                                        <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los
                                            Angeles</p>
                                        <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                                            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bedroom">
                                                <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                                    <use xlink:href="#icon-bedroom"></use>
                                                </svg>3 Br
                                            </li>
                                            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="3 Bathrooms">
                                                <svg class="icon icon-shower fs-18 text-primary mr-1">
                                                    <use xlink:href="#icon-shower"></use>
                                                </svg>3 Ba
                                            </li>
                                            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5-2"
                                                data-toggle="tooltip" title="Size">
                                                <svg class="icon icon-square fs-18 text-primary mr-1">
                                                    <use xlink:href="#icon-square"></use>
                                                </svg>2300 Sq.Ft
                                            </li>
                                            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip" title="1 Garage">
                                                <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                                    <use xlink:href="#icon-Garage"></use>
                                                </svg>1 Gr
                                            </li>
                                        </ul>
                                    </div>
                                    <div
                                        class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                        <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="#"
                                                    class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                    data-toggle="tooltip" title="Wishlist"><i
                                                        class="far fa-heart"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#"
                                                    class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                    data-toggle="tooltip" title="Compare"><i
                                                        class="fas fa-exchange-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
                <aside class="col-lg-4 pl-xl-4 primary-sidebar sidebar-sticky" id="sidebar">
                    <div class="primary-sidebar-inner">
                        <div class="card border-0 widget-request-tour bg-transparent">
                            <ul class="nav nav-tabs d-flex" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active px-3" data-toggle="tab" href="#schedule" role="tab"
                                        aria-selected="true">Schedule
                                        A Tour</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link px-3" data-toggle="tab" href="#request-info" role="tab"
                                        aria-selected="false">Request
                                        Info</a>
                                </li>
                            </ul>
                            <div class="card-body px-sm-6 shadow-xxs-2 pb-5 pt-0 bg-white">
                                <form>
                                    <div class="tab-content pt-1 pb-0 px-0 shadow-none">
                                        <div class="tab-pane fade show active" id="schedule" role="tabpanel">
                                            <div class="slick-slider calendar arrow-hide-disable mx-n1"
                                                data-slick-options='{"slidesToShow": 5, "autoplay":false,"dots":false}'>
                                                <div class="box px-1 py-4">
                                                    <div class="card pointer active border-0 shadow-xxs-1"
                                                        data-date="March 17, 2020">
                                                        <div class="card-body p-1 text-center">
                                                            <p class="day fs-12 text-muted lh-2 mb-0">Tue</p>
                                                            <p
                                                                class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                17</p>
                                                            <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box px-1 py-4">
                                                    <div class="card pointer border-0 shadow-xxs-1"
                                                        data-date="March 18, 2020">
                                                        <div class="card-body p-1 text-center">
                                                            <p class="day fs-12 text-muted lh-2 mb-0">Wed</p>
                                                            <p
                                                                class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                18</p>
                                                            <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box px-1 py-4">
                                                    <div class="card pointer border-0 shadow-xxs-1"
                                                        data-date="March 19, 2020">
                                                        <div class="card-body p-1 text-center">
                                                            <p class="day fs-12 text-muted lh-2 mb-0">Thur</p>
                                                            <p
                                                                class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                19</p>
                                                            <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box px-1 py-4">
                                                    <div class="card pointer border-0 shadow-xxs-1"
                                                        data-date="March 20, 2020">
                                                        <div class="card-body p-1 text-center">
                                                            <p class="day fs-12 text-muted lh-2 mb-0">Fri</p>
                                                            <p
                                                                class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                20</p>
                                                            <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box px-1 py-4">
                                                    <div class="card pointer border-0 shadow-xxs-1"
                                                        data-date="March 21, 2020">
                                                        <div class="card-body p-1 text-center">
                                                            <p class="day fs-12 text-muted lh-2 mb-0">Sat</p>
                                                            <p
                                                                class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                21</p>
                                                            <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box px-1 py-4">
                                                    <div class="card pointer border-0 shadow-xxs-1"
                                                        data-date="March 22, 2020">
                                                        <div class="card-body p-1 text-center">
                                                            <p class="day fs-12 text-muted lh-2 mb-0">Sun</p>
                                                            <p
                                                                class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                22</p>
                                                            <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box px-1 py-4">
                                                    <div class="card pointer border-0 shadow-xxs-1"
                                                        data-date="March 23, 2020">
                                                        <div class="card-body p-1 text-center">
                                                            <p class="day fs-12 text-muted lh-2 mb-0">Mon</p>
                                                            <p
                                                                class="date fs-18 text-heading lh-173 mb-0 font-weight-bold">
                                                                23</p>
                                                            <p class="month fs-13 letter-spacing-087 mb-0">Mar</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" class="date" name="date" value="March 17, 2020">
                                            <div class="form-group mb-2">
                                                <div class="input-group input-group-lg bootstrap-timepicker timepicker">
                                                    <input type="text" class="form-control border-0 text-body shadow-none"
                                                        placeholder="Choose a time">
                                                    <div class="input-group-append input-group-addon">
                                                        <button class="btn bg-input shadow-none fs-18 lh-1"
                                                            type="button"><i class="fal fa-angle-down"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="text" class="form-control form-control-lg border-0"
                                                    placeholder="First Name, Last Name">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="email" class="form-control form-control-lg border-0"
                                                    placeholder="Your Email">
                                            </div>
                                            <div class="form-group mb-4">
                                                <input type="tel" class="form-control form-control-lg border-0"
                                                    placeholder="Your phone">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Schedule
                                                A Tour</button>
                                            <div class="form-group form-check mt-2 mb-0">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label fs-13" for="exampleCheck1">Egestas fringilla
                                                    phasellus
                                                    faucibus
                                                    scelerisque
                                                    eleifend donec.</label>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade pt-5" id="request-info" role="tabpanel">
                                            <div class="form-check d-flex align-items-center border-bottom pb-3 mb-3">
                                                <input class="form-check-input" type="radio" name="agent" value="option1">
                                                <div class="form-check-label ml-2">
                                                    <div class="d-flex align-items-center">
                                                        <a href="agent-details-1.html" class="d-block w-60px h-60 mr-3">
                                                            <img src="/images/agent-2.jpg" class="rounded-circle"
                                                                alt="Oliver Beddows">
                                                        </a>
                                                        <div>
                                                            <a href="agent-details-1.html"
                                                                class="d-block text-dark font-weight-500 lh-15 hover-primary">Oliver
                                                                Beddows</a>
                                                            <p class="mb-0 fs-13 mb-0 lh-17">Sales Excutive</p>
                                                            <p class="mb-0 fs-13 mb-0 lh-17"><span>(+123)</span><span
                                                                    class="text-heading d-inline-block ml-2">1900
                                                                    68668</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check d-flex align-items-center mb-6">
                                                <input class="form-check-input" type="radio" name="agent" id="inlineRadio2"
                                                    value="option2">
                                                <div class="form-check-label ml-2">
                                                    <div class="d-flex align-items-center">
                                                        <a href="agent-details-1.html" class="d-block w-60px h-60 mr-3">
                                                            <img src="/images/agent-1.jpg" class="rounded-circle"
                                                                alt="Max Kordex">
                                                        </a>
                                                        <div>
                                                            <a href="agent-details-1.html"
                                                                class="d-block text-dark font-weight-500 lh-15 hover-primary">Max
                                                                Kordex</a>
                                                            <p class="mb-0 fs-13 mb-0 lh-17">Real estate broker</p>
                                                            <p class="mb-0 fs-13 mb-0 lh-17"><span>(+123)</span><span
                                                                    class="text-heading d-inline-block ml-2">1900
                                                                    68668</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="text" class="form-control form-control-lg border-0"
                                                    placeholder="First Name, Last Name">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="email" class="form-control form-control-lg border-0"
                                                    placeholder="Your Email">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="tel" class="form-control form-control-lg border-0"
                                                    placeholder="Your phone">
                                            </div>
                                            <div class="form-group mb-4">
                                                <textarea class="form-control border-0"
                                                    rows="4">Hello, I'm interested in Villa Called Archangel</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Request
                                                Info</button>
                                            <div class="form-group form-check mt-2 mb-0">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                <label class="form-check-label fs-13" for="exampleCheck2">Egestas fringilla
                                                    phasellus
                                                    faucibus
                                                    scelerisque
                                                    eleifend donec.</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <section>
        <div
            class="d-flex bottom-bar-action bottom-bar-action-01 py-2 px-4 bg-gray-01 align-items-center position-fixed fixed-bottom d-sm-none">
            <div class="media align-items-center">
                <img src="/images/irene-wallace.png" alt="Irene Wallace" class="mr-4 rounded-circle">
                <div class="media-body">
                    <a href="#" class="d-block text-dark fs-15 font-weight-500 lh-15">Irene Wallace</a>
                    <span class="fs-13 lh-2">Sales Excutive</span>
                </div>
            </div>
            <div class="ml-auto">
                <button type="button" class="btn btn-primary fs-18 p-2 lh-1 mr-1 mb-1 shadow-none" data-toggle="modal"
                    data-target="#modal-messenger"><i class="fal fa-comment"></i></button>
                <a href="tel:(+84)2388-969-888" class="btn btn-primary fs-18 p-2 lh-1 mb-1 shadow-none" target="_blank"><i
                        class="fal fa-phone"></i></a>
            </div>
        </div>
        <div class="modal fade" id="modal-messenger" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
                            <input type="text" class="form-control form-control-lg border-0"
                                placeholder="First Name, Last Name">
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
    </section>
