@extends('layouts.master')

@section('title', 'Page Title')
<style>
    #shadows canvas {
        position: absolute;
        z-index: -9999999;
    }

</style>

@section('content')

    <section class="d-flex flex-column">
        <div class="bg-cover d-flex align-items-center custom-vh-100">
            <div class="parallax" style="position: absolute;left: 0px;top: 20px;height: 90%;width: 100%;">
                <img src="{{asset('');}}img/bg-home-01.jpg">
            </div>
            <div class="container pt-lg-15 py-lg-8" data-animate="zoomIn">
                <p style="@if (App::islocale('en')) font-family: 'roboto'; @endif margin-top: 35px;"
                    class="text-white @if (App::islocale('en')) fs-15 @else fs-35 @endif font-weight-500 @if (App::islocale('en')) letter-spacing-367 @endif mb-6 text-center text-uppercase">
                    {{ __('Let us guide your home') }}</p>
                <h2 style="font-size:120px;@if (App::islocale('en')) font-family: 'favourite','Alex Brush', cursive; @else font-family: 'arabic'; @endif margin-top:6.25rem;margin-bottom:2.3rem;"
                    class="text-white display-2 text-center">{{ __('Find Your Dream Home') }}</h2>
                <div class="py-11"></div>
                <div>
                    <form action="/searchproperties"
                        class="property-search py-lg-0 z-index-2 position-relative d-none d-lg-block"
                        style="padding-top: 110px !important;">
                        <div class="row no-gutters">
                            <div class="col-md-5 col-lg-4 col-xl-3">
                                <ul class="nav nav-pills property-search-status-tab">
                                    <li class="nav-item rounded-top" role="presentation">
                                        <a href="#" role="tab" aria-selected="true"
                                            class="nav-link btn btn-accent shadow-none rounded-bottom-0 text-white text-btn-focus-secondary text-uppercase d-flex align-items-center fs-13 rounded-bottom-0 letter-spacing-087 flex-md-1 px-4 py-2"
                                            data-toggle="pill" data-value="for-sale">
                                            <svg class="icon icon-villa fs-22 mr-2">
                                                <use xlink:href="#icon-villa"></use>
                                            </svg> {{ __('Search') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bg-white px-6 rounded-bottom rounded-top-right pb-6 pb-lg-0">
                            <div class="row align-items-center" id="accordion-4">
                                <div class="col-md-3 col-lg-3 col-xl-3 pt-6 pt-lg-0 order-1">
                                    <label
                                        class="text-uppercase font-weight-500 letter-spacing-093 mb-1">{{ __('Category') }}</label>
                                    <select
                                        class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input"
                                        title="{{ __('Select') }}" data-style="p-0 h-24 lh-17 text-dark" name="category">
                                        <option  selected value> {{__('Select')}} </option>
                                        @foreach ($categories as $categori)
                                            <option value="{{ $categori->id }}">
                                                {{ $categori->{'title_' . App()->getLocale()} }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2 col-lg-2 col-xl-2 pt-6 pt-lg-0 order-1">
                                    <label
                                        class="text-uppercase font-weight-500 letter-spacing-093 mb-1">{{ __('District') }}</label>
                                    <select
                                        class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input"
                                        title="{{ __('Select') }}" data-style="p-0 h-24 lh-17 text-dark" name="district">
                                        <option  selected value> {{__('Select')}} </option>
                                        @foreach ($districts as $districti)
                                            <option value="{{ $districti->id }}">
                                                {{ $districti->{'title_' . App()->getLocale()} }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3 pt-6 pt-lg-0 order-2">
                                    <label class=" font-weight-500 letter-spacing-093">{{ __('Title') }}</label>
                                    <div class="position-relative">
                                        <input type="text" name="title"
                                            class="form-control bg-transparent shadow-none border-top-0 border-right-0 border-left-0 border-bottom rounded-0 h-24 lh-17 pl-0 pr-4 font-weight-600 border-color-input placeholder-muted"
                                            placeholder="{{ __('Find something...') }}">
                                        <i
                                            class="far fa-search position-absolute pos-fixed-right-center pr-0 fs-18 mt-n3"></i>
                                    </div>
                                </div>
                                <div class="col-sm pr-lg-0 pt-6 pt-lg-0 order-3">
                                    <a href="#advanced-search-filters-4"
                                        class="btn advanced-search btn-accent h-lg-100 w-100 shadow-none text-secondary rounded-0 fs-14 fs-sm-16 font-weight-600 text-left d-flex align-items-center collapsed"
                                        data-toggle="collapse" data-target="#advanced-search-filters-4" aria-expanded="true"
                                        aria-controls="advanced-search-filters-4">
                                        {{ __('Advanced Search') }}
                                    </a>
                                </div>
                                <div class="col-sm pt-6 pt-lg-0 order-sm-4 order-5">
                                    <button type="submit"
                                        class="btn btn-primary shadow-none fs-16 font-weight-600 w-100 py-lg-2 lh-213">
                                        {{ __('Search') }}
                                    </button>
                                </div>
                                <div id="advanced-search-filters-4" class="col-12 pt-4 pb-sm-4 order-sm-5 order-4 collapse"
                                    data-parent="#accordion-4">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-3 pt-6">
                                            <label
                                                class="text-uppercase font-weight-500 letter-spacing-093 mb-1">{{ __('Developer') }}</label>
                                            <select
                                                class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input"
                                                name="developer" title="{{ __('Select') }}"
                                                data-style="p-0 h-24 lh-17 text-dark">
                                                <option  selected value> {{__('Select')}} </option>
                                                @foreach ($developers as $developer)
                                                    <option value="{{ $developer->id }}">
                                                        {{ $developer->{'title_' . App()->getLocale()} }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6 col-lg-3 pt-6">
                                            <label
                                                class="text-uppercase font-weight-500 letter-spacing-093 mb-1">{{ __('Delivery date') }}</label>
                                            <select
                                                class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input"
                                                title="{{ __('Select') }}" data-style="p-0 h-24 lh-17 text-dark"
                                                name="delivery_date">
                                                <option  selected value> {{__('Select')}} </option>
                                                @foreach ($deliverydates as $deliverydate)
                                                    <option value="{{ $deliverydate->delivery_date }}">
                                                        {{ $deliverydate->delivery_date }} </option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="col-sm-6 col-lg-3 pt-6">
                                            <label
                                                class="text-uppercase font-weight-500 letter-spacing-093 mb-1">{{ __('Property Type') }}</label>
                                            <select
                                                class="form-control selectpicker bg-transparent border-bottom rounded-0 border-color-input"
                                                name="property_type" title="{{ __('Select') }}"
                                                data-style="p-0 h-24 lh-17 text-dark">
                                                <option  selected value> {{__('Select')}} </option>
                                                @foreach ($propertytypes as $propertytype)

                                                    <option value="{{ $propertytype->id }}">
                                                        {{ $propertytype->{'title_' . App()->getLocale()} }} </option>

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-md-6 col-lg-4 pt-6 slider-range slider-range-secondary">
                                            <label for="price2" class="mb-4 text-gray-light">{{ __('Price') }}</label>
                                            <div data-slider="true" data-target="price2" data-target2="price3"
                                                data-slider-options='{"min":0,"max":{{ $maxprice }},"values":[0,0],"type":"currency"}'>
                                            </div>
                                            <div class="text-center mt-2">
                                                <input id="price2" type="text" value="" name="pricemin"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                                <input id="price3" type="text" value="" name="pricemax"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 pt-6 slider-range slider-range-secondary">
                                            <label for="payment2"
                                                class="mb-4 text-gray-light">{{ __('Down Payment') }}</label>
                                            <div data-slider="true" data-target="payment2" data-target2="payment3"
                                                data-slider-options='{"min":0,"max":{{ $maxpayment }},"values":[0,0],"type":"currency"}'>
                                            </div>
                                            <div class="text-center mt-2">
                                                <input id="payment2" type="text" value="" name="downpaymentmin"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                                <input id="payment3" type="text" value="" name="downpaymentmax"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 pt-6 slider-range slider-range-secondary">
                                            <label for="installments2"
                                                class="mb-4 text-gray-light">{{ __('Installments Years') }}</label>
                                            <div data-slider="true" data-target="installments2" data-target2="installments3"
                                                data-slider-options='{"min":0,"max":{{ $maxinst }},"values":[0,0],"type":"number"}'>
                                            </div>
                                            <div class="text-center mt-2">
                                                <input id="installments2" type="text" value="" name="installmentsmin"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                                <input id="installments3" type="text" value="" name="installmentsmax"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 pt-6 slider-range slider-range-secondary">
                                            <label for="unit_area2"
                                                class="mb-4 text-gray-light">{{ __('Unit Area') }}</label>
                                            <div data-slider="true" data-target="unit_area2" data-target2="unit_area3"
                                                data-slider-options='{"min":0,"max":{{ $maxarea }},"values":[0,0],"type":"number"}'>
                                            </div>
                                            <div class="text-center mt-2">
                                                <input id="unit_area2" type="text" value="" name="unit_areamin"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                                <input id="unit_area3" type="text" value="" name="unit_areamax"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                            </div>
                                        </div>



                                        <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" id="unit" name="unit" value="1">
                                                <label for="unit">{{ __('Unit') }}</label><br>
                                                <input type="radio" id="project" name="unit" value="2">
                                                <label for="project">{{ __('Project') }}</label><br>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" id="forrent" name="main_type" value="2">
                                                <label for="forrent">{{ __('for Rent') }}</label><br>
                                                <input type="radio" id="forsale" name="main_type" value="1">
                                                <label for="forsale">{{ __('for sale') }}</label><br>
                                            </div>
                                        </div>



                                        <div class="col-md-6 col-lg-4 pt-6 slider-range slider-range-secondary">
                                            <label for="kitchen2"
                                                class="mb-4 text-gray-light">{{ __('Kitchen') }}</label>
                                            <div data-slider="true" data-target="kitchen2" data-target2="kitchen3"
                                                data-slider-options='{"min":0,"max":10,"values":[0,0],"type":"number"}'>
                                            </div>
                                            <div class="text-center mt-2">
                                                <input id="kitchen2" type="text" value="" name="kitchenmin"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                                <input id="kitchen3" type="text" value="" name="kitchenmax"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 pt-6 slider-range slider-range-secondary">
                                            <label for="bathroom2"
                                                class="mb-4 text-gray-light">{{ __('Bathroom') }}</label>
                                            <div data-slider="true" data-target="bathroom2" data-target2="bathroom3"
                                                data-slider-options='{"min":0,"max":10,"values":[0,0],"type":"number"}'>
                                            </div>
                                            <div class="text-center mt-2">
                                                <input id="bathroom2" type="text" value="" name="bathroommin"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                                <input id="bathroom3" type="text" value="" name="bathroommax"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 pt-6 slider-range slider-range-secondary">
                                            <label for="bedroom2"
                                                class="mb-4 text-gray-light">{{ __('Bedroom') }}</label>
                                            <div data-slider="true" data-target="bedroom2" data-target2="bedroom3"
                                                data-slider-options='{"min":0,"max":10,"values":[0,0],"type":"number"}'>
                                            </div>
                                            <div class="text-center mt-2">
                                                <input id="bedroom2" type="text" value="" name="bedroommin"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                                <input id="bedroom3" type="text" value="" name="bedroommax"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                            </div>
                                        </div>
  
                                        <div class="col-md-6 col-lg-4 pt-6 slider-range slider-range-secondary">
                                            <label for="masterroom2"
                                                class="mb-4 text-gray-light">{{ __('Master Room') }}</label>
                                            <div data-slider="true" data-target="masterroom2" data-target2="masterroom3"
                                                data-slider-options='{"min":0,"max":10,"values":[0,0],"type":"number"}'>
                                            </div>
                                            <div class="text-center mt-2">
                                                <input id="masterroom2" type="text" value="" name="masterroommin"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                                <input id="masterroom3" type="text" value="" name="masterroommax"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                            </div>
                                        </div>
  
 





                                        <div class="col-12 pt-6 pb-2">
                                            <a class="lh-17 d-inline-block other-feature collapsed" data-toggle="collapse"
                                                href="#other-feature-4" role="button" aria-expanded="false"
                                                aria-controls="other-feature-4">
                                                <span
                                                    class="fs-15 text-heading font-weight-500 hover-primary">{{ __('Other Features') }}</span>
                                            </a>
                                        </div>
                                        <div class="collapse row mx-0 w-100" id="other-feature-4">
                                            @foreach ($facilities as $facilitiy)
                                                <div class="col-sm-6 col-md-4 col-lg-3 py-2">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            value="{{ $facilitiy->id }}" id="check1-{{ $facilitiy->id }}" name="features[]">
                                                        <label class="custom-control-label"
                                                            for="check1-{{ $facilitiy->id }}">{{ $facilitiy->{'title_' . App()->getLocale()} }}</label>
                                                    </div>
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form
                        class="property-search property-search-mobile d-lg-none z-index-2 position-relative bg-white rounded mx-md-10">
                        <div class="row align-items-lg-center" id="accordion-4-mobile">
                            <div class="col-12">
                                <div class="form-group mb-0 position-relative">
                                    <a href="#advanced-search-filters-4-mobile"
                                        class="text-primary btn advanced-search shadow-none pr-3 pl-0 d-flex align-items-center position-absolute pos-fixed-left-center py-0 h-100 border-right collapsed"
                                        data-toggle="collapse" data-target="#advanced-search-filters-4-mobile"
                                        aria-expanded="true" aria-controls="advanced-search-filters-4-mobile">
                                    </a>
                                    <input type="text"
                                        class="form-control form-control-lg border shadow-none pr-9 pl-11 bg-white placeholder-muted"
                                        name="key-word" placeholder="Search...">
                                    <button type="submit"
                                        class="btn position-absolute pos-fixed-right-center p-0 text-heading fs-20 px-3 shadow-none h-100 border-left">
                                        <i class="far fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="advanced-search-filters-4-mobile" class="col-12 pt-2 px-7 collapse"
                                data-parent="#accordion-4-mobile">
                                <div class="row mx-n2">
                                    <div class="col-sm-6 pt-4 px-2">
                                        <select
                                            class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                            title="Select" data-style="btn-lg py-2 h-52 bg-transparent" name="type">
                                            <option>All status</option>
                                            <option>For Rent</option>
                                            <option>For Sale</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 pt-4 px-2">
                                        <select
                                            class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                            title="All Types" data-style="btn-lg py-2 h-52 bg-transparent" name="type">
                                            <option>Condominium</option>
                                            <option>Single-Family Home</option>
                                            <option>Townhouse</option>
                                            <option>Multi-Family Home</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 pt-4 px-2">
                                        <select
                                            class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                            name="bedroom" title="Bedrooms" data-style="btn-lg py-2 h-52 bg-transparent">
                                            <option>All Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 pt-4 px-2">
                                        <select
                                            class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                            name="bathrooms" title="Bathrooms" data-style="btn-lg py-2 h-52 bg-transparent">
                                            <option>All Bathrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 pt-4 px-2">
                                        <select
                                            class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                            title="All Cities" data-style="btn-lg py-2 h-52 bg-transparent" name="city">
                                            <option>All Cities</option>
                                            <option>New York</option>
                                            <option>Los Angeles</option>
                                            <option>Chicago</option>
                                            <option>Houston</option>
                                            <option>San Diego</option>
                                            <option>Las Vegas</option>
                                            <option>Las Vegas</option>
                                            <option>Atlanta</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 pt-4 px-2">
                                        <select
                                            class="form-control border shadow-none form-control-lg selectpicker bg-transparent"
                                            name="areas" title="All Areas" data-style="btn-lg py-2 h-52 bg-transparent">
                                            <option>All Areas</option>
                                            <option>Albany Park</option>
                                            <option>Altgeld Gardens</option>
                                            <option>Andersonville</option>
                                            <option>Beverly</option>
                                            <option>Brickel</option>
                                            <option>Central City</option>
                                            <option>Coconut Grove</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pt-6 slider-range slider-range-secondary">
                                        <label for="price-4-mobile" class="mb-4 text-white">Price Range</label>
                                        <div data-slider="true"
                                            data-slider-options='{"min":0,"max":1000000,"values":[100000,700000],"type":"currency"}'>
                                        </div>
                                        <div class="text-center mt-2">
                                            <input id="price-4-mobile" type="text"
                                                class="border-0 amount text-center bg-transparent font-weight-500"
                                                name="price">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-6 slider-range slider-range-secondary">
                                        <label for="area-size-4-mobile" class="mb-4">Area Size</label>
                                        <div data-slider="true"
                                            data-slider-options='{"min":0,"max":15000,"values":[0,12000],"type":"sqrt"}'>
                                        </div>
                                        <div class="text-center mt-2">
                                            <input id="area-size-4-mobile" type="text"
                                                class="border-0 amount text-center bg-transparent font-weight-500"
                                                name="area">
                                        </div>
                                    </div>
                                    <div class="col-12 pt-4 pb-2">
                                        <a class="lh-17 d-inline-block other-feature collapsed" data-toggle="collapse"
                                            href="#other-feature-4-mobile" role="button" aria-expanded="false"
                                            aria-controls="other-feature-4-mobile">
                                            <span class="fs-15 font-weight-500 hover-primary">Other Features</span>
                                        </a>
                                    </div>
                                    <div class="collapse row mx-0 w-100" id="other-feature-4-mobile">
                                        <div class="col-sm-6 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="features[]"
                                                    id="check1-4-mobile">
                                                <label class="custom-control-label" for="check1-4-mobile">Air
                                                    Conditioning</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="features[]"
                                                    id="check2-4-mobile">
                                                <label class="custom-control-label" for="check2-4-mobile">Laundry</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="features[]"
                                                    id="check4-4-mobile">
                                                <label class="custom-control-label" for="check4-4-mobile">Washer</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="features[]"
                                                    id="check5-4-mobile">
                                                <label class="custom-control-label" for="check5-4-mobile">Barbeque</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="features[]"
                                                    id="check6-4-mobile">
                                                <label class="custom-control-label" for="check6-4-mobile">Lawn</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="features[]"
                                                    id="check7-4-mobile">
                                                <label class="custom-control-label" for="check7-4-mobile">Sauna</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="features[]"
                                                    id="check8-4-mobile">
                                                <label class="custom-control-label" for="check8-4-mobile">WiFi</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="features[]"
                                                    id="check9-4-mobile">
                                                <label class="custom-control-label" for="check9-4-mobile">Dryer</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="features[]"
                                                    id="check10-4-mobile">
                                                <label class="custom-control-label"
                                                    for="check10-4-mobile">Microwave</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="features[]"
                                                    id="check11-4-mobile">
                                                <label class="custom-control-label" for="check11-4-mobile">Swimming
                                                    Pool</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="features[]"
                                                    id="check12-4-mobile">
                                                <label class="custom-control-label" for="check12-4-mobile">Window
                                                    Coverings</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="features[]"
                                                    id="check13-4-mobile">
                                                <label class="custom-control-label" for="check13-4-mobile">Gym</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="features[]"
                                                    id="check14-4-mobile">
                                                <label class="custom-control-label" for="check14-4-mobile">Outdoor
                                                    Shower</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="features[]"
                                                    id="check15-4-mobile">
                                                <label class="custom-control-label" for="check15-4-mobile">TV Cable</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 py-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="features[]"
                                                    id="check16-4-mobile">
                                                <label class="custom-control-label"
                                                    for="check16-4-mobile">Refrigerator</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-lg-12 pb-lg-10 py-11">
        <div id="shadows" class=""></div>
        <div class="container container-xxl pt-1" style="background-color: rgb(255 255 255 / 68%);">
            <div class="row">
                <div class="col-md-9">
                    <h2 style="font-family: 'Permanent Marker', cursive;" class="text-heading">
                        {{ __('Best Properties For Sale') }}
                    </h2>
                    <span class="heading-divider"></span>
                    <p class="mb-6">
                        {{ __('Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse') }}</p>
                </div>
                {{-- <div class="col-md-3 text-md-right">
                    <a href="listing-grid-with-left-filter.html"
                        class="btn fs-14 text-secondary btn-accent py-3 lh-15 px-7 mb-6 mb-lg-0">See all properties
                        <i class="far fa-long-arrow-right ml-1"></i>
                    </a>
                </div> --}}
            </div>
            <div class="row">
                {{-- <div class="slick-slider slick-dots-mt-0 custom-arrow-spacing-30"
                data-slick-options='{"slidesToShow": 4, "autoplay":false,"dots":true,"responsive":[{"breakpoint": 1600,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":2,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"dots":true,"autoplay":false}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true,"autoplay":false}}]}'> --}}

                @foreach ($projects as $project)
                    <div class="col-4 box pb-7 pt-2">
                        <div class="card" data-animate="zoomIn">
                            <a href="/property/{{ $project->slug }}">
                                <div class="hover-change-imagee rounded-lg card-img-top" onmouseenter="runAnimation(this)"
                                    onmouseleave="runAnimation2(this)">
                                    <special></special>
                                    <img src="/uploads/{{ $project->image }}" style=""
                                        alt="{{ $project->{'title_' . App()->getLocale()} }}">
                                    <div class="p-2 d-flex flex-column">
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
                            </a>
                            <div class="card-body pt-3">
                                <h2 class="card-title fs-16 lh-2 mb-0">
                                    {{ $project->{'title_' . App()->getLocale()} }}
                                </h2>
                                <p class="card-text font-weight-500 text-gray-light mb-2">
                                    {{ $project->{'address_' . App()->getLocale()} }}
                                </p>
                                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                                    <?php $i = 0; ?>
                                    @foreach ($project->facilities as $facility)
                                        @if ($i < 6)
                                            <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                                data-toggle="tooltip"
                                                title="{{ $facility->facility->{'title_' . App()->getLocale()} }}">
                                                <img src="/uploads/{{ $facility->facility->image }}" width="30">
                                            </li>
                                        @endif
                                        <?php $i++; ?>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                <p class="fs-17 font-weight-bold text-heading mb-0">{{ $project->price }}
                                    {{ __('LE') }}</p>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#"
                                            class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent"
                                            data-toggle="tooltip" title="Wishlist"><i class="fas fa-heart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section>
        <div class="bg-gray-02 py-lg-13 pt-11 pb-6">
            <div class="container container-xxl">
                <div class="row">
                    <div class="col-lg-4 pr-xl-13" data-animate="@if (App::islocale('en')) fadeInLeft @else fadeInRight @endif">
                        <h2 class="text-heading lh-1625">{{ __('Explore') }} <br> {{ __('by Property Type') }}</h2>
                        <span class="heading-divider"></span>
                        <p class="mb-6">
                            {{ __('Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse') }}
                        </p>
                        {{-- <a href="/" class="btn btn-lg text-secondary btn-accent">+2300
                            Available Properties
                            <i class="far fa-long-arrow-right ml-1"></i>
                        </a> --}}
                    </div>
                    <div class="col-lg-8" data-animate="@if (App::islocale('en')) fadeInRight @else fadeInLeft @endif">
                        <div class="slick-slider arrow-haft-inner custom-arrow-xxl-hide mx-0"
                            data-slick-options='{"slidesToShow": 4, "autoplay":false,"dots":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 3,"arrows":false,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 2,"arrows":false,"autoplay":true}}]}'>

                            @foreach ($propertytypes as $propertytype)

                                <div class="box px-0 py-6">
                                    <div
                                        class="card border-0 align-items-center justify-content-center pt-7 pb-5 px-3 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none">
                                        <img src="/uploads/{{ $propertytype->image }}" class="card-img-top"
                                            alt="{{ $propertytype->{'title_' . App()->getLocale()} }}">
                                        <div class="card-body px-0 pt-5 pb-0">
                                            <h4 class="card-title fs-16 lh-2 text-dark mb-0">
                                                {{ $propertytype->{'title_' . App()->getLocale()} }}</h4>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-lg-12 pb-lg-15 py-11">
        <div class="container container-xxl" style="background-color: rgb(255 255 255 / 68%);">
            <h2 class="text-heading"> {{ __('Destinations We Love The Most') }}</h2>
            <span class="heading-divider"></span>
            <p class="mb-7">{{ __('Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse') }}</p>
            <div class="slick-slider mx-n2"
                data-slick-options='{"slidesToShow": 5,"arrows":false, "autoplay":false,"dots":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":3}},{"breakpoint": 992,"settings": {"slidesToShow":3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>

                @foreach ($districts as $district)

                    <div class="box px-2" data-animate="fadeInUp">
                        <div class="card text-white bg-overlay-gradient-8 hover-zoom-in">
                            <img src="/uploads/{{ $district->image }}" class="card-img"
                                alt="{{ $district->{'title_' . App()->getLocale()} }}">
                            <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                                <h2 class="card-title mb-0 fs-20 lh-182"><a
                                        href="/internalsearch?district={{ $district->id }}"
                                        class="text-white">{{ $district->{'title_' . App()->getLocale()} }}</a></h2>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <section>
        <div class="pt-lg-13 pb-lg-12 py-11 bg-secondary">
            <div class="container container-xxl">
                <div class="row align-items-center">
                    <div class="col-lg-6 pr-xl-8 pb-lg-0 pb-6" data-animate="@if (App::islocale('en')) fadeInLeft @else fadeInRight @endif">
                        <a href="#" class="hover-shine d-block">
                            <img src="images/single-image-01.jpg" class="rounded-lg w-100" alt="Find your neighborhood">
                        </a>
                    </div>
                    <div class="col-lg-6 pl-xl-8" data-animate="@if (App::islocale('en')) fadeInRight @else fadeInLeft @endif">
                        <h2 class="text-white lh-1625">{{ __('Find your') }}<br /> {{ __('neighborhood') }}
                        </h2>
                        <span class="heading-divider"></span>
                        <p class="mb-6 text-white">
                            {{ __('Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse') }}</p>
                        <div class="input-group input-group-lg pr-sm-17">
                            <input type="text"
                                class="form-control fs-13 font-weight-500 text-gray-light rounded-lg rounded-right-0 border-0 shadow-none h-52 bg-white"
                                name="search" placeholder="Enter an address, neighbourhood">
                            <button type="submit" class="btn btn-primary fs-18 rounded-left-0 rounded-lg px-6 border-0">
                                <i class="far fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container container-xxl">
            <div class="py-lg-8 py-6 border-top">
                <div class="slick-slider mx-0 partners"
                    data-slick-options='{"slidesToShow": 6, "autoplay":true,"dots":false,"arrows":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":4}},{"breakpoint": 992,"settings": {"slidesToShow":3}},{"breakpoint": 768,"settings": {"slidesToShow": 3}},{"breakpoint": 576,"settings": {"slidesToShow": 2}}]}'>

                    @foreach ($developers as $developer)
                        <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
                            <a href="/developer/{{ $developer->slug }}"
                                class="item position-relative hover-change-image">
                                <img src="/uploads/{{ $developer->image }}"
                                    class="hover-image position-absolute pos-fixed-top"
                                    alt="$developer->{'title_' . App()->getLocale()} }}">
                                <img src="/uploads/{{ $developer->image }}"
                                    alt="$developer->{'title_' . App()->getLocale()} }}" class="image">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


@stop
