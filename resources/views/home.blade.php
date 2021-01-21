{{-- @extends('layouts.app') --}}

 {{-- <!DOCTYPE html>
<html>
<head>
    <title>COURSES</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body> --}}
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        @include('layouts.Admin.meta')
        <!-- plugins:css -->
        @include('layouts.Admin.style')
      </head>
      <body>
        <div class="container-scroller">
          <!-- partial:partials/_navbar -->
          @include('layouts.Admin.navbar')
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar -->
            @include('layouts.Admin.sidebar')
            <!-- partial -->
            <div class="main-panel">
              <div class="content-wrapper">
                <div class="row" id="proBanner">
                <div class="container">
                    @yield('content')

               </div>
               <!--<div class="footer">
                //include('layouts.admin.footer')
            </div> -->
              <!-- partial -->
            </div>
            <!-- main-panel ends -->
          </div>
          <!-- page-body-wrapper ends -->
        </div>
    </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('layouts.Admin.script')
        @yield('js')
      </body>
    </html>
