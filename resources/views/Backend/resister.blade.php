@extends('Backend.component.parts')


@section('contents')


<section class="main_content dashboard_part">

<div class="container-fluid g-0">
<div class="row">
<div class="col-lg-12 p-0">
<div class="header_iner d-flex justify-content-between align-items-center">
<div class="sidebar_icon d-lg-none">
<i class="ti-menu"></i>
</div>
<div class="serach_field-area">
<div class="search_inner">
<form action="#">
<div class="search_field">
<input type="text" placeholder="Search here...">
</div>
<button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
</form>
</div>
</div>
<div class="header_right d-flex justify-content-between align-items-center">
<div class="header_notification_warp d-flex align-items-center">
<li>
<a href="#"> <img src="img/icon/bell.svg" alt=""> </a>
</li>
<li>
<a href="#"> <img src="img/icon/msg.svg" alt=""> </a>
</li>
</div>
<div class="profile_info">
<img src="img/client_img.png" alt="#">
<div class="profile_info_iner">
 <p>Welcome Admin!</p>
<h5>Travor James</h5>
<div class="profile_info_details">
<a href="#">My Profile <i class="ti-user"></i></a>
<a href="#">Settings <i class="ti-settings"></i></a>
<a href="#">Log Out <i class="ti-shift-left"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="main_content_iner ">
<div class="container-fluid plr_30 body_white_bg pt_30">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="row justify-content-center">
<div class="col-lg-6">

<div class="modal-content cs_modal">
<div class="modal-header">
<h5 class="modal-title">Resister</h5>
</div>
<div class="modal-body">
<form>
<div class="row social_login_btn">
<div class="form-group col-md-12 text-center">
<a href="#" class="btn_1 full_width"><i class="fab fa-facebook-square"></i>Log in with Facebook</a>
</div>
<div class="form-group col-md-12 text-center">
<a href="#" class="btn_1 full_width"><i class="fab fa-google"></i>Log in with Google</a>
</div>
</div>
<div class="border_style">
<span>Or</span>
</div>
<div class="">
<input type="text" class="form-control" placeholder="Full Name">
</div>
<div class="">
<input type="text" class="form-control" placeholder="Enter your email">
</div>
<div class="">
<input type="password" class="form-control" placeholder="Password">
</div>
<div class=" cs_check_box">
<input type="checkbox" id="check_box" class="common_checkbox">
<label class="form-label" for="check_box">
Keep me up to date
</label>
</div>
<a href="#" class="btn_1 full_width text-center"> Sign Up</a>
<p>Need an account? <a data-bs-toggle="modal" data-bs-target="#sing_up" data-bs-dismiss="modal" href="#">Log in</a></p>
<div class="text-center">
<a href="#" data-bs-toggle="modal" data-bs-target="#forgot_password" data-bs-dismiss="modal" class="pass_forget_btn">Forget Password?</a>
</div>
 </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection