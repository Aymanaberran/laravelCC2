<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
     
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      
      <nav class="navbar navbar-expand-lg" style="background-color: rgb(113, 210, 149)">
        <div class="container">
          <ul class="navbar-nav ml-auto">
              <li style="margin-left: 100px">
                <div style="margin-right: 200px">
                  <form action="{{url('search')}}" method="get" class="form-inline" >
                    @csrf
                    <input class="form-control" type="search" name="search" id="" placeholder="search">
                    <input type="submit" value="Search" class="btn btn-success">  
                  </form>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Our Products</a>
              </li>
              <li class="nav-item">  
                <a class="nav-link" href="{{url('showcart')}}">
                <i class="fas fa-shopping-cart"></i>
                Cart
                </a>
              </li>
            
              <li class="nav-item"> 
            
                @if (Route::has('login'))
                
                    @auth

                      
                    <x-app-layout>
  
                    </x-app-layout>
  

                      
                @else
                       <li> <a class="nav-link" href="{{ route('login') }}" >Log in</a></li>

                        @if (Route::has('register'))
                            <li><a class="nav-link" href="{{ route('register') }}" >Register</a></li> 
                        @endif
                    @endauth
                @endif  
              </li> 
          </ul>
        </div>
      </nav>

      
      @if(session()->has('message'))
          <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
          </div>
      @endif

    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      
    <!-- Banner Ends Here -->

   
    @include('user.product')

    


    

    
    


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src=" assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
