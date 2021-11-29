<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>RR-HH Colpa</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('template\vendors\mdi\css\materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('template\vendors\simple-line-icons\css\simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('template\vendors\flag-icon-css\css\flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('template\vendors\css\vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('template\vendors\font-awesome\css\font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('template\vendors\jquery-bar-rating\fontawesome-stars.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('template\css\style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('template\images\favicon.png')}}">
    <link rel="stylesheet" href="{{asset('template\vendors\font-awesome\css\font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('template\vendors\datatables.net-bs4\dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
    <style>
        .nav-link-hover:hover{
            border-left: #03a9f3 solid 4px;
        }
    </style>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center bg-dark navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="{{route('inicio')}}"><img src="{{asset('template\images\logo.svg')}}" alt="logo"></a>
            <a class="navbar-brand brand-logo-mini" href="{{route('inicio')}}"><img src="{{asset('template\images\logo-mini.svg')}}" alt="logo"></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center bg-primary">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item dropdown d-none d-lg-flex">
                    <a class="nav-link dropdown-toggle nav-btn" id="actionDropdown" href="#" data-toggle="dropdown">
                        <span class="btn">+ Create new</span>
                    </a>
                    <div class="dropdown-menu navbar-dropdown dropdown-left" aria-labelledby="actionDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="icon-user text-primary"></i>
                            User Account
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <i class="icon-user-following text-warning"></i>
                            Admin User
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <i class="icon-docs text-success"></i>
                            Sales report
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-none d-lg-flex">
                    <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
                        <i class="flag-icon flag-icon-gb"></i>
                        English
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                        <a class="dropdown-item font-weight-medium" href="#">
                            <i class="flag-icon flag-icon-fr"></i>
                            French
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font-weight-medium" href="#">
                            <i class="flag-icon flag-icon-es"></i>
                            Espanol
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font-weight-medium" href="#">
                            <i class="flag-icon flag-icon-lt"></i>
                            Latin
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font-weight-medium" href="#">
                            <i class="flag-icon flag-icon-ae"></i>
                            Arabic
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="icon-bell mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <a class="dropdown-item">
                            <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                            </p>
                            <span class="badge badge-pill badge-warning float-right">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="icon-info mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-medium">Application Error</h6>
                                <p class="font-weight-light small-text">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="icon-speech mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-medium">Settings</h6>
                                <p class="font-weight-light small-text">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="icon-envelope mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-medium">New user registration</h6>
                                <p class="font-weight-light small-text">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-envelope mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                        <div class="dropdown-item">
                            <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                            </p>
                            <span class="badge badge-info badge-pill float-right">View all</span>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="images\faces\face4.jpeg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="images\faces\face2.jpeg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="images\faces\face3.jpeg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item nav-settings d-none d-lg-block">
                    <a class="nav-link" href="#">
                        <i class="icon-grid"></i>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
               @csrf
                <button type="submit" class="btn "><i class="fa fa-power-off fa-2x"></i></button>
            </form>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="row row-offcanvas row-offcanvas-right">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close mdi mdi-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles primary"></div>
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles pink"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close mdi mdi-close"></i>
                <ul class="nav nav-tabs" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked="">
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked="">
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="events py-4 border-bottom px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                            <p class="text-gray mb-0">build a js based app</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="images\faces\face1.jpeg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images\faces\face2.jpeg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images\faces\face3.jpeg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images\faces\face4.jpeg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images\faces\face5.jpeg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images\faces\face6.jpeg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link-hover" href="{{route('inicio')}}">
                            <i class="icon-rocket menu-icon text-primary"></i>
                            <span class="menu-title">DASHBOARD</span>
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-link-hover" data-toggle="collapse" href="#sidebar-empleados" aria-expanded="false" aria-controls="sidebar-layouts">
                            <i class="icon-people menu-icon text-primary"></i>
                            <span class="menu-title">EMPLEADOS</span>
                        </a>
                        <div class="collapse" id="sidebar-empleados">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{asset('empleado')}}">EMPLEADOS</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-link-hover" data-toggle="collapse" href="#sidebar-areas" aria-expanded="false" aria-controls="sidebar-layouts">
                            <i class="icon-directions menu-icon text-primary"></i>
                            <span class="menu-title">ÁREAS</span>
                        </a>
                        <div class="collapse" id="sidebar-areas">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('areas')}}">ÁREAS</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-link-hover" data-toggle="collapse" href="#sidebar-convocatorias" aria-expanded="false" aria-controls="sidebar-layouts">
                            <i class="icon-speech menu-icon text-primary"></i>
                            <span class="menu-title">CONVOCATORIAS</span>
                        </a>
                        <div class="collapse" id="sidebar-convocatorias">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('postulante')}}">POSTULANTES</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('vacante')}}">VACANTES</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-link-hover" data-toggle="collapse" href="#sidebar-nomina" aria-expanded="false" aria-controls="sidebar-layouts">
                            <i class="icon-folder text-primary menu-icon"></i>
                            <span class="menu-title">ASISTENCIA</span>
                        </a>
                        <div class="collapse" id="sidebar-nomina">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('asistencia')}}">ASISTENCIA</a></li>
                            </ul>
                        </div>
                        <div class="collapse" id="sidebar-nomina">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('reporte')}}">REPORTE</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-link-hover" data-toggle="collapse" href="#sidebar-funciones" aria-expanded="false" aria-controls="sidebar-layouts">
                            <i class="icon-speech menu-icon text-primary"></i>
                            <span class="menu-title">FUNCIONES</span>
                        </a>
                        <div class="collapse" id="sidebar-funciones">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('funcion')}}">FUNCIONES</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-link-hover" data-toggle="collapse" href="#sidebar-venta-web" aria-expanded="false" aria-controls="sidebar-layouts">
                            <i class="icon-speech menu-icon text-primary"></i>
                            <span class="menu-title">VENTA WEB</span>
                        </a>
                        <div class="collapse" id="sidebar-venta-web">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('platos')}}">PLATOS</a></li>
                            </ul>
                        </div>
                        <div class="collapse" id="sidebar-venta-web">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('pedidos')}}">PEDIDOS</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-link-hover" data-toggle="collapse" href="#sidebar-empleados" aria-expanded="false" aria-controls="sidebar-layouts">
                            <i class="icon-people menu-icon text-primary"></i>
                            <span class="menu-title">CLIENTES</span>
                        </a>
                        <div class="collapse" id="sidebar-empleados">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{asset('cliente')}}">CLIENTES</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-link-hover" data-toggle="collapse" href="#sidebar-reporte" aria-expanded="false" aria-controls="sidebar-layouts">
                            <i class="icon-people menu-icon text-primary"></i>
                            <span class="menu-title">REPORTES</span>
                        </a>
                        <div class="collapse" id="sidebar-reporte">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{asset('reporte-platos')}}">REPORTE PLATOS</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="content-wrapper" style="background-color:#C2EBF0">
               <div class="card">
                   <div class="card-body">
                      @yield('contenido')
                   </div>
               </div>
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2017 <a href="#">UrbanUI</a>. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{asset('template\vendors\js\vendor.bundle.base.js')}}"></script>
<!-- endinject -->

