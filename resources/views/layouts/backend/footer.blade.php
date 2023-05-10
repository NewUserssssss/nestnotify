<div class="footer_part">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-sm-12">
<div class="footer_iner text-center">
<!--<p>2020 © Influence - Designed by<a href="#"> Dashboard</a></p>-->
</div>
</div>
</div>
</div>
</div>
</section>


<script src="{{asset('js/popper1.min.js')}}"></script>

<script src="{{asset('js/bootstrap1.min.js')}}"></script>

<script src="{{asset('js/metisMenu.js')}}"></script>

<script src="{{asset('vendors/count_up/jquery.waypoints.min.js')}}"></script>

<script src="{{asset('vendors/chartlist/Chart.min.js')}}"></script>

<script src="{{asset('vendors/count_up/jquery.counterup.min.js')}}"></script>

<script src="{{asset('vendors/swiper_slider/js/swiper.min.js')}}"></script>

<script src="{{asset('vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>

<script src="{{asset('vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('vendors/gijgo/gijgo.min.js')}}"></script>

<script src="{{asset('vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/datatable/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('vendors/datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('vendors/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{asset('vendors/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{asset('js/chart.min.js')}}"></script>

<script src="{{asset('vendors/progressbar/jquery.barfiller.js')}}"></script>

<script src="{{asset('vendors/tagsinput/tagsinput.js')}}"></script>

<script src="{{asset('vendors/text_editor/summernote-bs4.js')}}"></script>
<script src="{{asset('vendors/apex_chart/apexcharts.js')}}"></script>

<script src="{{asset('js/custom.js')}}"></script>

<script src="{{asset('js/active_chart.js')}}"></script>
<script src="{{asset('vendors/apex_chart/radial_active.js')}}"></script>
<script src="{{asset('vendors/apex_chart/stackbar.js')}}"></script>
<script src="{{asset('vendors/apex_chart/area_chart.js')}}"></script>

<script src="{{asset('vendors/apex_chart/bar_active_1.js')}}"></script>
<script src="{{asset('vendors/chartjs/chartjs_active.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script>


    $('document').ready(function(){

    $('.buyerPanel').hide();
    $('.tenantPanel').hide();

     $('.SellerQuestionform').hide();
     $('.BuyerQuestionform').hide();
     $('.tenantQuestionform').hide();


     $('#SelleraddQuestion').click(function(){

     $('.SellerQuestionform').toggle();
     });
    

    $('#buyeraddQuestion').click(function(){
    
     $('.BuyerQuestionform').toggle();

    });

     
     $('#tenantaddQuestion').click(function(){
  
          $('.tenantQuestionform').toggle();
     });

     $('#SellerButton').click(function(){
      
      $('.sellerPanel').show();
      $('.tenantPanel').hide();

      $('.buyerPanel').hide();

     });

    
    $('#BuyerButton').click(function(){
      
      $('.sellerPanel').hide();
      $('.tenantPanel').hide();

      $('.buyerPanel').show();

     });


    $('#TanentButton').click(function(){
      
      $('.sellerPanel').hide();

      $('.buyerPanel').hide();

      $('.tenantPanel').show();

     });


    });



 $('.yty').click(function(){
      
      $('.yty').each(function() {
          
            $('.yty').removeClass('btn-primary');
     });
      
           $(this).addClass('btn-primary');
        
     });

    


	</script>


	 <script>
  $(document).ready(function() {
   var count = 1;
		$("#addMore").on("click", function() {
         count++;
			var html="<div class='input-group-text row' style='background-color: transparent;border:none;'>\
            </div><br>\
<input type='text' name='answers[]' style='border-radius:5px;' placeholder='option' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default'>&nbsp;&nbsp;\
<input type='text' name='answers[]' style='border-radius:5px;' placeholder='option' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default'><br>";
      $('#more-email').append(html);
		});

		$("#removeEmail").on("click", function() {
			$("#more-email").children().last().remove();
         count--;
		});

	});
   </script>



     <script>
  $(document).ready(function() {
   var count = 1;
        $("#gaddMore").on("click", function() {
         count++;
            var html="<div class='input-group-text row' style='background-color: transparent;border:none;'>\
            </div><br>\
<input type='text' style='border-radius:5px;' name='answers' placeholder='option' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default'>&nbsp;&nbsp;\
<input type='text' style='border-radius:5px;' name='answers' placeholder='option' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default'><br>";
      $('#gmore-email').append(html);
        });

        $("#removeEmail").on("click", function() {
            $("#more-email").children().last().remove();
         count--;
        });

    });
   </script>


     <script>
  $(document).ready(function() {
   var count = 1;
        $("#xaddMore").on("click", function() {
         count++;
            var html="<div class='input-group-text row' style='background-color: transparent;border:none;'>\
            </div><br>\
<input type='text' style='border-radius:5px;' name='answers' placeholder='option' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default'>&nbsp;&nbsp;\
<input type='text' style='border-radius:5px;' name='answers' placeholder='option' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default'><br>";
      $('#xmore-email').append(html);
        });

        $("#removeEmail").on("click", function() {
            $("#more-email").children().last().remove();
         count--;
        });

    });
   </script>



   <script>
$('document').ready(function(){

  $('.mcqbox').hide();
  $('.textboxarea').hide();

$('.dataselect').change(function(){
   var getvalue = $(this).val();

   if(getvalue== 1)
   {
 $('.mcqbox').show();
  $('.textboxarea').hide();

   }else{
 $('.mcqbox').hide();
  $('.textboxarea').show();

   }
 
   });

    });






   </script>


   <script>

 $(document).ready(function(){



 function userData(){
     
 var gethtml = "";
  
    $.ajax({

     url: 'control/app/getdata',
     type: "get",
     success:function(response)

     {
     

      $('#tableData').html('');
      $('#tableData').append(response);
     }

    });

   }

  userData();
   
   
  $('#sellerForm').submit(function(e){
         e.preventDefault();
  

     $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

    $.ajax({

     url: 'control/app/submit',
     type: "POST",
     data: $('#sellerForm').serialize(),
     success:function(response)
    {
           
           Swal.fire('Question and Answer added successfully');

            userData();  

     }

    });

  });



  });



   </script>


</body>

<!-- Mirrored from demo.dashboardpack.com/finance-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 May 2023 06:55:47 GMT -->
</html>