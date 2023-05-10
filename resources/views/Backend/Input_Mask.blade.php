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

<div class="main_content_iner">
<div class="container-fluid plr_30 body_white_bg pt_30">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Input Mask 1</h3>
</div>
</div>
<div class="input-group mb-3">
<div class="input-group-text">
<label class="" for="inputGroupSelect01">Options</label>
</div>
<select class="form-select" id="inputGroupSelect01">
<option selected>Choose...</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</div>
<div class="input-group mb-3">
<select class="form-select" id="inputGroupSelect02">
<option selected>Choose...</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
<div class="input-group-text">
<label class="" for="inputGroupSelect02">Options</label>
</div>
</div>
<div class="input-group mb-3">
<button class="btn btn-outline-secondary" type="button">Button</button>
<select class="form-select" id="inputGroupSelect03">
<option selected>Choose...</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</div>
<div class="input-group">
<select class="form-select" id="inputGroupSelect04">
<option selected>Choose...</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
<button class="btn btn-outline-secondary" type="button">Button</button>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Input Mask 2</h3>
</div>
</div>
<div class="input-group mb-3">
<label class="input-group-text" for="inputGroupFile01">Upload</label>
<input type="file" class="form-control" id="inputGroupFile01">
</div>
 <div class="input-group mb-3">
<input type="file" class="form-control" id="inputGroupFile02">
<label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>
<div class="input-group mb-3">
<button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Button</button>
<input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
</div>
<div class="input-group">
<input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
<button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Input Mask 3</h3>
</div>
</div>
<div class="input-group mb-3">
<button type="button" class="btn btn-outline-secondary">Action</button>
<button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="visually-hidden">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<a class="dropdown-item" href="#">Something else here</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>
<input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
</div>
<div class="input-group">
<input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
<button type="button" class="btn btn-outline-secondary">Action</button>
<button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="visually-hidden">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<a class="dropdown-item" href="#">Something else here</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Input Mask 4</h3>
</div>
</div>
<div class="input-group mb-3">
<div class="input-group-text">
<input type="checkbox" aria-label="Checkbox for following text input">
</div>
<input type="text" class="form-control" aria-label="Text input with checkbox">
</div>
<div class="input-group">
<div class="input-group-text">
<input type="radio" aria-label="Radio button for following text input">
</div>
<input type="text" class="form-control" aria-label="Text input with radio button">
</div>
</div>
</div>
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Input Mask 5</h3>
</div>
</div>
<div class="input-group input-group-sm mb-3">
<div class="input-group-text">
<span class="" id="inputGroup-sizing-sm">Small</span>
</div>
<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group mb-3">
<div class="input-group-text">
<span class="" id="inputGroup-sizing-default">Default</span>
</div>
<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group input-group-lg">
<div class="input-group-text">
<span class="" id="inputGroup-sizing-lg">Large</span>
</div>
<input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
</div>
</div>
</div>
</div>
</div>


@endsection