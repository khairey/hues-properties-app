@extends('layouts.master')

@section('title', 'Internal Search')


@section('content')



    <section class="pt-5 py-6"></section>
    <section class="bg-secondary pt-5 py-6">
        <div class="container">
            <form class="search-form d-none d-lg-block" method="GET" action="/internalsearch">
                <div class="row align-items-center">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-md-6">
                                <label
                                    class="text-uppercase font-weight-500 opacity-7 text-white letter-spacing-093 mb-1">Category
                                </label>
                                <select
                                    class="form-control selectpicker bg-transparent border-bottom rounded-0 border-input-opacity-02"
                                    name="category" title="Select Category" data-style="p-0 h-24 lh-17 text-white">
                                    @foreach ($categories as $categori)
                                        <option value="{{ $categori->id }}">
                                            {{ $categori->{'title_' . App()->getLocale()} }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-6 pl-md-3 pt-md-0 pt-6">
                                <label
                                    class="text-uppercase font-weight-500 opacity-7 text-white letter-spacing-093 mb-1">District</label>
                                <select
                                    class="form-control selectpicker bg-transparent border-bottom rounded-0 border-input-opacity-02"
                                    name="district" title="Select District" data-style="p-0 h-24 lh-17 text-white">

                                    @foreach ($districts as $districti)
                                        <option value="{{ $districti->id }}">
                                            {{ $districti->{'title_' . App()->getLocale()} }} </option>
                                    @endforeach

                                </select>
                            </div>
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

    <section class="pt-12">
        <div class="container">
            <h2 class="text-heading mb-4 fs-22 fs-md-32 text-center lh-16 px-md-13">
                Internal search
            </h2>

            <div class="row">
                {{-- <div class="slick-slider slick-dots-mt-0 custom-arrow-spacing-30"
                data-slick-options='{"slidesToShow": 4, "autoplay":false,"dots":true,"responsive":[{"breakpoint": 1600,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":2,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"dots":true,"autoplay":false}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true,"autoplay":false}}]}'> --}}

                @foreach ($projects as $project)
                    <div class="col-4 box pb-7 pt-2">
                        <a href="/property/{{ $project->slug }}">
                            <div class="card" data-animate="zoomIn">
                                <div class="hover-change-imagee rounded-lg card-img-top" onmouseenter="runAnimation(this)"
                                    onmouseleave="runAnimation2(this)">
                                    <special></special>
                                    <img src="/uploads/{{ $project->image }}" style=""
                                        alt="{{ $project->{'title_' . App()->getLocale()} }}">
                                    <div class="card-img-overlayy p-2 d-flex flex-column">
                                        <div>
                                            @if ($project->unit)
                                                <span class="badge mr-2 badge-orange">Unit</span>
                                            @endif
                                            @if ($project->main_type == 1)
                                                <span class="badge mr-2 badge-primary">for Sale</span>
                                            @endif
                                            @if ($project->main_type == 2)
                                                <span class="badge mr-2 badge-primary">for Rent</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-3">
                                    <h2 class="card-title fs-16 lh-2 mb-0">{{ $project->{'title_' . App()->getLocale()} }}
                                    </h2>
                                    <p class="card-text font-weight-500 text-gray-light mb-2">
                                        {{ $project->{'address_' . App()->getLocale()} }}
                                    </p>
                                    <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                                    <?php $i=0; ?>
                                    @foreach ($project->facilities as $facility) 
                                        @if($i<6) 
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
                                <div
                                    class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                    <p class="fs-17 font-weight-bold text-heading mb-0">{{ $project->price }} LE</p>
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


    </section>

@stop
