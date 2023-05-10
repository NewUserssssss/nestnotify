@extends('Backend.component.parts')

@section('contents')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<style>
    .modal-content {
    /* background: radial-gradient(black, transparent); */
    /* background: #81abb4; */
    background: #f7faff !important;
    border-radius: 17px;
    }
    button.btn-close {
    border: 2px solid black;
    border-radius: 40px;
}
.toggle-button-cover {
  display: table-cell;
  position: relative;
  width: 200px;
  height: 140px;
  box-sizing: border-box;
}

.button-cover {
  /* height: 100px;
  margin: 20px;
  background-color: #fff;
  box-shadow: 0 10px 20px -8px #c5d6d6;
  border-radius: 4px; */
}

.button-cover:before {
  counter-increment: button-counter;
  content: counter(button-counter);
  position: absolute;
  right: 0;
  bottom: 0;
  color: #d7e3e3;
  font-size: 12px;
  line-height: 1;
  padding: 5px;
}

.button-cover,
.knobs,
.layer {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.button {
  position: relative;
  top: 50%;
  width: 74px;
  height: 36px;
  margin: -20px auto 0 auto;
  overflow: hidden;
}

.button.r,
.button.r .layer {
  border-radius: 100px;
}

.button.b2 {
  border-radius: 2px;
}

.checkbox {
  position: relative;
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
  opacity: 0;
  cursor: pointer;
  z-index: 3;
}

.knobs {
  z-index: 2;
}

.layer {
  width: 100%;
  background-color: #ebf7fc;
  transition: 0.3s ease all;
  z-index: 1;
}

/* Button 1 */
#button-1 .knobs:before {
    content: "YES";
    position: absolute;
    top: 5px;
    left: 4px;
    width: 25px;
    height: 23px;
    color: #fff;
    font-size: 10px;
    font-weight: bold;
    text-align: center;
    line-height: 1;
    padding: 9px 4px;
    background-color: #03a9f4;
    border-radius: 50%;
    transition: 0.3s cubic-bezier(0.18, 0.89, 0.35, 1.15) all;
}

#button-1 .checkbox:checked + .knobs:before {
  content: "NO";
  left: 42px;
  background-color: #f44336;
}

#button-1 .checkbox:checked ~ .layer {
  background-color: #fcebeb;
}

#button-1 .knobs,
#button-1 .knobs:before,
#button-1 .layer {
  transition: 0.3s ease all;
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

<div class="main_content_iner">
<div class="container-fluid plr_30 body_white_bg pt_30">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_box mb_30 " style="height:99px">
<div class="box_header ">
<div class="main-title">
<h2 class="mb-0">User Details</h2>
 <div class="text-end">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary text-left" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="float: right;
    bottom: 40px;
    position: relative;left: 734px;">
  Add User
</button>
 </div>

</div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add User Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" id="add_User" enctype='multipart/form-data'> 
 @csrf
<div class="input-group mb-3">
    <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
</div>
<div class="input-group mb-3">
    <input type="text" name="email" class="form-control" placeholder="Enter Your E-mail">
</div>
<div class="input-group mb-3">
    <input type="file" name="image" class="form-control" placeholder="Enter Your E-mail">
</div>
<div class="input-group mb-3">
  <input type="number" name="phone" class="form-control" placeholder="Enter Your phone">
</div>
<div class="input-group mb-3">
  <input type="text" name="address" class="form-control" placeholder="Enter Your Address">
</div>
<div class="input-group mb-3">
  <input type="number" name="age" class="form-control" placeholder="Age">
</div>
<div class="input-group">
<select class="form-select" id="inputGroupSelect05"  name="role">
<option selected>Role</option>
<option value="Admin">Admin</option>
</select>
</div>
<br>
<div class="input-group">
<select class="form-select" id="inputGroupSelect05" name="gender">
<option selected>Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>

<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="createBtn" >Save</button>
  <iv>

</form>
      </div>
     
    </div>
  </div>
</div>




</div>
</div>
<div class="QA_table ">

<table class="table lms_table_active">
<thead>
<tr>
<th scope="col">Id</th>
<th scope="col">Image</th>
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">phone</th>
<th scope="col">Address</th>
<th scope="col">Role</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody  class="usertable">
@if(!empty($user))
@foreach($user as $key => $user)
<tr>
<td>{{ $key+1}}</td>
<td><img src="{{ asset('images/user_image')}}/{{$user->image}}" style="height:50px; width:50px; border-radius:10px;"></td>
<td>{{ $user->name}}</td>
<td>{{ $user->email}}</td>
<td>{{ $user->phone}}</td>

<td>{{ $user->address}}</td>

<td>{{ $user->role}}</td>
<!-- <td>
@if ($user->status == 1)
<div class="row">
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button r" id="button-1">
          <input type="checkbox" class="checkbox"  value="{{ $user->id}}"/>
          <div class="knobs"></div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
    @else
    <div class="row">
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button r" id="button-1">
          <input type="checkbox" class="checkbox" value="{{ $user->id}}" />
          <div class="knobs"></div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
    @endif
</td> -->
<td>
  <div class="btn-group me-2" role="group" aria-label="First group">
  <button class="btn btn-danger" href="javascript:void(0)"
                                                                    id="delete" value="{{ $user->id }}">
                                                                    <i class="fa fa-trash mx-2"
                                                                        style="color:white;
                                                                             "></i>
                                                                    </button>
<!-- 
    <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true" value="" id="delete"></i></button> -->
    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
  
  
  </div>
</td>
</tr>
@endforeach
@else
@endif
</tbody>
</table>
</div>
</div>
</div>
</div>


</section>



@endsection
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<script>
    $(document).on("submit", "#add_User", function(e) {

        e.preventDefault();
        let add_User = new FormData($('#add_User')[0]);
        $("#createBtn").text("Save");
        $.ajax({
            type: "POST",
            url: "{{ url('add-user')}}",
            data: add_User,
            contentType: false,
            processData: false,
            success: function(response) {
               
                if (response.status == 400) {
                    var values = '';
                    jQuery.each(response.errors, function(key, value) {
                        values += value + '<br>'
                    });
                    Command: toastr["error"](values)

                    $("#createBtn").text("Save!");
               
                      } else if
                      (response.status == 200) {
                       $("#add_User")[0].reset();
                       Command: toastr["success"](response.message) 
                }
                location.reload();
            }
        });
    });
    $(document).on("click", "#delete", function(e) {
            e.preventDefault();
            var delete_id = $(this).val();
               
            if (confirm("Are you sure you want to delete?")) {
                $.ajax({
                    type: "GET",
                    url: "delete-user/" + delete_id,
                    success: function(p) {
                       
                        if (p.status == 200) {
                            Command: toastr["success"](p.message)
                        }
                        else if (p.status == 400) {
                            Command: toastr["error"](p.error)
                        }
                        location.reload();
                    }

                });
            }
        });
</script>
