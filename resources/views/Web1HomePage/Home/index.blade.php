@extends('layouts.home')

@section('content')
<div id="content" class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <img class="col-sm-6" src="/img/Web1HomePage/Home/slogan.png">
        </div>

        <div class="col-sm-12 text-center">
            <div>
                <img src="/img/Web1HomePage/Home/the_earth.png">
                <img id="right_cloud" src="/img/Web1HomePage/Home/right_cloud.png" style="position: absolute; top:0; right: 5%; width: 70%; height: 70%;">
                <img id="left_cloud" src="/img/Web1HomePage/Home/left_cloud.png" style="position: absolute; bottom:0; left: 5%; width: 70%; height: 70%;">
            </div>
            
        </div>

        <div class="col-sm-12">
            <br>
        </div>

        <div class="col-sm-12 text-center">
            <button type="button" class="col-sm-4 btn btn-success btn-rounded" data-location_href="/signUp" onclick="LoginAndSignUp(this)">Sign Up</button> 
        </div>

        <div class="col-sm-12">
            <br>
        </div>

        <div class="col-sm-12 text-center">
            <button type="button" style="color: green;" class="col-sm-4 btn btn-outline-success btn-rounded waves-effect" data-location_href="/signIn" onclick="LoginAndSignUp(this)">Login</button>
        </div>

    </div>
</div>
@endsection

@section('page_script')
<script src="/js/Web1HomePage/Home/index.js"></script>
@endsection

