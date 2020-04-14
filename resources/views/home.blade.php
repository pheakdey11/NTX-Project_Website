@extends('homeinclude')
@section('title','Home')

@section('search')
    <form>
        <div class="input-group" style = "margin-top:23%;width:30%;margin-left:35%; border:5px solid black;">
        <input type="text" class="form-control" placeholder="Search" name="search">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" class="s1" type="submit" style=" background-color: blue; padding: 5px;">
                <i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>
@endsection
@section('media')
    <center>
        <ul class="navbar-nav flex-row">
            <li class="nav-item"><a href="#" class="fa fa-facebook" title="Facebook" rel="nofollow" style="border:2px solid black; border-radius: 5px;"></span></a>
            <br><p style="font-size:12px;"><b>NTX Fantasy</b></p></li>&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item"><a href="#" class="fa fa-twitter" title="Twitter" rel="nofollow" style="border:2px solid black; border-radius: 5px; "></span></a>
            <br><p style="font-size:12px;"><b>ntx_media</b></p></li>&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item"><a href="#" class="fa fa-instagram" title="Instagram" rel="nofollow" style="border:2px solid black; border-radius: 5px; "></span></a>
            <br><p style="font-size:12px;"><b>NTX Fantasy</b></p></li>
        </ul><br>
    </center>
@endsection
@section('day')
    <center>
        <p><small><strong>FOR THIS MONTH</strong></small></p>
        <span class="box"></span>
    </center>
@endsection
@section('contact')
    <br>
    <p style="text-align: center;"><b>Contact : Phone Number</b><br>
    <b class="mr-5">???????? : Location</b></p>
@endsection