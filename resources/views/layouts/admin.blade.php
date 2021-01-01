<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SE - TRAVEL Admin</title>
    @include('includes.admin.style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('includes.admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('includes.admin.navbar')
        <!-- partial -->
        <div class="main-panel">
        @yield('content')
        @include('includes.admin.footer')
        </div>
        <!-- main-panel ends -->
        
        
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
     @include('includes.admin.script')
  </body>
</html>