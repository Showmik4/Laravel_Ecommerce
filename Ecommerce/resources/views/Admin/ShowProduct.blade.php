

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
      @include('Admin.navbar')

      @if(session()->has('message'))
      <div class="alert alert-success">
       <button type="button" class="close" data-dismiss="alert">X</button>
       {{session()->get('message')}}
      </div>
      @endif
        <!-- partial:partials/_navbar.html -->
      
        <div class="container-fluid page-body-wrapper">
          
         
            <div align="center" style="padding-top:100px">
               
            <table>
            <tr style="background-color: gray">
            
            <th style="padding: 20px ; color:white ; font-size:15px">Title</th>
          
            <th style="padding: 20px ; color:white ; font-size:15px">Price</th>
            <th style="padding: 20px ; color:white ; font-size:15px">Description</th>
            <th style="padding: 20px ; color:white ; font-size:15px">Quantity </th>
            <th style="padding: 20px ; color:white ; font-size:15px">Image</th>
          
          
            <th style="padding: 20px ; color:white ; font-size:15px">Update</th>
            <th style="padding: 20px ; color:white ; font-size:15px">Delete</th>
            
            
            
            </tr>
            @foreach ($data as $product)
            <tr style="background-color: black">
                
                <td style="padding: 20px ; color:white ; font-size:15px">{{$product->title}}</td>
                <td style="padding: 20px ; color:white ; font-size:15px">{{$product->price}}</td>
                <td style="padding: 20px ; color:white ; font-size:15px">{{$product->description}}</td>
                <td style="padding: 20px ; color:white ; font-size:15px">{{$product->quantity}}</td>
                <td ><img height="100" width="100" src="productimage/{{$product->image}}"/></td>
               
           

                <td><a class="btn btn-success" href="{{url('update_doctor',$product->id)}}">Update</a> </td>


                
                <td><a class="btn btn-danger" href="{{url('delete_product',$product->id)}}">Delete</a> </td>
            
            </tr>
            
            @endforeach
            
            
            
            
            </table>
            
            
            </div>  



        </div>
      
        <!-- partial -->
      
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
   @include('Admin.script')
    <!-- End custom js for this page -->
  </body>
</html>