
 

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>


  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/profileapp.js') }}" defer></script>
    <script src="{{ asset('js/jquery2.min.js') }}" ></script>
    <script src="{{ asset('js/bootstrap2.min.js') }}"></script>


<link rel="stylesheet" href="{{ asset('adminlte/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/AdminLTE.min.css')}}">
 
     <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fullcalendar/fullcalendar.min.css')}}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fullcalendar/fullcalendar.print.css')}}" media="print">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap3.3.7/css/bootstrap.min.css') }}">


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Emperor City Poker PTD</title>

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 50px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <!--     <a href="{{ route('login') }}">Login</a> -->
<!-- 
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif


            <div class="content">




                <div class="title m-b-md responsive">
                    Emperor City Poker PTD
                </div>

<!-- 
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
 
  <ol class="carousel-indicators">
   @foreach( $data as $person )
      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
   @endforeach
  </ol>
 
  <div class="carousel-inner" role="listbox">
    @foreach( $data as $person )
       <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
           <img class="d-block img-fluid" src="data:image;base64,{{ $person->imagefile }}" alt="{{ $person->imagename }}">
              <div class="carousel-caption d-none d-md-block">
<!--                  <h3>{{ $person->imagefile }}</h3>
                 <p>{{ $person->imagename }}</p> -->
  <!--             </div>
       </div> -->
 <!--    @endforeach -->
<!--   </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
 
<br>


                <div class="links">




  <!-- Small boxes (Stat box) -->
          <div class="row">
             

             <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-gray">
                <div class="inner">
                  <p style="font-size:25px;">Administrator</p>
                </div>
                <a href="{{ url('/admin') }}" class="small-box-footer">Sign In <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
              </div>
            </div><!-- ./col -->

             <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-gray">
                <div class="inner">
                  <p style="font-size:25px;">View PTD</p>
                </div>
                <a href="{{ url('/home') }}" class="small-box-footer">Sign In <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
              </div>
            </div><!-- ./col -->


          </div><!-- /.row -->


                <!--     <a href="https://nova.laravel.com">Photos</a> -->
                      <!--   <a href="{{ route('login') }}">Manpower Database</a>-->
            <!-- 
                    <a href="#">About</a>
                    <a href="#">Contact</a> -->
                   <!--  <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> -->
                </div>
            </div>
        </div>
    </body>
</html>


