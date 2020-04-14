<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{!! asset('img/ntx.jpg') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="{{asset('css/ntx123.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" href="C:\Users\PHEAKDEY\Documents\Project Website\bootstrap\font-awesome\css\all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Novel -->
    <script>
          $(document).ready(function(){
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) 
                {
                  $('.scroll-top').fadeIn();
                } 
                else 
                {
                  $('.scroll-top').fadeOut();
                }
              });
            $(".scroll-top").click(function() {
                $("html, body").animate({ 
                    scrollTop: 0 
                }, "slow",);
                return false;
            });
          });
    </script>
    <style>
        #headersection{
            background-image: url("{{ asset('img/back.png') }}");
            margin: 0px;
            width: 100%;
            height: auto;
            background-size: cover;
            height: 155px;
            background-attachment: fixed;
            margin-top: -25px;
        }
        .backsearch{
            margin-top: -40px;
            background: url("{{ asset('img/search2.png') }}");
            background-repeat: no-repeat;
            background-size: 100%;
            min-height: 700px; 
        }
    </style>
</head>
<body>
    @section('header')
    <header id="headersection">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12" >
              <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{url('/')}}"><img src = "{{ asset('img\ntx.jpg') }}" style="border: 5px solid white" alt="ntx"> 
                      <h3 style="margin-left:25px;">NTX Fantasy</h3>
                      <p style="color:red; font-size:18px; line-height:20px; margin-left:10px;">Team Work Hard All Days</p>
                    </a>
                  <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item icon">
                          <a class="nav-item nav-link" href="#" style="color:white;">INFORMATION <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item icon">
                          <a class="nav-item nav-link" href="{{url('ntx/game')}}" style="color:white;">GAME</a>
                        </li>
                        <li class="nav-item icon">
                          <a class="nav-item nav-link" href="{{url('ntx/novel')}}" style="color:white;">NOVEL</a>
                        </li>
                        <li class="nav-item icon">
                          <a class="nav-item nav-link" href="{{url('ntx/video')}}" style="color:white;">VIDEO</a>
                        </li>
                        <li class="nav-item icon">
                            <a class="nav-item nav-link" href="#" style="color:white;">SHOP</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
            </div>
          </div>
        </div>
        @show 
        <!-- home page --> 
        <div class="backsearch">
            <div class="row">
                <div class="col-sm-12">
                    @yield('search')      
                </div>
            </div>   
            <div class="row" style="margin-top:13%">
                <div class="col-sm-3">
                    @yield('media')
                </div>
                <div class="col-sm-6">
                    @yield('day')
                </div> 
                <div class="col-sm-3">
                    @yield('contact')
                </div>
            </div>
        </div>
    </header>       
</body>
</html>