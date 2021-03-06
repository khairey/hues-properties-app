<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hues Proprties | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('');}}plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('');}}plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('');}}plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('');}}plugins/jqvmap/jqvmap.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('');}}plugins/select2/css/select2.min.css">
    <!-- Duallist -->
    <link rel="stylesheet" href="{{asset('');}}plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('');}}dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('');}}plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('');}}plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('');}}plugins/summernote/summernote-bs4.min.css">
    <script src="{{asset('');}}plugins/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('') }}images/animated (2).svg" alt="HuesProperties"
                height="100" width="100">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ @url('/admin') }}" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="/dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="/dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="/dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('/');}}/admin" class="brand-link">
                <img src="{{ asset('') }}images/animated (2).svg" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="background-color: #fff;opacity: .8">
                <span class="brand-text font-weight-light">Dashboard</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ url('/admin') }}" class="nav-link @if (Route::getCurrentRoute()->getActionMethod() == 'index') active @endif">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/');}}/admin/listdevelopers" class="nav-link  @if (Route::getCurrentRoute()->getActionMethod() == 'listdevelopers') active @endif">
                                <i class="nav-icon fas fa-tools"></i>
                                <p>
                                    Developers
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/');}}/admin/listcategory" class="nav-link @if (Route::getCurrentRoute()->getActionMethod() == 'listcategory') active @endif">
                                <i class="nav-icon fas fa-list-ul"></i>
                                <p>
                                    Category
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/');}}/admin/listproject" class="nav-link @if (Route::getCurrentRoute()->getActionMethod() == 'listproject') active @endif">
                                <i class="nav-icon fas fa-building"></i>
                                <p>
                                    Projects
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/');}}/admin/listunit" class="nav-link @if (Route::getCurrentRoute()->getActionMethod() == 'listunit') active @endif">
                                <i class="nav-icon fas fa-building"></i>
                                <p>
                                    Units
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/');}}/admin/listdistrict" class="nav-link @if (Route::getCurrentRoute()->getActionMethod() == 'listdistrict') active @endif">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    District
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/');}}/admin/listpropertytype" class="nav-link @if (Route::getCurrentRoute()->getActionMethod() == 'listpropertytype') active @endif">
                                <i class="nav-icon fas fa-warehouse"></i>
                                <p>
                                    Property Type
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/');}}/admin/listfacilities" class="nav-link @if (Route::getCurrentRoute()->getActionMethod() == 'listfacilities') active @endif">
                                <i class="nav-icon fas fa-warehouse"></i>
                                <p>
                                    Facilities
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/');}}/admin/settings" class="nav-link @if (Route::getCurrentRoute()->getActionMethod() == 'settings') active @endif">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Settings
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->




            @yield('content')

        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021.</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('');}}plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('');}}plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('');}}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{asset('');}}plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{asset('');}}plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{asset('');}}plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{asset('');}}plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('');}}plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{asset('');}}plugins/moment/moment.min.js"></script>
    <script src="{{asset('');}}plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('');}}plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="{{asset('');}}plugins/summernote/summernote-bs4.min.js"></script>
    <script src="{{asset('');}}plugins/summernote/lang/summernote-ar-AR.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('');}}plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- Select2 -->
    <script src="{{asset('');}}plugins/select2/js/select2.min.js"></script>
    <!-- Bootstrap Duallistbox -->
    <script src="{{asset('');}}plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('');}}dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('');}}dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('');}}dist/js/pages/dashboard.js"></script>
    <script>
        $(document).ready(function() {
            var demo1 = $('.duallistbox_demo').bootstrapDualListbox();
            $(".select2").select2();
            $('.summernote').summernote({
                lang: "ar-AR",
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'hr']],
                    ['view', ['fullscreen', 'codeview']],
                    ['help', ['help']]
                ],
                codeviewFilter: true,
                minHeight: 200, // set minimum height of editor
            });
        });
    </script>
    <script>
        var $modal = $('#modal');
        var image = document.getElementById('image');
        var cropper;
        $("body").on("change", ".image", function(e) {
            var files = e.target.files;
            var done = function(url) {
                image.src = url;
                $modal.modal('show');
            };
            var reader;
            var file;
            var url;
            if (files && files.length > 0) {
                file = files[0];
                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function(e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });
        $modal.on('shown.bs.modal', function() {
            cropper = new Cropper(image, {
                aspectRatio: 1,
                viewMode: 1,
                preview: '.preview'
            });
        }).on('hidden.bs.modal', function() {
            cropper.destroy();
            cropper = null;
        });
        $("#crop").click(function(button) {
            canvas = cropper.getCroppedCanvas({
                width: 500,
                height: 500,
            });
            canvas.toBlob(function(blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function() {
                    var base64data = reader.result;
                    console.log(button.currentTarget);
                    var target = $(button.currentTarget).data("targe");
                    console.log($("#"+target));
                    $("#"+target)[0].value = base64data;
                    $("#"+target).parent().parent().parent().append("<img class='mt-2' src='"+base64data+"'>");
                    $modal.modal('hide');
                }
            });
        })
    </script>
</body>

</html>
