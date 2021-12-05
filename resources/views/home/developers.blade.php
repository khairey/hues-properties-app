@extends('layouts.master')

@section('title', 'Page Title')


@section('content')


    <section class="position-relative pb-15 pt-2 page-title bg-patten bg-secondary">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-light mb-0 p-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Developers</li>
                </ol>
            </nav>
            <h1 class="fs-32 mb-0 text-white font-weight-500 text-center pt-11 mb-5 lh-17 mxw-478" data-animate="fadeInDown">
                Most Trusted<br> Real Estate Developers </h1>
        </div>
    </section>
    <section class="pt-10 pb-13">
        <div class="container">
            <div class="row align-items-sm-center mb-6">
                <div class="col-sm-6 mb-6 mb-sm-0">
                    <h2 class="fs-15 text-dark mb-0">
                    </h2>
                </div>
            </div>
            <div class="row">


                @foreach ($developers as $developer)

                    <div class="col-sm-6 col-md-4 mb-6">
                        <div class="card px-6">
                            <a class="card-img-top" href="/developer/{{ $developer->slug }}">
                                <img src="/uploads/{{ $developer->image }}"
                                    alt="{{ $developer->{'title_' . App()->getLocale()} }}">
                            </a>
                            <div class="card-body px-0 pt-2 pb-6 border-top">
                                <a href="/developer/{{ $developer->slug }}">
                                    <h6 class="text-dark lh-213 mb-0 hover-primary">
                                        {{ $developer->{'title_' . App()->getLocale()} }}</h6>
                                </a>

                            </div>
                        </div>
                    </div>


                @endforeach
            </div>
            <nav class="mt-2 pt-15">
                <ul class="pagination rounded-active justify-content-center mb-0">
                    <li class="page-item"><a class="page-link" href="#"><i
                                class="far fa-angle-double-left"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">...</li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i
                                class="far fa-angle-double-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </section>


@stop
