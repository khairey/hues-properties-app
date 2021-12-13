@extends('layouts.master')

@section('title', 'Search')




@section('content')


    <section class="pt-5 py-6"></section>
    <section class="pt-8 pb-11">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-8 mb-lg-0">
                    <div class="row align-items-sm-center mb-6">
                        <div class="col-md-6">
                            <h2 class="fs-15 text-dark mb-0"> {{ __('We found') }} <span
                                    class="text-primary">{{ count($projects) }}</span>
                                {{ __('properties available for you') }}
                            </h2>
                        </div>
                        <div class="col-md-6 mt-6 mt-md-0">
                            <div class="d-flex justify-content-md-end align-items-center">
                                {{-- <div class="input-group border rounded input-group-lg w-auto bg-white mr-3">
                    <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3"
                      for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                    <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby"
                      data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3" id="inputGroupSelect01"
                      name="sortby">
                      <option selected>Top Selling</option>
                      <option value="1">Most Viewed</option>
                      <option value="2">Price(low to high)</option>
                      <option value="3">Price(high to low)</option>
                    </select>
                  </div> --}}
                                <div class="d-none d-md-block">
                                    <a class="fs-sm-18 text-dark opacity-2" href="search-map.html">
                                        <i class="fas fa-globe"></i>
                                    </a>
                                    <a class="fs-sm-18 text-dark opacity-2 ml-5" href="search-list.html">
                                        <i class="fas fa-list"></i>
                                    </a>
                                    <a class="fs-sm-18 text-dark ml-5" href="search.html">
                                        <i class="fa fa-th-large"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- <div class="col-md-6 mb-6">
                <div class="card border-0" data-animate="fadeInUp">
                  <div class="position-relative hover-change-imagee bg-hover-overlay rounded-lg card-img" onmouseenter="runAnimation(this)"
                                onmouseleave="runAnimation2(this)">
                                <special></special>
                    <img src="images/properties-grid-35.jpg" alt="Home in Metric Way">
                    <div class="card-img-overlay d-flex flex-column">
                      <div><span class="badge badge-primary">For Sale</span></div>
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
                    <h2 class="fs-16 mb-1"><a href="single-property-1.html" class="text-dark hover-primary">Home in
                        Metric Way</a>
                    </h2>
                    <p class="font-weight-500 text-gray-light mb-0">1421 San Pedro St, Los Angeles</p>
                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-16">
                      $1.250.000
                    </p>
                  </div>
                  <div class="card-footer bg-transparent px-0 pb-0 pt-2">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7" data-toggle="tooltip"
                        title="3 Bedroom">
                        <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                          <use xlink:href="#icon-bedroom"></use>
                        </svg> 3 Br
                      </li>
                      <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-7" data-toggle="tooltip"
                        title="3 Bathrooms">
                        <svg class="icon icon-shower fs-18 text-primary mr-1">
                          <use xlink:href="#icon-shower"></use>
                        </svg> 3 Ba
                      </li>
                      <li class="list-inline-item text-gray font-weight-500 fs-13" data-toggle="tooltip" title="Size">
                        <svg class="icon icon-square fs-18 text-primary mr-1">
                          <use xlink:href="#icon-square"></use>
                        </svg> 2300 Sq.Ft
                      </li>
                    </ul>
                  </div>
                </div>
              </div> --}}
                        @foreach ($projects as $project)
                            <div class="col-6 box pb-7 pt-2">
                                <div class="card" data-animate="zoomIn">
                                    <a href="{{url('');}}/property/{{ $project->slug }}">
                                        <div class="hover-change-imagee rounded-lg card-img-top"
                                            onmouseenter="runAnimation(this)" onmouseleave="runAnimation2(this)">
                                            <special></special>
                                            <img src="{{asset('');}}uploads/{{ $project->image }}" style=""
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
                                                        <img src="{{asset('');}}uploads/{{ $facility->facility->image }}" width="30">
                                                    </li>
                                                @endif
                                                <?php $i++; ?>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div
                                        class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                        <p class="fs-17 font-weight-bold text-heading mb-0">{{ $project->price }}
                                            {{ __('LE') }}</p>
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
                            </div>
                        @endforeach
                    </div>
                    {{-- <nav class="pt-4">
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
            </nav> --}}
                </div>
                <div class="col-lg-4 primary-sidebar sidebar-sticky" id="sidebar">
                    <div class="primary-sidebar-inner">
                        <div class="card border-0 mb-4">
                            <div class="card-body pl-0   pr-0 pt-2 pb-4">
                                <h4 class="card-title fs-16 lh-2 text-dark mb-3">{{ __('Search') }}</h4>
                                <form action="{{asset('');}}searchproperties">
                                    <div class="form-group">
                                        <label for="key-word" class="sr-only">{{ __('Title') }}</label>
                                        <input type="text" name="title" value="{{ $request->title}}"
                                            class="form-control form-control-lg border-0 shadow-none" id="key-word"
                                            placeholder="{{ __('Find something...') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="category" class="sr-only">{{ __('Category') }}</label>
                                        <select class="form-control border-0 shadow-none form-control-lg selectpicker"
                                            title="{{ __('Category') }}" name="category" data-style="btn-lg py-2 h-52"
                                            id="category">
                                            <option   value> {{__('Select')}} </option>
                                            @foreach ($categories as $categori)
                                                <option 
                                                @if ($categori->id==$request->category)
                                                    selected
                                                @endif
                                                 value="{{ $categori->id }}">
                                                    {{ $categori->{'title_' . App()->getLocale()} }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="District" class="sr-only">{{ __('District') }}</label>
                                        <select class="form-control border-0 shadow-none form-control-lg selectpicker"
                                            title="{{ __('District') }}" name="district" data-style="btn-lg py-2 h-52"
                                            id="District">
                                            <option   value> {{__('Select')}} </option>
                                            @foreach ($districts as $districti)
                                                <option 
                                                @if ($districti->id==$request->district)
                                                    selected
                                                @endif
                                                value="{{ $districti->id }}">
                                                    {{ $districti->{'title_' . App()->getLocale()} }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="developer" class="sr-only">{{ __('Developer') }}</label>
                                        <select class="form-control border-0 shadow-none form-control-lg selectpicker"
                                            title="{{ __('Developer') }}" name="developer" data-style="btn-lg py-2 h-52"
                                            id="developer">
                                            <option   value> {{__('Select')}} </option>
                                            @foreach ($developers as $developer)
                                                <option 
                                                @if ($developer->id==$request->developer)
                                                    selected
                                                @endif
                                                value="{{ $developer->id }}">
                                                    {{ $developer->{'title_' . App()->getLocale()} }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="delivery_date"
                                            class="sr-only">{{ __('Delivery date') }}</label>
                                        <select class="form-control border-0 shadow-none form-control-lg selectpicker"
                                            title="{{ __('Delivery date') }}" name="delivery_date"
                                            data-style="btn-lg py-2 h-52" id="delivery_date">
                                            <option   value> {{__('Select')}} </option>
                                            @foreach ($deliverydates as $deliverydate)
                                                <option 
                                                @if ($deliverydate->delivery_date==$request->delivery_date)
                                                    selected
                                                @endif
                                                value="{{ $deliverydate->delivery_date }}">
                                                    {{ $deliverydate->delivery_date }} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="property_type"
                                            class="sr-only">{{ __('Property Type') }}</label>
                                        <select class="form-control border-0 shadow-none form-control-lg selectpicker"
                                            title="{{ __('Property Type') }}" name="property_type"
                                            data-style="btn-lg py-2 h-52" id="property_type">
                                            <option   value> {{__('Select')}} </option>
                                            @foreach ($propertytypes as $propertytype)

                                                <option 
                                                @if ($propertytype->id==$request->property_type)
                                                    selected
                                                @endif
                                                value="{{ $propertytype->id }}">
                                                    {{ $propertytype->{'title_' . App()->getLocale()} }} </option>

                                            @endforeach
                                        </select>
                                    </div> 

                                    <div class="form-group slider-range slider-range-secondary">
                                       <label for="price2" class="mb-4 text-gray-light">{{ __('Price') }}</label>
                                            <div data-slider="true" data-target="price2" data-target2="price3"
                                                data-slider-options='{"min":0,"max":{{ $maxprice }},"values":[{{ $minsearchprice }},{{ $maxsearchprice }}],"type":"currency"}'>
                                            </div>
                                            <div class="text-center mt-2">
                                                <input id="price2" type="text" value="" name="pricemin"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                                <input id="price3" type="text" value="" name="pricemax"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                            </div>
                                    </div> 
                                    <div class="form-group slider-range slider-range-secondary">
                                       <label for="payment2"
                                                class="mb-4 text-gray-light">{{ __('Down Payment') }}</label>
                                            <div data-slider="true" data-target="payment2" data-target2="payment3"
                                                data-slider-options='{"min":0,"max":{{ $maxpayment }},"values":[{{ $minsearchpayment }},{{ $maxsearchpayment }}],"type":"currency"}'>
                                            </div>
                                            <div class="text-center mt-2">
                                                <input id="payment2" type="text" value="" name="downpaymentmin"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                                <input id="payment3" type="text" value="" name="downpaymentmax"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                            </div>
                                    </div> 
                                    <div class="form-group slider-range slider-range-secondary">
                                       <label for="installments2"
                                                class="mb-4 text-gray-light">{{ __('Installments Years') }}</label>
                                            <div data-slider="true" data-target="installments2" data-target2="installments3"
                                                data-slider-options='{"min":0,"max":{{ $maxinst }},"values":[{{ $minsearchinst }},{{ $maxsearchinst }}],"type":"number"}'>
                                            </div>
                                            <div class="text-center mt-2">
                                                <input id="installments2" type="text" value="" name="installmentsmin"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                                <input id="installments3" type="text" value="" name="installmentsmax"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                            </div>
                                    </div> 
                                    <div class="form-group slider-range slider-range-secondary">
                                       <label for="unit_area2"
                                                class="mb-4 text-gray-light">{{ __('Unit Area') }}</label>
                                            <div data-slider="true" data-target="unit_area2" data-target2="unit_area3"
                                                data-slider-options='{"min":0,"max":{{ $maxarea }},"values":[{{ $minsearcharea }},{{ $maxsearcharea }}],"type":"number"}'>
                                            </div>
                                            <div class="text-center mt-2">
                                                <input id="unit_area2" type="text" value="" name="unit_areamin"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                                <input id="unit_area3" type="text" value="" name="unit_areamax"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                            </div>
                                    </div> 












                                    <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input
                                                @if ($request->unit==1)
                                                    checked
                                                @endif
                                                 type="radio" id="unit" name="unit" value="1">
                                                <label for="unit">{{ __('Unit') }}</label><br>
                                                <input 
                                                @if ($request->unit==2)
                                                    checked
                                                @endif
                                                type="radio" id="project" name="unit" value="2">
                                                <label for="project">{{ __('Project') }}</label><br>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input 
                                                @if ($request->main_type==2)
                                                    checked
                                                @endif
                                                type="radio" id="forrent" name="main_type" value="2">
                                                <label for="forrent">{{ __('for Rent') }}</label><br>
                                                <input 
                                                @if ($request->main_type==1)
                                                    checked
                                                @endif
                                                type="radio" id="forsale" name="main_type" value="1">
                                                <label for="forsale">{{ __('for sale') }}</label><br>
                                            </div>
                                        </div>



                                        <div class="form-group slider-range slider-range-secondary">
                                            <label for="kitchen2"
                                                class="mb-4 text-gray-light">{{ __('Kitchen') }}</label>
                                            <div data-slider="true" data-target="kitchen2" data-target2="kitchen3"
                                                data-slider-options='{"min":0,"max":10,"values":[{{ $minsearchkitchen }},{{ $maxsearchkitchen }}],"type":"number"}'>
                                            </div>
                                            <div class="text-center mt-2">
                                                <input id="kitchen2" type="text" value="" name="kitchenmin"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                                <input id="kitchen3" type="text" value="" name="kitchenmax"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                            </div>
                                        </div>
                                        <div class="form-group slider-range slider-range-secondary">
                                            <label for="bathroom2"
                                                class="mb-4 text-gray-light">{{ __('Bathroom') }}</label>
                                            <div data-slider="true" data-target="bathroom2" data-target2="bathroom3"
                                                data-slider-options='{"min":0,"max":10,"values":[{{ $minsearchbath }},{{ $maxsearchbath }}],"type":"number"}'>
                                            </div>
                                            <div class="text-center mt-2">
                                                <input id="bathroom2" type="text" value="" name="bathroommin"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                                <input id="bathroom3" type="text" value="" name="bathroommax"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                            </div>
                                        </div>
                                        <div class="form-group slider-range slider-range-secondary">
                                            <label for="bedroom2"
                                                class="mb-4 text-gray-light">{{ __('Bedroom') }}</label>
                                            <div data-slider="true" data-target="bedroom2" data-target2="bedroom3"
                                                data-slider-options='{"min":0,"max":10,"values":[{{ $minsearchbed }},{{ $maxsearchbed }}],"type":"number"}'>
                                            </div>
                                            <div class="text-center mt-2">
                                                <input id="bedroom2" type="text" value="" name="bedroommin"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                                <input id="bedroom3" type="text" value="" name="bedroommax"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                            </div>
                                        </div>
  
                                        <div class="form-group slider-range slider-range-secondary">
                                            <label for="masterroom2"
                                                class="mb-4 text-gray-light">{{ __('Master Room') }}</label>
                                            <div data-slider="true" data-target="masterroom2" data-target2="masterroom3"
                                                data-slider-options='{"min":0,"max":10,"values":[{{ $minsearchmaster }},{{ $maxsearchmaster }}],"type":"number"}'>
                                            </div>
                                            <div class="text-center mt-2">
                                                <input id="masterroom2" type="text" value="" name="masterroommin"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                                <input id="masterroom3" type="text" value="" name="masterroommax"
                                                    class="border-0 amount text-center text-body font-weight-500 bg-transparent">
                                            </div>
                                        </div>
  



                                    <a class="lh-17 d-inline-block" data-toggle="collapse" href="#other-feature"
                                        role="button" aria-expanded="false" aria-controls="other-feature">
                                        <span class="text-primary d-inline-block mr-1"><i
                                                class="far fa-plus-square"></i></span>
                                        <span class="fs-15 text-heading font-weight-500 hover-primary">{{ __('Other Features') }}</span>
                                    </a>
                                    <div class="collapse" id="other-feature">
                                        <div class="card card-body border-0 px-0 pb-0 pt-3">
                                            <ul class="list-group list-group-no-border">

                                            @foreach ($facilities as $facilitiy)
                                              
                                                <li class="list-group-item px-0 pt-0 pb-2">
                                                    <div class="custom-control custom-checkbox">
                                                        <input
                                                        @if (!empty($request->features) AND in_array($facilitiy->id,$request->features))
                                                            checked
                                                        @endif
                                                         value="{{ $facilitiy->id }}" type="checkbox" class="custom-control-input" id="check{{ $facilitiy->id }}" name="features[]">
                                                        <label class="custom-control-label" for="check{{ $facilitiy->id }}">{{ $facilitiy->{'title_' . App()->getLocale()} }}</label>
                                                    </div>
                                                </li>
                                            @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block shadow-none mt-4">{{ __('Search') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                        {{-- <div class="card border-0 property-widget mb-1">
                <div class="card-body pl-0 pl-lg-6 pr-0 pt-5 pb-6">
                  <h4 class="card-title fs-16 lh-2 text-dark mb-3">Featured Properties</h4>
                  <div class="slick-slider mx-0" data-slick-options='{"slidesToShow": 1, "autoplay":true}'>
                    <div class="box px-0">
                      <div class="card border-0">
                        <img src="images/feature-property-01.jpg" class="card-img" alt="Villa on Hollywood Boulevard">
                        <div class="card-img-overlay d-flex flex-column bg-gradient-3 rounded-lg">
                          <div class="d-flex mb-auto">
                            <a href="#" class="mr-1 badge badge-orange">featured</a>
                            <a href="#" class="badge badge-indigo">for Rent</a>
                          </div>
                          <div class="px-2 pb-2">
                            <a href="single-property-1.html" class="text-white">
                              <h5 class="card-title fs-16 lh-2 mb-0">Villa on Hollywood Boulevard
                              </h5>
                            </a>
                            <p class="card-text text-gray-light mb-0 font-weight-500">1421 San Predro St, Los Angeles
                            </p>
                            <p class="text-white mb-0"><span class="fs-17 font-weight-bold">$2500 </span>/month
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box px-0">
                      <div class="card border-0">
                        <img src="images/feature-property-01.jpg" class="card-img" alt="Villa on Hollywood Boulevard">
                        <div class="card-img-overlay d-flex flex-column bg-gradient-3 rounded-lg">
                          <div class="d-flex mb-auto">
                            <a href="#" class="mr-1 badge badge-orange">featured</a>
                            <a href="#" class="badge badge-indigo">for Rent</a>
                          </div>
                          <div class="px-2 pb-2">
                            <a href="single-property-1.html" class="text-white">
                              <h5 class="card-title fs-16 lh-2 mb-0">Villa on Hollywood Boulevard
                              </h5>
                            </a>
                            <p class="card-text text-gray-light mb-0 font-weight-500">1421 San Predro St, Los Angeles
                            </p>
                            <p class="text-white mb-0"><span class="fs-17 font-weight-bold">$2500 </span>/month
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box px-0">
                      <div class="card border-0">
                        <img src="images/feature-property-01.jpg" class="card-img" alt="Villa on Hollywood Boulevard">
                        <div class="card-img-overlay d-flex flex-column bg-gradient-3 rounded-lg">
                          <div class="d-flex mb-auto">
                            <a href="#" class="mr-1 badge badge-orange">featured</a>
                            <a href="#" class="badge badge-indigo">for Rent</a>
                          </div>
                          <div class="px-2 pb-2">
                            <a href="single-property-1.html" class="text-white">
                              <h5 class="card-title fs-16 lh-2 mb-0">Villa on Hollywood Boulevard
                              </h5>
                            </a>
                            <p class="card-text text-gray-light mb-0 font-weight-500">1421 San Predro St, Los Angeles
                            </p>
                            <p class="text-white mb-0"><span class="fs-17 font-weight-bold">$2500 </span>/month
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>





































@stop
