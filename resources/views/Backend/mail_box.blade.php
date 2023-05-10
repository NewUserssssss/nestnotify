@extends('Backend.component.parts')

@section('contents')
<style>

#inputGroup-sizing-default {
    left: -38px;
    float: left;
    position: relative;
}

.spantext {
    left: 50px;
    position: relative;
    font-size: 12px;
    margin-top: 0px;
    color: grey;
}


.addmoreoption{

    color: blue;
    left: 165px;
    position: relative;
}

.selectdivision{

   width: 87%;
    left: 4%;
    position: relative;

}
</style>

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

<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h2 class="mb-0">Questions</h2>
</div>
</div>
<button type="button" id="SellerButton" class="btn btn-primary yty btn-sm"> Seller </button>
<button type="button" id="BuyerButton" class="btn  yty btn-sm active"> Buyer </button>
<button type="button" id="TanentButton" class="btn  yty btn-sm active"> Tenant </button>
</div>

<div class="main_content_iner ">
<div class="container-fluid plr_30 body_white_bg pt_30">
<div class="row justify-content-center">

</div>


<div class="col-md-12 sellerPanel">
<h5>Seller Questionnare</h5>
<div class="serach_field_2">
<div class="search_inner">
<form Active="#">
<div class="search_field">
<input style="padding-left: 1px;border: 2px solid #bbc1c9;" type="text" placeholder="Search your Question here...">
</div>
</form>
</div>
</div>
<button id="SelleraddQuestion" class="btn btn-primary" style="float: right;
    bottom: 40px;
    position: relative;">+ Add Question</button>
<br>
<div class="white_box QA_section">
<div class="SellerQuestionform">
<div class="">
<div class="">




<form id="sellerForm" Active="#">
<div class="input-group mb-3" style="width: 95%;
    left: 5%;">
<div class="input-group-text" style="background-color: transparent;border:none;">
<span  id="inputGroup-sizing-default">Add Question</span>
</div>
<input type="text" name="question" style="border-radius:5px;" placeholder="Enter your Question" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3 selectdivision">
<div class="input-group-text" style="background-color: transparent;border:none;">
<label id="inputGroup-sizing-default" for="inputGroupSelect01">Select Category</label>
</div>
<select style="border-radius:5px;" name="type" class="form-select dataselect" id="inputGroupSelect01">
<option selected="">Choose...</option>
<option value="1">MCQ</option>
<option value="2">Long Text</option>
</select>

<span class="spantext" >Select the type of the question.
ex. MCQ, Long Answer, Short Answer</span>
</div>

<div class="mcqbox">
<div class="input-group mb-3" style="width: 95%;
    left: 6%;">
<div class="input-group-text" style="background-color: transparent;border:none;">
<span  id="inputGroup-sizing-default">Add Options</span>
</div>

<input type="text" class="d-none" name="role" value="seller">
<br>
<br>

<input type="text" style="border-radius:5px;" name="answers[]" placeholder="option" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
&nbsp;&nbsp;
<input type="text" style="border-radius:5px;" name="answers[]" placeholder="option" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
 
</div>

<div class="input-group mb-3 row" id="more-email" style="width: 85%;
    left: 17%;">
</div>

<span class="addmoreoption" id="addMore" style="">+ add more option</span>
</div>

<div class="input-group mb-3 textboxarea" style="width: 95%;
    left: 6%;">
<div class="input-group-text" style="background-color: transparent;border:none;">
<span  id="inputGroup-sizing-default">Add Options</span>
</div>

<textarea name='answers[]' style="border-radius:5px;" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></textarea>

</div>
<br>
<hr>

<br>
<center><button type="submit" class="btn btn-primary">Submit</button></center>
</form>

<br>
</div>
</div>
</div>
<div class="QA_table ">
<table class="table lms_table_active">
<thead>
<tr>
<th scope="col">Question</th>
<th scope="col">Answer</th>
<th scope="col">Date</th>
<th scope="col">Status</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody id="tableData">



