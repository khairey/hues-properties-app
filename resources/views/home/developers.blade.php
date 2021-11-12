
@extends('layouts.master')

@section('title', 'Page Title')


@section('content')




<main id="content">
      
        
        <section class="pt-10 pb-13">
            <div class="container"> 
                <div class="row">

                @foreach($developers as $developer)
                    <div class="col-sm-6 col-md-4 mb-6">
                        <div class="card px-6">
                            <a class="card-img-top" href="developers-details-1.html">
                                <img src="images/agency-grid-01.jpg" alt="Eco House Company">
                            </a>
                            <div class="card-body px-0 pt-2 pb-6 border-top">
                                <a href="developers-details-1.html">
                                    <h6 class="text-dark lh-213 mb-0 hover-primary">{{$developer->title}}</h6>
                                </a>
                                <p class="card-text">{{$developer->address}}</p>
                                <ul class="list-group list-group-no-border">
                                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                                        <span class="col-sm-4 p-0 fs-13">Mobile</span>
                                        <span class="col-sm-8 p-0 text-heading font-weight-500">{{$developer->phone}}</span>
                                    </li> 
                                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                                        <span class="col-sm-4 p-0 fs-13">Email</span>
                                        <span class="col-sm-8 p-0">{{$developer->email}}</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-sm-center lh-114 row m-0 px-0 pt-3 pb-0">
                                        <span class="col-sm-4 p-0 fs-13">Social</span>
                                        <ul class="col-sm-8 list-inline text-gray-lighter mx-n1 mb-0 p-0 z-index-2">
                                            <li class="list-inline-item mr-0 p-1">
                                                <a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item mr-0 p-1">
                                                <a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="list-inline-item mr-0 p-1">
                                                <a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li class="list-inline-item mr-0 p-1">
                                                <a href="#" class="w-32px h-32 rounded bg-hover-primary bg-white hover-white text-body d-flex align-items-center justify-content-center border border-hover-primary"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach  
                </div>
                <nav class="mt-2 pt-15">
                    <ul class="pagination rounded-active justify-content-center mb-0">
                        <li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-double-left"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">...</li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-double-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </main>


    @stop