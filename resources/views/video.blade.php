@extends('headerinclude')
@section('title','Video')

<style>
    #video_player {
        display: table;
        line-height: 0;
        font-size: 0;
        background: #000;
    }
    #video_player video,
        #video_player figcaption {
            vertical-align: top;                    
    }
    #video_player figcaption {
        width: 25%;
    }
    #video_player figcaption a {
        display: block;
        opacity: .8;
        transition: 1s opacity;
    }
    #video_player figcaption a img,
        figure video {
            width: 100%;
            height: auto;
            line-height: initial;
    }
    figcaption a img {
            margin-top: -2px;
    }
    #video_player figcaption a:hover {
        opacity: 1;
    }
    @media (max-width: 700px) {
        #video_player video,
            #video_player figcaption {
                display: table-row;
            }
    #video_player figcaption a {
        display: inline-block;
        width: 33.33%;
    }
    }
    figcaption{
        height:555px; 
        overflow:hidden; 
        overflow-y:scroll;
    }
</style>
@section('video')
    <div class="col-md-12">
        <figure id="video_player">
            <div class="row">
            <div class="col-md-9">
                <video controls loop autoplay width="700px">
                    <source src="../video/video1.mp4" type="video/mp4">
                    <source src="../video/video1.webm" type="video/webm">
                    <source src="../video/video1.ogg" type="video/ogg">
                </video>
            </div>
            <figcaption>
                <a href="../video/video1.mp4"><img src="../img/s1.png" alt="Nambia Timelapse 1"></a>
                <a href="../video/video2.mp4"><img src="../img/s2.png" alt="Nambia Timelapse 2"></a>
                <a href="boyfriend.mp4"><img src="../img/spider.png" alt="Nambia Timelapse 3"></a>
                <a href="beast.mp4"><img src="../img/Screenshot (36).png" alt="Nambia Timelapse 4"></a>
                <a href="infinity.mp4"><img src="../img/spider.png" alt="Nambia Timelapse 5"></a>
            </figcaption>
            </div>
        </figure>
    </div>
@endsection