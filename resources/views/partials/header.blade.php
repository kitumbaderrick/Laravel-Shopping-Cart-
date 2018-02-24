<nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
  <a class="navbar-brand" href="{{ route('product.index') }}">Market  Green Joint</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
 
      
      
     
    </ul>
    <!--class="form-inline my-2 my-lg-1"-->
    <div>
    <ul class="navbar-nav mr-auto">
    <li class="nav-item" style='margin-top:10px;'><i class="fas fa-cart-arrow-down"></i>

    <li class="nav-item">

    <a class="nav-link" href="#">Shopping Cart</a>
     
    </li>


    <li class="nav-item" style='margin-top:10px; '>

    <li class="nav-item">

    <a class="nav-link  badge badge-dark " href="#"  style=' margin-left:0px;margin-top:10px'>{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</a>
     
    </li>



    <li class="nav-item dropdown">
        
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
          <i class="fas fa-user"></i>   User Management
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if(Auth::check())
          <a class="dropdown-item" href="{{ route('user.profile') }}">UserProfile</a>
         <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
           @else
           <a class="dropdown-item" href="{{ route('user.signup') }}">Sign Up</a>
           <a class="dropdown-item" href="{{ route('user.signin') }}">Sign In</a>
       
          @endif 

       
          
        </div>
      </li>

  
      
    </ul>
  </li>
    </ul>

    
    </div>
   
  </div>
</nav>