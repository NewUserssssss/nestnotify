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
<h3 class="mb-0">carousel</h3>
</div>
</div>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
<ol class="carousel-indicators">
<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="img/banner.png" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
<img src="img/banner.png" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
<img src="img/banner.png" class="d-block w-100" alt="...">
</div>
</div>
<a class="carousel-control-prev" data-bs-target="#carouselExampleIndicators" role="button" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</a>
<a class="carousel-control-next" data-bs-target="#carouselExampleIndicators" role="button" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</a>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Carousel 2</h3>
</div>
</div>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
<ol class="carousel-indicators">
<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="img/banner.png" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">
<h5>First slide label</h5>
<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
</div>
</div>
<div class="carousel-item">
<img src="img/banner.png" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">
<h5>Second slide label</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
</div>
<div class="carousel-item">
<img src="img/banner.png" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">
<h5>Third slide label</h5>
<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
</div>
</div>
</div>
<a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" role="button" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</a>
<a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" role="button" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</a>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Carousel 2</h3>
</div>
</div>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active">
<img src="img/banner.png" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
<img src="img/banner.png" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
<img src="img/banner.png" class="d-block w-100" alt="...">
</div>
</div>
<a class="carousel-control-prev" data-bs-target="#carouselExampleFade" role="button" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</a>
<a class="carousel-control-next" data-bs-target="#carouselExampleFade" role="button" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</a>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
 <h3 class="mb-0">Carousel 2</h3>
</div>
</div>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active" data-interval="10000">
<img src="img/banner.png" class="d-block w-100" alt="...">
</div>
<div class="carousel-item" data-interval="2000">
<img src="img/banner.png" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
<img src="img/banner.png" class="d-block w-100" alt="...">
</div>
</div>
<a class="carousel-control-prev" data-bs-target="#carouselExampleInterval" role="button" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</a>
<a class="carousel-control-next" data-bs-target="#carouselExampleInterval" role="button" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</a>
</div>
</div>
</div>
</div>
</div>
@endsection