</tbody>
</table>
</div>
</div>
</div>






<div class="col-md-12 buyerPanel">
<h5>Buyer Questionnare</h5>
<div class="serach_field_2">
<div class="search_inner">
<form id="buyerForm" Active="#">
<div class="search_field">
<input style="padding-left: 1px;border: 2px solid #bbc1c9;" type="text" placeholder="Search your Question here...">
</div>
</form>
</div>
</div>
<button id="buyeraddQuestion" class="btn btn-primary" style="float: right;
    bottom: 40px;
    position: relative;">+ Add Question</button>
<br>
<div class="white_box QA_section">
<div class="BuyerQuestionform">
<div class="">
<div class="">




<form id="" Active="#">
<div class="input-group mb-3" style="width: 95%;
    left: 5%;">
<div class="input-group-text" style="background-color: transparent;border:none;">
<span  id="inputGroup-sizing-default">Add Question</span>
</div>
<input type="text" style="border-radius:5px;" placeholder="Enter your Question" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3 selectdivision">
<div class="input-group-text" style="background-color: transparent;border:none;">
<label id="inputGroup-sizing-default" for="inputGroupSelect01">Select Category</label>
</div>
<select style="border-radius:5px; " class="form-select dataselect" id="inputGroupSelect01">
<option selected="">Choose...</option>
<option value="1">MCQ</option>
<option value="2">Long Text</option>
</select>

<span class="spantext" >Select the type of the question.
ex. MCQ, Long Answer, Short Answer</span>
</div>

<div class="mcqbox">
<div class="input-group mb-3" style="width: 95%;
    left: 6%;">
<div class="input-group-text" style="background-color: transparent;border:none;">
<span  id="inputGroup-sizing-default">Add Options</span>
</div>
<input type="text" class="d-none" name="role" value="buyer">
<input type="text" style="border-radius:5px;" placeholder="option" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
&nbsp;&nbsp;
<input type="text" style="border-radius:5px;" placeholder="option" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>


<div class="input-group mb-3 row" id="gmore-email" style="width: 85%;
    left: 17%;">
</div>

<span class="addmoreoption" id="gaddMore" style="">+ add more option</span>

</div>

<div class="input-group mb-3 textboxarea" style="width: 95%;
    left: 6%;">
<div class="input-group-text" style="background-color: transparent;border:none;">
<span  id="inputGroup-sizing-default">Add Long Text</span>
</div>

<textarea style="border-radius:5px;" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></textarea>

</div>
<br>
<hr>

<br>
<center><button type="submit" class="btn btn-primary">Submit</button></center>
</form>






<br>
</div>
</div>
</div>
<div class="QA_table ">
<table class="table lms_table_active">
<thead>
<tr>
<th scope="col">Question</th>
<th scope="col">Answer</th>
<th scope="col">Date</th>
<th scope="col">Status</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>What goals do you have for your trip?</td>
<td>1-Rest & relaxation<br>
2- Quality time with spouse/family/friends<br>
3- Adventure & exploring<br>
4- Learn about and experience history & culture</td>
<td>27/6/2017</td>
<td><a href="#" class="status_btn">Active</a> </td>
<td><a href="#" class="status_btn" style="color:red;">Edit</a> </td>
</tr>
</tbody>
</table>
</div>
</div>
</div>




<div class="col-md-12 tenantPanel">
<h5>Tenant Questionnare</h5>
<div class="serach_field_2">
<div class="search_inner">
<form Active="#">
<div class="search_field">
<input style="padding-left: 1px;border: 2px solid #bbc1c9;" type="text" placeholder="Search your Question here...">
</div>
</form>
</div>
</div>
<button id="tenantaddQuestion" class="btn btn-primary" style="float: right;
    bottom: 40px;
    position: relative;">+ Add Question</button>
