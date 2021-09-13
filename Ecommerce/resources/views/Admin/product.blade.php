

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
     
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding-Top: 100px">
                @if(session()->has('message'))
                <div class="alert alert-success">
                 <button type="button" class="close" data-dismiss="alert">X</button>
                 {{session()->get('message')}}
                </div>
                @endif
            <form action="{{url('add_product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding: 20px">
             <label>Product Title </label>
             <input type="text" name="title" placeholder="Add title" style="color: black" required=""/>
                </div>
    
                <div style="padding: 20px">
                    <label>Price </label>
                    <input type="text" name="price" placeholder="Add price" style="color: black" required=""/>
                       </div>
    
                    
    
    
                           <div style="padding: 20px">
                            <label>Description</label>
                            <input type="text" name="description" placeholder="Add Description" style="color: black" required=""/>
                               </div>

                               <div style="padding: 20px">
                                <label>Quantity</label>
                                <input type="text" name="quantity" placeholder="Add Quantity" style="color: black" required=""/>
                                   </div>
    
                               
                           <div style="padding: 20px">
                            <label>Image</label>
                            <input type="file" name="file"  required=""/>
                               </div>
    
                               <div style="padding: 20px">
                                
                                <input type="submit" class="btn btn-success" />
                                   </div>
            </form>
            </div>
            </div>
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