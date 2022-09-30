<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\homecontroller;
use App\Http\Controllers\admin\AdminloginController;
use App\Http\Controllers\admin\DailyDarshanController;
use App\Http\Controllers\admin\GallaryController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\VideoController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/', [homecontroller::class, 'index']);

Route::get('video', function () {
    return view('client.video');
});

Route::get('contact', function () {
    return view('client.contact');
});


// route::get('image', [homecontroller::class, 'img']);
// route::post('insertimage', [homecontroller::class, 'insertimg']);


Route::get('register', function () {
    return view('Admins.register');
});
// Route::get('adduser', function () {
//     return view('Admins.adduser');
// });

route::post('addregister', [AdminloginController::class, 'addregister']);

route::get('/login', [AdminloginController::class, 'index']);
route::post('admin_login', [AdminloginController::class, 'adminlogin']);

route::get('showuser', [AdminloginController::class, 'showuser']);
route::get('deleteuser/{id}', [AdminloginController::class, 'deleteuser']);

route::get('adminlogout', [AdminloginController::class, 'adminlogout']);

route::get('profile', [AdminloginController::class, 'profile']);
route::post('profileupdate', [AdminloginController::class, 'profileupdate']);

route::get('index', [AdminloginController::class, 'admindashboard']);

route::get('showslider', [SliderController::class, 'showslider']);
route::get('addslider', [SliderController::class, 'addslider']);
route::post('insertslider', [SliderController::class, 'insertslider']);
route::get('editslider/{id}', [SliderController::class, 'update']);
route::post('updateslider', [SliderController::class, 'updateslider']);
route::get('deleteslider/{id}', [SliderController::class, 'deleteslider']);


 

route::get('showgallary', [GallaryController::class, 'showgallary']);
route::get('addgallary', [GallaryController::class, 'addgallary']);
route::post('insertgallary', [GallaryController::class, 'insertgallary']);
route::get('editgallary/{id}', [GallaryController::class, 'update']);
route::post('updategallary', [GallaryController::class, 'updategallary']);
route::get('deletegallary/{id}', [GallaryController::class, 'deletegallary']);


route::get('showdailydarshan', [DailyDarshanController::class, 'showdailydarshan']);
route::get('adddailydarshan', [DailyDarshanController::class, 'adddailydarshan']);
route::post('insertdailydarshan', [DailyDarshanController::class, 'insertdailydarshan']);
route::get('editdailydarshan/{id}', [DailyDarshanController::class, 'update']);
route::post('updatedailydarshan', [DailyDarshanController::class, 'updatedailydarshan']);
route::get('deletedailydarshan/{id}', [DailyDarshanController::class, 'deletedailydarshan']);



route::get('showvideo', [VideoController::class, 'showvideo']);
route::get('addvideo', [VideoController::class, 'addvideo']);
route::post('insertvideo', [VideoController::class, 'insertvideo']);

route::get('editvideo/{id}', [VideoController::class, 'update']);
route::post('updatevideo', [VideoController::class, 'updatevideo']);
 route::get('deletevideo/{id}', [VideoController::class, 'deletevideo']);

