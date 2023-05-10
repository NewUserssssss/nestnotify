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
<div class="row">
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Area Chart</h3>
</div>
</div>
<canvas id="highlights"></canvas>
</div>
</div>
<div class="col-xl-6">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Bar Chart</h3>
</div>
</div>
<canvas style="height: 250px " id="barChart"></canvas>
</div>
</div>
<div class="col-xl-6">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Sales Chart</h3>
</div>
</div>
<canvas style="height: 250px" id="sales-chart"></canvas>
</div>
</div>
<div class="col-xl-6">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Radar Chart</h3>
</div>
</div>
<canvas style="height: 250px" id="radarChart"></canvas>
</div>
</div>
<div class="col-xl-6">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0"> Pie Chart</h3>
</div>
</div>
<canvas style="height: 250px" id="pieChart"></canvas>
</div>
</div>
<div class="col-xl-6">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Line Chart</h3>
</div>
</div>
<canvas style="height: 250px" id="lineChart"></canvas>
</div>
</div>
</div>
</div>
</div>

@endsection