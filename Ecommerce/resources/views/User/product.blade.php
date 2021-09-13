<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            @if(session()->has('message'))
            <div class="alert alert-success">
             <button type="button" class="close" data-dismiss="alert">X</button>
             {{session()->get('message')}}
            </div>
            @endif
            <h2>Latest Products</h2>
            <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            <form action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding:10px">
              @csrf
              <input type="search" name="search" placeholder="search" class="form-control"/>
              <input type="submit" value="search" class="btn btn-success"/>
             </form>
           </div>
          </div>

        

        @foreach ($data as $product)
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img height="300" width="150" src="productimage/{{$product->image}}" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>{{$product->title}}</h4></a>
              <h6>{{$product->price}}</h6>
              <p>{{$product->description}}</p>
              <form action="{{url('add_cart',$product->id)}}" method="POST">
                @csrf
                <input type="number" value="1" min="1" class="form-control" style="width: 100px" name="quantity"/>
                <br>
                <input class="btn btn-primary" type="submit" value="Add Cart"/>
              
              </form>
            </div>
          </div>
        </div>
        @endforeach
        
     
       
       
        
  <div class="best-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>About Sixteen Clothing</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <h4>Looking for the best products?</h4>
            <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
            <ul class="featured-list">
              <li><a href="#">Lorem ipsum dolor sit amet</a></li>
              <li><a href="#">Consectetur an adipisicing elit</a></li>
              <li><a href="#">It aquecorporis nulla aspernatur</a></li>
              <li><a href="#">Corporis, omnis doloremque</a></li>
              <li><a href="#">Non cum id reprehenderit</a></li>
            </ul>
            <a href="about.html" class="filled-button">Read More</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-image">
            <img src="assets/images/feature-image.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-md-8">
                <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
              </div>
              <div class="col-md-4">
                <a href="#" class="filled-button">Purchase Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  