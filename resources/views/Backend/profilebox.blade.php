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
<div class="col-md-6">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">profile Box 1</h3>
</div>
</div>
<div class="profile-cart_2">
<div class="images"><img src="img/card.jpg" alt=""></div>
<h1>Araaf Kling</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto doloremque nam quia commodi? Voluptates
tenetur autem numquam. Tempora, corrupti tenetur ex sed officia facilis eius.</p>
<div class="social-area">
<a href="#"><i class="fab fa-facebook"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#"><i class="fab fa-linkedin"></i></a>
<a href="#"><i class="fab fa-codepen"></i></a>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">profile Box 2</h3>
</div>
</div>
<div class="pCard_card">
<div class="pCard_up">
<div class="pCard_text">
<h2>Van Goggles</h2>
<p>UI/UX Designer &amp; UI Developer</p>
</div>
<div class="pCard_add"><i class="fa fa-plus"></i></div>
</div>
<div class="pCard_down">
<div>
<p>Projects</p>
<p>126</p>
</div>
<div>
<p>Views</p>
<p>21,579</p>
</div>
<div>
<p>Likes</p>
<p>1,976</p>
</div>
</div>
<div class="pCard_back">
<p>See My Latest Work Here</p>
<a href="#"><i class="fab fa-twitter fa-2x fa-fw"></i></a>
<a href="#"><i class="fab fa-linkedin fa-2x fa-fw"></i></a>
<a href="#"><i class="fab fa-behance fa-2x fa-fw"></i></a> <br>
<a href="#"><i class="fab fa-codepen fa-2x fa-fw"></i></a>
<a href="#"><i class="fab fa-dribbble fa-2x fa-fw"></i></a>
 <a href="#"><i class="fab fa-instagram fa-2x fa-fw"></i></a>
<p>Follow Me!</p>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">profile Box 3</h3>
</div>
</div>
<div class="profile_box_1">
<div class="profile-cover-image">
<img src="img/card.jpg">
</div>
<div class="profile-picture">
<img src="img/card.jpg">
</div>
<div class="profile-content">
<h1>
Vinicius Cainelli
</h1>
<p>
Design &amp; Code
</p>
<div class="socials">
<a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-facebook-f"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">profile Box 4</h3>
</div>
</div>
<div class="profile_card_5">
<div class="cover-photo">
<img src="img/card.jpg" class="profile">
</div>
<div class="profile-name">Beni Smith</div>
<p class="about">User Interface Designer and<br>front-end developer</p>
<button class="msg-btn">Message</button>
<button class="follow-btn">Following</button>
<div>
<i class="fab fa-facebook-f"></i>
<i class="fab fa-instagram"></i>
<i class="fab fa-youtube"></i>
<i class="fab fa-twitter"></i>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">profile Box 5</h3>
</div>
</div>
<div class="profile-card-4">
<div class="profile-img">
<img src="img/card2.jpg">
</div>
<div class="profile-content">
<h2 class="title">Marco
<span>Designer &amp; Developer</span>
</h2>
<ul class="social-link">
<li><a href="#" class="fab fa-facebook"></a></li>
<li><a href="#" class="fab fa-google"></a></li>
<li><a href="#" class="fab fa-twitter"></a></li>
<li><a href="#" class="fab fa-youtube"></a></li>
</ul>
 </div>
</div>
</div>
</div>
</div>
</div>
@endsection