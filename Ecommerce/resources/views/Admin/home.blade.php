

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('Admin.Css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('Admin.sidebar')
      <!-- partial -->
     
        <!-- partial:partials/_navbar.html -->
        @include('Admin.navbar')
      
        <!-- partial -->
        @include('Admin.Body')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('Admin.Script')
    <!-- End custom js for this page -->
  </body>
</html>