<br>
<div class="white_box QA_section">
<div class="tenantQuestionform">
<div class="">
<div class="">
<form id="tenantForm" Active="#">
<div class="input-group mb-3" style="width: 95%;
    left: 5%;">
<div class="input-group-text" style="background-color: transparent;border:none;">
<span  id="inputGroup-sizing-default">Add Question</span>
</div>
<input type="text" style="border-radius:5px;" placeholder="Enter your Question" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3 selectdivision">
<div class="input-group-text" style="background-color: transparent;border:none;">
<label id="inputGroup-sizing-default" for="inputGroupSelect01">Select Category</label>
</div>
<select style="border-radius:5px; " class="form-select dataselect" id="inputGroupSelect01">
<option selected="">Choose...</option>
<option class="mcqSelect" value="1">MCQ</option>
<option  class="longSelect" value="2">Long Text</option>
</select>



<span class="spantext">Select the type of the question.
ex. MCQ, Long Answer, Short Answer</span>
</div>

<div class="mcqbox">
<div class="input-group mb-3" style="width: 95%;
    left: 6%;">
<div class="input-group-text" style="background-color: transparent;border:none;">
<span  id="inputGroup-sizing-default">Add Options</span>
</div>

<input type="text" class="d-none" name="role" value="tenant">

<input type="text" style="border-radius:5px;" placeholder="option" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
&nbsp;&nbsp;
<input type="text" style="border-radius:5px;" placeholder="option" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3 row" id="xmore-email" style="width: 85%;
    left: 17%;">
</div>
<span class="addmoreoption" id="xaddMore" style="">+ add more option</span>


</div>


<div class="input-group mb-3 textboxarea" style="width: 95%;
    left: 6%;">
<div class="input-group-text" style="background-color: transparent;border:none;">
<span  id="inputGroup-sizing-default">Add Options</span>
</div>

<textarea style="border-radius:5px;" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></textarea>

</div>
<br>
<hr>

<br>
<center><button class="btn btn-primary">Submit</button></center>
</form>

<br>
</div>
</div>
</div>
<div class="QA_table ">
<table class="table lms_table_active">
<thead>
<tr>
<th scope="col">Question</th>
<th scope="col">Answer</th>
<th scope="col">Date</th>
<th scope="col">Status</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>What goals do you have for your trip?</td>
<td>1-Rest & relaxation<br>
2- Quality time with spouse/family/friends<br>
3- Adventure & exploring<br>
4- Learn about and experience history & culture</td>
<td>27/6/2017</td>
<td><a href="#" class="status_btn">Active</a> </td>
<td><a href="#" class="status_btn" style="background-color:red;">Edit</a> </td>
</tr>
</tbody>
</table>
</div>
</div>
</div>


</div>
</div>
</div>




  
    <style>
        #sortable {
            list-style-type: none;
            width: 50%;
        }
  
        #sortable li {
            margin: 10px;
            padding: 0.5em;
            font-size: 25px;
           
            background-color: green;
        }
        #gfg
        {
            margin-left: 50px;
        }
        #btn
        {
            margin-left: 50px;
            padding: 0.5;
            font-size: 20px;
            height: 40px;
            width: 40%;
        }
    </style>

    <center>
    
        <ul id="sortable">
            <li>Geeks1</li>
            <li>Geeks2</li>
            <li>Geeks3</li>
        </ul>
          
        <input type="button" id="btn"
            value="Get Handle">
          
        <h3><span id="gfg"></span></h3>
          
    </center>


 
  
    </script>
    <script>
        $(function () {
            $("#btn").on('click', function () {
                var handle = $("#sortable").sortable( "option", "handle" );
                document.getElementById('gfg').innerHTML +=
                "Handle Value : " + handle;
                 handle: $("td:eq(0)")
            });
        });
  
        $(function () {
            $("#sortable").sortable();
        });
    </script>











@endsection