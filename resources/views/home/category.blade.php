@extends('layouts.master')

@section('title', $category->{'title_'.App()->getLocale()})


@section('content')
 
  
    <section class="pt-12">
      <div class="container">
        <h2 class="text-heading mb-4 fs-22 fs-md-32 text-center lh-16 px-md-13">
          {{ $category->{'title_'.App()->getLocale()} }}
        </h2>
         
        <div class="row">
            {{-- <div class="slick-slider slick-dots-mt-0 custom-arrow-spacing-30"
                data-slick-options='{"slidesToShow": 4, "autoplay":false,"dots":true,"responsive":[{"breakpoint": 1600,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":2,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"dots":true,"autoplay":false}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true,"autoplay":false}}]}'> --}}
                
                @foreach ( $projects as $project ) 
                    <div class="col-4 box pb-7 pt-2">
                        <a href="/property/{{ $project->slug }}">
                            <div class="card" data-animate="zoomIn">
                                <div class="hover-change-imagee rounded-lg card-img-top" onmouseenter="runAnimation(this)"
                                    onmouseleave="runAnimation2(this)">
                                    <special></special>
                                    <img src="/uploads/{{ $project->image }}" style=""
                                        alt="{{ $project->{'title_'.App()->getLocale()} }}">
                                    <div class="card-img-overlay p-2 d-flex flex-column">
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
                                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                            data-toggle="tooltip" title="3 Bedroom">
                                            <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                                <use xlink:href="#icon-bedroom"></use>
                                            </svg> 3 Br
                                        </li>
                                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                            data-toggle="tooltip" title="3 Bathrooms">
                                            <svg class="icon icon-shower fs-18 text-primary mr-1">
                                                <use xlink:href="#icon-shower"></use>
                                            </svg> 3 Ba
                                        </li>
                                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                            data-toggle="tooltip" title="Size">
                                            <svg class="icon icon-square fs-18 text-primary mr-1">
                                                <use xlink:href="#icon-square"></use>
                                            </svg> 2300 Sq.Ft
                                        </li>
                                        <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                                            data-toggle="tooltip" title="1 Garage">
                                            <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                                <use xlink:href="#icon-Garage"></use>
                                            </svg> 1 Gr
                                        </li>
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
    </section> 

@stop
