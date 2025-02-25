<?php
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CovidController;
use App\Http\Controllers\TestFormController;
// Định nghĩa route cho cả GET và POST
use App\Http\Controllers\ProductController;		
Route::resource('products', ProductController::class);						
Route::get('/covid', [CovidController::class, 'getData']);
Route::get('/form', [TestFormController::class, 'showForm']);
Route::get('/signup', [signupController::class, 'index']); 
Route::post('/signup', [signupController::class, 'displayInfor']);
Route::get('/covid', [CovidController::class, 'getData']);
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MyController;
// use App\Http\Controllers\SumController;

// Route::get('/', function () {
//     $hello = "Chào mừng đến PNV"; // Truyền biến $hello
//     return view('welcome', ['hello' => $hello]);
// });
// use App\Http\Controllers\PostController;

// Route::resource('posts', PostController::class);
// Route::get('/index', [PostController::class, 'index']);
// Route::get('/create', [PostController::class, 'create']);

// Route::get('/welcome', function () {
//     $hello = "Chào mừng đến PNV";
//     return view('welcome', ['hello' => $hello]);
// });
// Route::match(['get', 'post'], '/', [SumController::class, 'sum']);
// Route::match(['get', 'post'], '/sum', [SumController::class, 'sum']);

// route::group(['prefix'=>'tutorial'],function()
//     {
//         route::get('/aws',function(){
//             echo "aws tutorial";
//         });
//         route::get('/jira',function(){
//             echo "jira tutorials";
//         });

//     }
// );
