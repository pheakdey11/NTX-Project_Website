@extends('headerinclude')
@section('title','Game')

@section('carousel')
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox" style="border: 3px solid black; background: #696969;">
            <div class="carousel-item active" data-slide-number="0">
            <img src="../img/war.jpg" class="d-block img-fluid" style="height: 600px; width: 100%; margin:0px;">
            <div class="carousel-caption" style="position: absolute; top: 60%;">
                    <span><button type="button" class="Download" style="padding: 15px 40px; border: 3px solid white ; font-weight: bold; color: white;">Download</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="SlidePostE3__buttons-btn --alternate" style="padding: 15px 50px; border: 3px solid white ; font-weight: bold; color: white;">Play</button></span>
            </div>
            </div>
            <div class="carousel-item" data-slide-number="1" style="">
            <img src="../img/ga.jpg" class="d-block img-fluid" style="height: 600px; width: 100%; margin:0px;">
            <div class="carousel-caption" style="position: absolute; top: 60%;">
                <span><button type="button" class="Download" style="padding: 15px 40px; border: 3px solid white ; font-weight: bold; color: white;">Download</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="SlidePostE3__buttons-btn --alternate" style="padding: 15px 50px; border: 3px solid white ; font-weight: bold; color: white;">Play</button></span>
            </div>
            </div>
            <div class="carousel-item" data-slide-number="2">
            <img src="../img/wu.jpg" class="d-block img-fluid" style="height: 600px; width: 100%; margin:0px;">
            <div class="carousel-caption" style="position: absolute; top: 60%;">
                <span><button type="button" class="Download" style="padding: 15px 40px; border: 3px solid white ; font-weight: bold; color: white;">Download</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="SlidePostE3__buttons-btn --alternate" style="padding: 15px 50px; border: 3px solid white ; font-weight: bold; color: white;">Play</button></span>
            </div>
            </div>
            <div class="carousel-item" data-slide-number="3">
            <img src="../img/lb.jpg" class="d-block img-fluid" style="height: 600px; width: 100%; margin:0px;">
            <div class="carousel-caption" style="position: absolute; top: 60%;">
                <span><button type="button" class="Download" style="padding: 15px 40px; border: 3px solid white ; font-weight: bold; color: white;">Download</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="SlidePostE3__buttons-btn --alternate" style="padding: 15px 50px; border: 3px solid white ; font-weight: bold; color: white;">Play</button></span>
            </div>
            </div>
        </div>

        <!--preview slide-->
        <a class="carousel-control-prev" style="margin-bottom: 15%;" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        
        <!--nextslide-->
        <a class="carousel-control-next" style="margin-bottom: 15%;" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        <!--thumbnail-->
        <ul class="carousel-indicators">
            <li class="item active">
                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#carouselExampleControls">
                    <img src="../img/war1.jpg" class="img-fluids" style="height: 73%; border: 3px solid black;">
                </a>
            </li>
            <li class="item">
                <a id="carousel-selector-1" data-slide-to="1" data-target="#carouselExampleControls">
                    <img src="../img/ga1.jpg" class="img-fluids" style="height: 73%; border: 3px solid black;">
                </a>
            </li>
            <li class="item">
                <a id="carousel-selector-2" data-slide-to="2" data-target="#carouselExampleControls">
                    <img src="../img/wu1.jpg" class="img-fluids" style="height: 73%; border: 3px solid black;">
                </a>
            </li>
            <li class="item">
                <a id="carousel-selector-3" class="selected" data-slide-to="3" data-target="#carouselExampleControls">
                    <img src="../img/lb1.jpg" class="img-fluids" style="height: 73%; border: 3px solid black;">
                </a>
            </li>
        </ul>
        </div>
@endsection

