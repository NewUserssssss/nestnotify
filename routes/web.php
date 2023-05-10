<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\Usercontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {

      return view('Backend.index');
   
});

Route::get('/apex', function () {

      return view('Backend.apex_chart');
   
});

Route::get('/badge', function () {

      return view('Backend.Badges');
   
});

Route::get('/boot_table', function () {

      return view('Backend.bootstrap_table');
   
});


Route::get('/buttons', function () {

      return view('Backend.buttons');

});



Route::get('/cards', function () {

      return view('Backend.cards');
   
});


Route::get('/carousel', function () {

      return view('Backend.carousel');
   
});

Route::get('/chart_box', function () {

      return view('Backend.chart_box_1');
   
});

Route::get('/chart_spark', function () {

      return view('Backend.chart_sparkline');
   
});

Route::get('/chartjs', function () {

      return view('Backend.chartjs');
   
});
Route::get('/Edit_Question', function () {

      return view('Backend.chat');
   
});
Route::get('/data_table', function () {

      return view('Backend.data_table');
   
});


Route::get('/datepicker', function () {

      return view('Backend.datepicker');
   
});

Route::get('/dropdown', function () {

      return view('Backend.dropdown');
   
});


Route::get('/faq', function () {

      return view('Backend.faq');
   
});


Route::get('/forgot_pass', function () {

      return view('Backend.forgot_pass');
   
});

Route::get('/input_mask', function () {

      return view('Backend.input_mask');
   
});
Route::get('/input_Selects', function () {

      return view('Backend.input_Selects');
   
});
Route::get('/Loading_Indicators', function () {

      return view('Backend.Loading_Indicators');
   
});
Route::get('/login', function () {

      return view('Backend.login');
   
});
Route::get('/Add_Questions', function () {

      return view('Backend.mail_box');
   
});
Route::get('/notification', function () {

      return view('Backend.notification');
   
});
Route::get('/Pagination', function () {

      return view('Backend.Pagination');
   
});
Route::get('/profilebox', function () {

      return view('Backend.profilebox');
   
});
Route::get('/progress', function () {

      return view('Backend.progress');
   
});
Route::get('/resister', function () {

      return view('Backend.resister');
   
});






Route::group([ 'middleware' => [], 'prefix'=> 'control/app/', 'as' => 'admin.' ], function() {

   Route::post('submit','App\Http\Controllers\AdminController@post')->name('submit');

   Route::get('getdata','App\Http\Controllers\AdminController@getquestanswer')->name('datafetch');
 
   

});
    
 


Route::group([ 'middleware' => [], 'prefix'=> 'control/buyer/', 'as' => 'buyer.' ], function() {

    Route::get('/', function() {

         return view('Backend.index');
  
    });

});



Route::group([ 'middleware' => [], 'prefix'=> 'control/seller/', 'as' => 'seller.' ], function() {

    Route::get('/', function() {

         return view('Backend.index');
  
    });

});


Route::group([ 'middleware' => [], 'prefix'=> 'control/Rental/', 'as' => 'Rental.' ], function() {

    Route::get('/', function() {

         return view('Backend.index');
  
    });

});

Route::get('user','App\Http\Controllers\Usercontroller@add_user')->name('user');
Route::post('add-user','App\Http\Controllers\Usercontroller@create')->name('add-user');
Route::get('delete-user/{id}','App\Http\Controllers\Usercontroller@Delete');


    










