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
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Input select 1</h3>
</div>
</div>
<form>
<div class="mb-3">
<label class="form-label" for="exampleFormControlInput1">Email address</label>
<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
<label class="form-label" for="exampleFormControlSelect1">Example select</label>
<select class="form-control" id="exampleFormControlSelect1">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</div>
<div class="mb-3">
<label class="form-label" for="exampleFormControlSelect2">Example multiple select</label>
<select multiple class="form-control" id="exampleFormControlSelect2">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</div>
</form>
</div>
</div>
<div class="col-md-6">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Input select 2</h3>
</div>
</div>
<select class="nice_Select mb_30">
<option data-display="Select">Nothing</option>
<option value="1">Some option</option>
<option value="2">Another option</option>
<option value="3" disabled>A disabled option</option>
<option value="4">Potato</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Input select 3</h3>
</div>
</div>
<select class="default_sel mb_30 w-100">
<option data-display="Select">Nothing</option>
<option value="1">Some option</option>
<option value="2">Another option</option>
<option value="3" disabled>A disabled option</option>
<option value="4">Potato</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Input select 4</h3>
</div>
</div>
<select class="default_sel mb_30">
<option data-display="Select">Nothing</option>
<option value="1">Some option</option>
<option value="2">Another option</option>
<option value="3" disabled>A disabled option</option>
<option value="4">Potato</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Input select 5</h3>
</div>
</div>
<select class="form-select form-control-lg mb_30">
<option>Large select</option>
</select>
<select class="form-select mb_30">
<option>Default select</option>
</select>
<select class="form-select form-control-sm">
<option>Small select</option>
</select>
</div>
</div>
</div>
</div>
@endsection