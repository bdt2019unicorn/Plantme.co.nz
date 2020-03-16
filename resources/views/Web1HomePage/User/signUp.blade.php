@extends('layouts.home')

@include('Web1HomePage/User/page_head')

@section('content')

<div name="container" class="content sign-up-content m-auto">
    <div name="top" class="top">
        <img class="top-img-base top-img" src="img/Web1HomePage/User/top1.png" />
        <img class="top-img" src="img/Web1HomePage/User/top2.png" />
    </div>
    <div class="m-5 pb-4">
        <form id="frmSignUp" name="frmSignUp" method="post" action="signUp">
            <?php echo csrf_field(); ?>
            <div class="row m-1 ">
                <div class="pt-2 pb-2 pl-0 col-1"><img src="img/Web1HomePage/User/fullname.png"></div>
                <div class="p-1 ml-1 col"><input id="firstname" placeholder="First Name" name="firstname" type="name" pattern="[A-Za-z ]{2,20}" title="First name should consist of 2-20 alphabets." autofocus required onkeyup="reportValidity(this);"></div>
                <div class="p-1 col"><input id="lastname" placeholder="Last Name" name="lastname" type="name" pattern="[A-Za-z ]{2,20}" title="Last name should consist of 2-20 alphabets." required onkeyup="reportValidity(this);"></div>
            </div>
            <div class="row m-1">
                <div class="pt-2 pb-2 pl-0 col-1"><img src="img/Web1HomePage/User/suburb.png"></div>
                <div class="p-1 ml-1 col">
                    <select id="suburb_id" name="suburb_id" required>
                            <?php foreach($suburbs as $key=>$value): ?>
                                <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                </div>
            </div>
            <div class="row m-1">
                <div class="pt-2 pb-2 pl-0 col-1"><img src="img/Web1HomePage/User/dob.png"></div>
                <div class="p-1 ml-1 col"><input type="date" id="dob" name="dob" required onkeyup="reportValidity(this);"></div>
            </div>
            <div class="row m-1">
                <div class="pt-2 pb-2 pl-0 "></div>
            </div>
            <div class="row mt-3 m-1">
                <div class="pt-2 pb-2 pl-0 col-1"><img src="img/Web1HomePage/User/email.png"></div>
                <div class="p-1 ml-1 col"><input id="email" name="email" placeholder="E-mail" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required onkeyup="reportValidity(this);"></div>
            </div>
            <div class="row m-1">
                <div class="pt-2 pb-2 pl-0 col-1"><img src="img/Web1HomePage/User/password.png"></div>
                <div class="p-1 ml-1 col"><input type="password" id="password" name="password" placeholder="Password" title="Password should be 6-20 characters." pattern=".{6,20}" required onkeyup="reportValidity(this);"></div>
            </div>
            
            <div class="row m-1">
                <div class="p-2 pt-2 pb-2 pl-0 col"><input class="btn-submit" type="button" onclick="SubmitForm(this.form, '/signUp')" value="Sign Up"></div>
            </div>
        </form>
    </div>
</div>

@endsection

@section('page_script')
<script type="text/javascript" src="js/Web1HomePage/User/signUp.js"></script>

@endsection