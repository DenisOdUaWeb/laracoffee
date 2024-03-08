<?php



use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\Request;

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
    return view('index'); /// ???????????????
});
Route::get('/wer', function () { /// ??????????????
    //return view('mainbody');
});

Route::get('/text-edit', [App\Http\Controllers\TextController::class, 'index'])->name('index');
Route::get('/text-edit/{filename}', [App\Http\Controllers\TextController::class, 'show'])->name('show');// where filename ['.blade.php']+ ????? 
Route::get('/text-edit/{filename}/{text_part_index}', [App\Http\Controllers\TextController::class, 'edit'])->name('edit'); //->where('text_part_index', '[0-9]+');  
Route::post('/text-edit/{filename}/{text_part_index}', [App\Http\Controllers\TextController::class, 'update'])->name('update');

Route::get('/admin', function (){
    return view('admin.admin');
});


Auth::routes();

Route::get('/admin_home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin_home');
