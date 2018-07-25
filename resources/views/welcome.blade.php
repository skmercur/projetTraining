<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gamerz') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</head>
<body>
<div id="app">

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<div class="container">
      <a class="navbar-brand" href="#">TeamDz</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


              <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                  
                            <li class="nav-item dropdown">
                            
                            @foreach($users to $user)
                            <img src="{{ 'uploads/'.user()->imagpath}}" alt="">
                            @endforeach
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name}} <span class="caret"></span>
                                </a>
                               
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                           
                        @endguest
                    </ul>


</div>
     
       
      
    </nav>

    <!-- /////////////////////////////////////// -->
    <br>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('assets/img/pexels-photo-1068523.jpg')}}" alt="First slide"  width="800" height="600">
      <div class="container">
              <div class="carousel-caption text-left">
                <h1>Actu 1</h1>
                <p>Resumé de contenu ......</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Reed More</a></p>
              </div>
            </div>
    
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('assets/img/pexels-photo-169573.jpg')}}" alt="Second slide"  width="800" height="600" >
      <div class="carousel-caption text-right">
                <h1>Actu 2</h1>
                <p>Resumé de contenu ......</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Reed More</a></p>
              </div>
            </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('assets/img/pexels-photo-1068523.jpg')}}" alt="Third slide">
      <div class="container">
              <div class="carousel-caption text-left">
                <h1>Actu 3</h1>
                <p>Resumé de contenu ......</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Reed More</a></p>
              </div>
            </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
 
<!--////////////////////////////////////////////////////////-->

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
      <img class="rounded-circle" src="{{ asset('assets/img/Hichem.jpg') }}" alt="Generic placeholder image" width="140" height="140">
      <h2>Hichem Merniz</h2>
      <p>.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="rounded-circle" src="{{ asset('assets/img/Sofiane.jpg') }}" width="140" height="140">
      <h2>Khodor Sofiane</h2>
      <p>.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="rounded-circle" src="{{ asset('assets/img/Walid.jpg') }}" alt="Generic placeholder image" width="140" height="140">
      <h2>Msili Walid</h2>
      <p>.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto"  alt="500x500" style="width: 500px; height: 500px;" src="{{ asset('assets/img/pexels-photo-356056.jpg') }}" data-holder-rendered="true">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_164c7ae3cf9%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_164c7ae3cf9%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22183.5%22%20y%3D%22259.3%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_164c7ae3d01%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_164c7ae3d01%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22183.5%22%20y%3D%22259.3%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
    </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

</div><!-- /.container -->


<!-- FOOTER -->
<footer class="container">
  <p class="float-right"><a href="#">Back to top</a></p>
  <p>© 2017-2018 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
</footer>
</main>

    <link rel="stylesheet" href="{{asset('assets/js/bootstrap.min.js')}}">
    <link rel="stylesheet" href="{{asset('assets/js/jquery.js')}}">
    </body>
</html>
