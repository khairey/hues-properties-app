@extends('layouts.admin')

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12 col-sm-12">
                <form action="/admin/settings" method="post">
                    @csrf
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                        href="#custom-tabs-three-profile" role="tab"
                                        aria-controls="custom-tabs-three-profile" aria-selected="false">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-home-tab" data-toggle="pill"
                                        href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home"
                                        aria-selected="true">About</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade active show" id="custom-tabs-three-profile" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-profile-tab">
                                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus
                                    ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                    posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula
                                    placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet
                                    ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                                </div>
                                <div class="tab-pane fade " id="custom-tabs-three-home" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-home-tab">
                                    <div class="form-group">
                                        <label for="exampleInputEmail0">Company Name</label>
                                        <input type="text" name="WebsiteData[company_name]" class="form-control"
                                            value="{{ $model->company_name }}" id="exampleInputEmail0"
                                            placeholder="Hues Property">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Video Link</label>
                                        <input type="text" name="WebsiteData[video]" class="form-control"
                                            value="{{ $model->video }}" id="exampleInputEmail1"
                                            placeholder="https://www.youtube.com/watch?v=0O2aH4XLbto">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">About title</label>
                                        <input type="text" name="WebsiteData[about_title]" class="form-control"
                                            value="{{ $model->about_title }}" id="exampleInputEmail2" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">About Sub title</label>
                                        <input type="text" name="WebsiteData[about_sub_title]" class="form-control"
                                            value="{{ $model->about_sub_title }}" id="exampleInputEmail3"
                                            placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail4">About Details</label>
                                        <textarea class="summernote" id="exampleInputEmail4"
                                            name="WebsiteData[about_details]">{!! $model->about_details !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail5">Services Details</label>
                                        <textarea class="summernote" id="exampleInputEmail5"
                                            name="WebsiteData[services_details]">{!! $model->services_details !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail6">Team Details</label>
                                        <textarea class="summernote" id="exampleInputEmail6"
                                            name="WebsiteData[team_details]">{!! $model->team_details !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail7">Office Location</label>
                                        <textarea class="summernote" id="exampleInputEmail7"
                                            name="WebsiteData[office_location]">{!! $model->office_location !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail8">Address</label>
                                        <input type="text" name="WebsiteData[address]" class="form-control"
                                            value="{{ $model->address }}" id="exampleInputEmail8"
                                            placeholder="Address Description">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail9">Longitude</label>
                                        <input type="text" name="WebsiteData[longitude]" class="form-control"
                                            value="{{ $model->longitude }}" id="exampleInputEmail9"
                                            placeholder="Longitude">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail10">Latitude</label>
                                        <input type="text" name="WebsiteData[latitude]" class="form-control"
                                            value="{{ $model->latitude }}" id="exampleInputEmail10"
                                            placeholder="Latitude">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-messages-tab">
                                    Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus
                                    volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce
                                    nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue
                                    ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur
                                    eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur,
                                    ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex
                                    vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus.
                                    Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-settings-tab">
                                    Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus
                                    turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis
                                    vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum
                                    pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget
                                    aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac
                                    habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <!-- /.card -->
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->

@endsection
