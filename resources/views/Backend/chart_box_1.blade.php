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
<div class="col-md-4">
<div class="card mb-3 widget-chart">
<div class="icon-wrapper rounded-circle">
<div class="icon-wrapper-bg bg-primary"></div>
<i class="ti-settings text-primary"></i>
</div>
<div class="widget-numbers"><span>46k</span></div>
<div class="widget-subheading">Total Views</div>
<div class="widget-description text-success">
<i class="fa fa-angle-up ">
</i>
<span class="ps-1"><span>176%</span></span>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card mb-3 widget-chart">
<div class="icon-wrapper rounded-circle">
<div class="icon-wrapper-bg bg-danger"></div>
<i class="ti-settings text-danger"></i></div>
<div class="widget-numbers"><span>5,82k</span></div>
<div class="widget-subheading">Reports Submitted</div>
<div class="widget-description text-primary"><span class="pe-1">54.1%</span>
<i class="fa fa-angle-up ">
</i>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card mb-3 widget-chart">
<div class="icon-wrapper rounded-circle">
<div class="icon-wrapper-bg bg-info"></div>
<i class="ti-settings text-info"></i></div>
<div class="widget-numbers"><span>62k</span></div>
<div class="widget-subheading">Bugs Fixed</div>
<div class="widget-description text-info">
<i class="fa fa-arrow-right ">
</i>
<span class="ps-1">175.5%</span></div>
</div>
</div>
<div class="col-md-4">
<div class="card mb-3 widget-chart">
<div class="icon-wrapper rounded">
<div class="icon-wrapper-bg bg-focus"></div>
<div class="center-svg">
<i class="fa fa-arrow-right ">
</i>
</div>
</div>
<div class="widget-numbers"><span>2,82k</span></div>
<div class="widget-subheading">Total Sales</div>
<div class="widget-description text-danger"><span class="pe-1">23.1%</span>
<i class="fa fa-angle-down ">
</i>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card mb-3 widget-chart">
<div class="icon-wrapper rounded">
<div class="icon-wrapper-bg bg-primary"></div>
<div class="center-svg">
<i class="fa fa-angle-down ">
</i>
</div>
</div>
<div class="widget-numbers"><span>32k</span></div>
<div class="widget-subheading">Follow-ups</div>
<div class="widget-description text-focus">
<i class="fa fa-arrow-left ">
</i>
<span class="ps-1">115.5%</span></div>
</div>
</div>
<div class="col-md-4">
<div class="card mb-3 widget-chart card-hover-shadow-2x">
<div class="icon-wrapper border-light rounded">
<div class="icon-wrapper-bg bg-light"></div>
<i class="ti-settings icon-gradient bg-happy-itmeo"></i></div>
<div class="widget-numbers">63.2k</div>
<div class="widget-subheading">Bugs Fixed</div>
</div>
</div>
<div class="col-md-4">
<div class="card mb-3 widget-chart">
<div class="widget-numbers">1.2M</div>
<div class="widget-subheading">Leads Generated</div>
<div class="widget-description text-info">
<i class="fa fa-ellipsis-h">
</i>
<span class="ps-1">115.5%</span></div>
</div>
</div>
<div class="col-md-4">
<div class="card mb-3 widget-chart">
<div class="widget-numbers">3.47k</div>
<div class="widget-subheading">Users Active</div>
<div class="widget-description text-danger"><span class="pe-1">31.2%</span>
<i class="fa fa-angle-down ">
</i>
</div>
</div>
</div>
</div>
</div>

@endsection