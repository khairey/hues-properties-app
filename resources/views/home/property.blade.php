@extends('layouts.master')

@section('title', $project->{'title_' . App()->getLocale()})


@section('content')
    <section class="pt-5 py-6"></section>
    {{-- <section class="bg-secondary pt-5 py-6">
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
    </section> --}}
    <section class="bg-white shadow-5 pb-1">
        <div class="container">
            {{-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb py-3">
                        <li class="breadcrumb-item fs-12 letter-spacing-087">
                            <a href=".html">Home</a>
                        </li>
                        <li class="breadcrumb-item fs-12 letter-spacing-087">
                            <a href="listing-grid-with-left-filter.html">Listing</a>
                        </li>
                        <li class="breadcrumb-item fs-12 letter-spacing-087 active">Villa on Hollywood Boulevard</li>
                    </ol>
                </nav> --}}
            <div class="galleries position-relative" data-animate="zoomIn">
                <div class="position-absolute pos-fixed-top-right z-index-3">
                    <ul class="list-inline pt-4 pr-5">
                        <li class="list-inline-item mr-2">
                            <a href="#" data-toggle="tooltip" title=""
                                class="d-flex align-items-center justify-content-center w-40px h-40 bg-white text-heading bg-hover-primary hover-white rounded-circle"
                                data-original-title="Favourite">
                                <i class="far fa-heart"></i></a>
                        </li>
                        {{-- <li class="list-inline-item mr-2">
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
                            </li> --}}
                    </ul>
                </div>
                <div class="slick-slider slider-for"
                    data-slick-options='{"slidesToShow": 1, "autoplay":false,"dots":false,"arrows":false,"asNavFor": ".slider-nav"}'>
                    @foreach ($photoes as $photo)
                        <div class="box">
                            <div class="item item-size-3-2">
                                <div class="card p-0 hover-change-images">
                                    <a href="/uploads/{{ $photo->image }}" class="card-img" data-gtf-mfp="true"
                                        data-gallery-id="{{ $photo->id }}"
                                        style="background-image:url('/uploads/{{ $photo->image }}')">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="slick-slider slider-nav mt-1 mx-n1 arrow-haft-inner"
                    data-slick-options='{"slidesToShow": 6, "autoplay":false,"dots":false,"arrows":true,"asNavFor": ".slider-for","focusOnSelect": true,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow": 4,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 4,"arrows":false}},{"breakpoint": 576,"settings": {"slidesToShow": 2,"arrows":false}}]}'>
                    @foreach ($photoes as $photo)
                        <div class="box pb-6 px-0">
                            <div class="bg-white p-1 shadow-hover-xs-3 h-100 rounded-lg">
                                <img src="/uploads/{{ $photo->image }}" alt="{{ $photo->image }}"
                                    class="h-100 w-100 rounded-lg">
                            </div>
                        </div>
                    @endforeach
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

                            @if ($project->unit)
                                <span class="badge mr-2 badge-orange">{{ __('Unit') }}</span>
                            @endif
                            @if ($project->main_type == 1)
                                <span class="badge mr-2 badge-primary">{{ __('for Sale') }}</span>
                            @endif
                            @if ($project->main_type == 2)
                                <span class="badge mr-2 badge-primary">{{ __('for Rent') }}</span>
                            @endif

                            @if ($projectdate)
                                <li class="list-inline-item mr-2 mt-2 mt-sm-0"><i class="fal fa-clock mr-1"></i>
                                    {{ $projectdate }}
                                </li>
                            @endif
                            <li class="list-inline-item mt-2 mt-sm-0"><i class="fal fa-eye mr-1"></i>{{ $project->view_count }} {{ __('Views') }}</li>
                        </ul>
                        <div class="d-sm-flex justify-content-sm-between">
                            <div>
                                @if ($project->{'title_' . App()->getLocale()})
                                    <h2 class="fs-35 font-weight-600 lh-15 text-heading">
                                        {{ $project->{'title_' . App()->getLocale()} }}</h2>
                                @endif
                                @if ($project->{'address_' . App()->getLocale()})
                                    <p class="mb-0"><i class="fal fa-map-marker-alt mr-2"></i>
                                        {{ $project->{'address_' . App()->getLocale()} }}
                                    </p>
                                @endif
                            </div>
                            <div class="mt-2 text-lg-right">
                                @if ($project->price)
                                    <p class="fs-22 text-heading font-weight-bold mb-0">{{ $project->price }} {{ __('LE') }}</p>
                                @endif
                                @if ($project->unit_area)
                                    <p class="mb-0">{{ $project->unit_area }}/{{ __('SqFt') }}</p>
                                @endif
                            </div>
                        </div>

                        @if ($project->{'details_' . App()->getLocale()})
                            <h4 class="fs-22 text-heading mt-6 mb-2">{{ __('Description') }}</h4>
                            {!! $project->{'details_' . App()->getLocale()} !!}
                        @endif

                        @if ($project->{'additional_info_' . App()->getLocale()})
                            <h4 class="fs-22 text-heading mt-6 mb-2">{{ __('Additional Description') }}</h4>
                            {!! $project->{'additional_info_' . App()->getLocale()} !!}
                        @endif



                    </section>
                    <section class="mt-2 pb-3 px-6 pt-5 bg-white rounded-lg">
                        <h4 class="fs-22 text-heading mb-6"> {{ __('Facts and Features') }}</h4>
                        <div class="row">
                        @foreach ($project->facilities as $facility) 
                            <div class="col-lg-3 col-sm-4 mb-6">
                                <div class="media">
                                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                                        <img src="/uploads/{{ $facility->facility->image }}" width="50">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="my-1 fs-14 text-uppercase font-weight-normal">
                                            {{ $facility->facility->{'title_' . App()->getLocale()} }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </section>
                    <section class="mt-2 pb-6 px-6 pt-5 bg-white rounded-lg">
                        <h4 class="fs-22 text-heading mb-4">{{ __('Details') }}</h4>
                        <div class="row">
                            @if ($project->district->{'title_' . App()->getLocale()})
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __('District') }}</dt>
                                    <dd>{{ $project->district->{'title_' . App()->getLocale()} }}</dd>
                                </dl>
                            @endif
                            @if ($project->category->{'title_' . App()->getLocale()})
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __('Category') }}</dt>
                                    <dd>{{ $project->category->{'title_' . App()->getLocale()} }}</dd>
                                </dl>
                            @endif
                            @if ($project->kitchen)
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __('Kitchen') }}</dt>
                                    <dd>{{ $project->kitchen }}</dd>
                                </dl>
                            @endif
                            @if ($project->bathroom)
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __('Bathroom') }}</dt>
                                    <dd>{{ $project->bathroom }}</dd>
                                </dl>
                            @endif
                            @if ($project->bedroom)
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __('Bedroom') }}</dt>
                                    <dd>{{ $project->bedroom }}</dd>
                                </dl>
                            @endif
                            @if ($project->masterroom)
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __('Master Room') }}</dt>
                                    <dd>{{ $project->masterroom }}</dd>
                                </dl>
                            @endif
                            @if ($project->property_type_id)
                                <dl class="col-sm-6 mb-0 d-flex">
                                    <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">{{ __('Property Type') }}</dt>
                                    <dd>{{ $project->propertytype->{'title_' . App()->getLocale()} }}</dd>
                                </dl>
                            @endif

                        </div>
                    </section>
                    {{-- <section class="mt-2 pb-7 px-6 pt-5 bg-white rounded-lg">
                        <h4 class="fs-22 text-heading mb-4">Offices Amenities</h4>
                        <ul class="list-unstyled mb-0 row no-gutters">
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Balcony</li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Fireplace
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Balcony</li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Fireplace
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Basement
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Cooling</li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Basement
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Cooling</li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dining room
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dishwasher
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dining room
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dishwasher
                            </li>
                        </ul>
                    </section> --}}
                    @if (!$project->unit)
                        <section class="mt-2 pb-7 px-6 pt-6 bg-white rounded-lg">
                            <h4 class="fs-22 text-heading mb-6">{{ __('Unit Type') }}</h4>
                            @foreach ($types as $type)
                                <div class="accordion accordion-03 mb-3" id="accordion-0{{ $type->property_type_id }}">
                                    <div class="card border-0 shadow-xxs-5 bg-gray-01">
                                        <div class="card-header bg-gray-01 border-gray border-0 p-0"
                                            id="floor-plans-0{{ $type->property_type_id }}">
                                            <div class="heading bg-gray-01 d-flex justify-content-between align-items-center px-6"
                                                data-toggle="collapse"
                                                data-target="#collapse-0{{ $type->property_type_id }}"
                                                aria-expanded="true" aria-controls="collapse-01" role="button">
                                                <h2 class="mb-0 fs-16 text-heading font-weight-500 py-4 lh-13">
                                                    {{ $type->propertytype->{'title_' . App()->getLocale()} }}</h2>
                                                {{-- <ul class="list-inline mb-0 d-none d-sm-block pr-2">
                                                <li class=" list-inline-item text-muted mr-4">Beds : <span
                                                        class="font-weight-500 text-heading">2</span></li>
                                                <li class=" list-inline-item text-muted mr-4">Bath : <span
                                                        class="font-weight-500 text-heading">2</span></li>
                                                <li class=" list-inline-item text-muted mr-4">Sqft : <span
                                                        class="font-weight-500 text-heading">900</span></li>
                                            </ul> --}}
                                            </div>
                                        </div>
                                        <div id="collapse-0{{ $type->property_type_id }}"
                                            class="collapse  mx-6 mb-6 bg-white"
                                            aria-labelledby="floor-plans-0{{ $type->property_type_id }}"
                                            data-parent="#accordion-0{{ $type->property_type_id }}">
                                            @foreach ($arraytypes[$type->propertytype->{'title_' . App()->getLocale()}] as $mine)
                                                <div class="card-body card-body col-sm-12 offset-sm-12 shadow-xxs-5 bg-gray-01">
                                                    <h4> {{ $mine->{'title_' . App()->getLocale()} }}</h4>
                                                    {!! $mine->{'details_' . App()->getLocale()} !!}
                                                </div>
                                            @endforeach
                                            {{-- {!!  $arraytypes[$type->propertytype->{'title_' . App()->getLocale()}]->{'details_' . App()->getLocale()} !!} --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </section>
                    @endif
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
                    <section class="mt-2 pb-7 px-6 pt-6 bg-white rounded-lg">
                        <h4 class="fs-22 text-heading mb-6"> {{ __('Property Attachments and Developer') }}</h4>
                        <div class="d-sm-flex">
                            @if ($project->brochure)
                                <div class="w-sm-170 mb-sm-0 mb-6 mr-sm-6">
                                    <div class="card text-center pt-4">
                                        <img src="/images/single-detail-property-06.png"
                                            class="card-img card-img w-78px mx-auto" alt="{{ __('PDF Document') }}">
                                        <div class="card-body p-0 mt-4">
                                            <p class="fs-13 lh-2  mb-0 py-0 px-2">  {{ __('PDF Document') }}</p>
                                            <a download href="/uploads/{{ $project->brochure }}"
                                                class="btn btn-block bg-gray-01 border-0 fs-14 text-heading">{{ __('Download') }}<i
                                                    class="far fa-arrow-alt-circle-down ml-1 text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($project->developer_id)
                                <div class="w-sm-170 mb-sm-0 mb-6 mr-sm-6">
                                    <div class="card text-center pt-4">
                                        <img src="/uploads/{{ $project->developer->image }}"
                                            class="card-img card-img w-78px mx-auto"
                                            alt=" {{ $project->developer->{'title_' . App()->getLocale()} }}">
                                        <div class="card-body p-0 mt-4">
                                            <p class="fs-13 lh-2  mb-0 py-0 px-2">
                                                {{ $project->developer->{'title_' . App()->getLocale()} }}</p>
                                            <a href="/developer/{{ $project->developer->slug }}"
                                                class="btn btn-block bg-gray-01 border-0 fs-14 text-heading">{{ __('More') }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (!$project->developer_id)
                                <div class="w-sm-170 mb-sm-0 mb-6 mr-sm-6">
                                    <div class="card text-center pt-4">
                                        <img src="/images/logo-white-primary.png" class="card-img card-img w-78px mx-auto"
                                            alt=" Hues Properties">
                                        <div class="card-body p-0 mt-4">
                                            <p class="fs-13 lh-2  mb-0 py-0 px-2"> {{ __('Hues Proprties') }} </p>
                                            <a href="/about"
                                                class="btn btn-block bg-gray-01 border-0 fs-14 text-heading">{{ __('More') }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
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
                        <h4 class="fs-22 text-heading mb-6">{{ __('Similar Homes You May Like') }}</h4>
                        <div class="slick-slider"
                            data-slick-options='{"slidesToShow": 2, "dots":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":2,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":2}},{"breakpoint": 768,"settings": {"slidesToShow": 1}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>

                            @foreach ($similars as $similar)
                                <div class=" box  ">
                                    <a href="/property/{{ $similar->slug }}">
                                        <div class="card" data-animate="zoomIn">
                                            <div class="hover-change-imagee rounded-lg card-img-top"
                                                onmouseenter="runAnimation(this)" onmouseleave="runAnimation2(this)">
                                                <special></special>
                                                <img src="/uploads/{{ $similar->image }}" style=""
                                                    alt="{{ $similar->{'title_' . App()->getLocale()} }}">
                                                <div class="card-img-overlayy p-2 d-flex flex-column">
                                                    <div>
                                                        @if ($project->unit)
                                                            <span class="badge mr-2 badge-orange">{{ __('Unit') }}</span>
                                                        @endif
                                                        @if ($project->main_type == 1)
                                                            <span class="badge mr-2 badge-primary">{{ __('for Sale') }}</span>
                                                        @endif
                                                        @if ($project->main_type == 2)
                                                            <span class="badge mr-2 badge-primary">{{ __('for Rent') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-3">
                                                <h2 class="card-title fs-16 lh-2 mb-0">
                                                    {{ $similar->{'title_' . App()->getLocale()} }}</h2>
                                                <p class="card-text font-weight-500 text-gray-light mb-2">
                                                    {{ $similar->{'address_' . App()->getLocale()} }}
                                                </p>
                                                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                                                <?php $i=0; ?>
                                                @foreach ($similar->facilities as $facility) 
                                                    @if($i<6) 
                                                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                        data-toggle="tooltip"
                                                        title="{{ $facility->facility->{'title_' . App()->getLocale()} }}">
                                                        <img src="/uploads/{{ $facility->facility->image }}" width="30" style="width:30px !important;">
                                                    </li>
                                                    @endif
                                                <?php $i++; ?>
                                                @endforeach
                                                </ul>
                                            </div>
                                            <div
                                                class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                                <p class="fs-17 font-weight-bold text-heading mb-0">
                                                    {{ $similar->price }} {{ __('LE') }}</p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent"
                                                            data-toggle="tooltip" title="Wishlist"><i
                                                                class="fas fa-heart"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </article>
                <aside class="col-lg-4 pl-xl-4 primary-sidebar sidebar-sticky" id="sidebar">
                    <div class="primary-sidebar-inner">
                        <div class="card border-0 widget-request-tour bg-transparent">
                            <ul class="nav nav-tabs d-flex" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active px-3" data-toggle="tab" href="#schedule" role="tab"
                                        aria-selected="true">{{ __('Details') }}</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link px-3" data-toggle="tab" href="#request-info" role="tab"
                                        aria-selected="false">{{ __('Request Info') }}</a>
                                </li>
                            </ul>
                            <div class="card-body px-sm-6 shadow-xxs-2 pb-5 pt-0 bg-white">


                             
                                <form>
                                    <div class="tab-content pt-1 pb-0 px-0 shadow-none">
                                        <div class="tab-pane fade active show" id="schedule" role="tabpanel">
                                            <div class="delivery d-flex font-weight-normal s-small my-2">
                                                @if ($project->downpayment)
                                                    <div class="item text-center font-weight-bold p-1 px-3 ">{{ __('Down Payment') }}
                                                        <div class="lg-font value text-main font-weight-bold text-primary">
                                                            {{ $project->downpayment }}%
                                                        </div>
                                                    </div>
                                                @endif
                                                @if ($project->installments)
                                                    <div class="item text-center font-weight-bold p-1  px-3">{{ __('Installments Years') }}<div
                                                            class="lg-font value text-main font-weight-bold text-primary">
                                                            {{ $project->installments }}
                                                        </div>
                                                    </div>
                                                @endif
                                                @if ($project->delivery_date)
                                                    <div class="item text-center font-weight-bold p-1 px-3">{{ __('Delivery date') }}
                                                        <div class="lg-font value text-main font-weight-bold text-primary">
                                                            {{ $project->delivery_date }}
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="tab-pane fade pt-5" id="request-info" role="tabpanel">
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
                                                <label class="form-check-label fs-13" for="exampleCheck2">Egestas
                                                    fringilla phasellus
                                                    faucibus
                                                    scelerisque
                                                    eleifend donec.</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <style>
                                .delivery .item {
                                    position: relative;
                                }

                                .delivery .item:not(:first-child):after {
                                    position: absolute;
                                    content: "";
                                    left: -2px;
                                    width: 1px;
                                    height: calc(100% - 5px);
                                    background: #b2b2b2;
                                    top: 0;
                                    bottom: 0;
                                    margin: auto;
                                }

                            </style>
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
                            <label class="form-check-label fs-13" for="exampleCheck3">Egestas fringilla phasellus
                                faucibus
                                scelerisque eleifend donec.</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Request Info</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
