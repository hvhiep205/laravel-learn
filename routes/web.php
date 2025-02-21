<?php
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SignupController::class, 'index'])->name('signup.index');
Route::post('/signup', [SignupController::class, 'displayInfor'])->name('signup.displayInfor');
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
