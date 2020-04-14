<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{!! asset('img/ntx.jpg') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="{{asset('css/carousel.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" href="C:\Users\PHEAKDEY\Documents\Project Website\bootstrap\font-awesome\css\all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/show.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
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
        /* novel */
        .flex{
                position: relative;
                background-color: purple;
                height: 60px;
                width: 60px;
            }
            div > a > img.ls{
                height: 220px;
                border: 2px solid purple;
            }
            .rotate-center:hover {
              -webkit-animation: rotate-center 0.6s ease-in-out both;
                      animation: rotate-center 0.6s ease-in-out both;
            }
            @-webkit-keyframes rotate-center {
              0% {
                -webkit-transform: rotate(0);
                        transform: rotate(0);
              }
              100% {
                -webkit-transform: rotate(360deg);
                        transform: rotate(360deg);
              }
            }
            @keyframes rotate-center {
              0% {
                -webkit-transform: rotate(0);
                        transform: rotate(0);
              }
              100% {
                -webkit-transform: rotate(360deg);
                        transform: rotate(360deg);
              }
            }
            /* sub_novel */
            .tab-content{
                width:105%;
                height:1000px;
                overflow-x: hidden;
                overflow-y:scroll;
              }
              #nav-tabContent{
                border: 2px solid black;
                padding:10px;
              }
              ::-webkit-scrollbar{width:20px;}
              ::-webkit-scrollbar-track{
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                border-radius: 10px;
              }
              ::-webkit-scrollbar-thumb{
                  border-radius: 10px;
                  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
              }
              .img-fluid{
                width: 92%;
                height: 500px;
              }
              .hver:hover , .far:hover{
                opacity: 0.8;
              }
              .scroll-top{
                  position: fixed;
                  bottom: 10px;
                  right: 2%;
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
        <div class="row"><br/>
          @yield('carousel')   
        </div>
        <div class="col-sm-12">
            <div class="row">
                @yield('novel')
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
              @yield('subnovel')
              @yield('video')
            </div>
        </div>
    </header> 
</body>
</html>
<script type="text/javascript">
    var video_player = document.getElementById("video_player"),
    links = video_player.getElementsByTagName('a');
    for (var i=0; i<links.length; i++) {
        links[i].onclick = handler;
    }
    function handler(e) {
        e.preventDefault();
        videotarget = this.getAttribute("href");
        filename = videotarget.substr(0, videotarget.lastIndexOf('.')) || videotarget;
        video = document.querySelector("#video_player video");
        // video.removeAttribute("controls");
        video.removeAttribute("poster");
        source = document.querySelectorAll("#video_player video source");
        source[0].src = filename + ".mp4";
        source[1].src = filename + ".webm";
        video.load();
        video.play();    
    }
</script>