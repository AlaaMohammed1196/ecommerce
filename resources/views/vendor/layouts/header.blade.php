<!DOCTYPE html>
<html lang="en">
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>لوحه التحكم</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url('adminDesing')}}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{url('adminDesing')}}/assets/vendors/css/vendor.bundle.base.css">

      <link rel="stylesheet" href="{{url('adminDesing')}}/assets/vendors/datatables.net/dataTables.bootstrap4.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{url('adminDesing')}}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{url('adminDesing')}}/assets/images/favicon.png" />
  <style type="text/css">
    div.dataTables_wrapper div.dataTables_length select {
        width:50px;
      }
  </style>

  </head>
  <body style="direction: rtl;text-align: right;">
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
         
          <a class="navbar-brand brand-logo" href="#"><img src="{{url('frontend')}}/images/logo.png" style="height:65px;" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="#"><img src="{{url('adminDesing')}}/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
               
                </div>
              
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                 
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">مرحبا :{{auth()->guard('vendor')->user()->username}}</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{url('vendor/Logout')}}">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> تسجيل الخروج </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
           
           
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="{{url('vendor/Logout')}}">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>