<!-- Plugin js for this page-->
<script src="{{asset('template\vendors\jquery-bar-rating\jquery.barrating.min.js')}}"></script>
<script src="{{asset('template\vendors\chart.js\Chart.min.js')}}"></script>
<script src="{{asset('template\vendors\raphael\raphael.min.js')}}"></script>
<script src="{{asset('template\vendors\morris.js\morris.min.js')}}"></script>
<script src="{{asset('template\vendors\jquery-sparkline\jquery.sparkline.min.js')}}"></script>

<script src="{{asset('template\vendors\flot\jquery.flot.js')}}"></script>
<script src="{{asset('template\vendors\flot\jquery.flot.resize.js')}}"></script>
<script src="{{asset('template\vendors\flot\jquery.flot.categories.js')}}"></script>
<script src="{{asset('template\vendors\flot\jquery.flot.fillbetween.js')}}"></script>
<script src="{{asset('template\vendors\flot\jquery.flot.stack.js')}}"></script>
<script src="{{asset('template\vendors\flot\jquery.flot.pie.js')}}"></script>

<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('template\js\off-canvas.js')}}"></script>
<script src="{{asset('template\js\hoverable-collapse.js')}}"></script>
<script src="{{asset('template\js\misc.js')}}"></script>
<script src="{{asset('template\js\settings.js')}}"></script>
<script src="{{asset('template\js\todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('template\js\dashboard.js')}}"></script>
<!-- End custom js for this page-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="{{asset('template\vendors\datatables.net\jquery.dataTables.js')}}"></script>
<script src="{{asset('template\vendors\datatables.net-bs4\dataTables.bootstrap4.js')}}"></script>

<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('scripts')
</body>
</html>
