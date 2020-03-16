@extends('layouts.home')

@include('Web1HomePage/User/page_head')

@section('content')

<div name="container" class="content sign-up-content m-auto">
    <div name="top" class="top">
        <img class="top-img" src="img/Web1HomePage/User/sign-in-top-img.png" />
    </div>
    <div class="m-5 pb-4">
        <form id="frmSignIn" name="frmSignIn" method="post" action="/signIn">
            <?php echo csrf_field(); ?>
            <div class="row mt-3 m-1">
                <div class="pt-2 pb-2 pl-0 col-1"><img src="img/Web1HomePage/User/email.png"></div>
                <div class="p-1 ml-1 col"><input id="email" name="email" placeholder="E-mail" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required onkeyup="reportValidity(this);"></div>
            </div>
            <div class="row m-1">
                <div class="pt-2 pb-2 pl-0 col-1"><img src="img/Web1HomePage/User/password.png"></div>
                <div class="p-1 ml-1 col"><input type="password" id="password" name="password" placeholder="Password" title="Password should be 6-20 characters." pattern=".{6,20}" required onkeyup="reportValidity(this);"></div>
            </div>
            
            <div class="row m-1">
                <div class="p-2 pt-2 pb-2 pl-0 col"><input class="btn-submit" type="button" onclick="SubmitForm(this.form, '/signIn')" value="Sign In"></div>
            </div>
        </form>
    </div>
</div>
@endsection
