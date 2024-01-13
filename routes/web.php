<?php



use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

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
    return view('main');
});
Route::get('/login2', function () {
    //dd("asda");
    echo "asdfasdf";
    return view('login2');
});
Route::get('/scanviews', function () {
    //dd("asda");
    //echo "asdfasdf";
    //$view_dir = resource_path('views');
    $files_list = scandir(resource_path('views'));
    foreach($files_list as $view_file_to_edit_the_text){
        //echo '<a href="'.$view_dir.'\\'.$file.'">'.$file.'</a></br>';
        //scanviews/
        echo '<a href="/scanviews/'.$view_file_to_edit_the_text.'">'.$view_file_to_edit_the_text.'</a></br>';
    }
    
    //dd($files_list);
});
Route::get('/scanviews/{filename}', [App\Http\Controllers\TextController::class, 'showlist'])->name('showlist');
Route::get('/scanviews/{filename}/{particle_index}', [App\Http\Controllers\TextController::class, 'particle_to_edit'])->name('particle_to_edit');
Route::post('/scanviews/{filename}/{particle_index}', [App\Http\Controllers\TextController::class, 'edit'])->name('edit');

Route::post('/action', [App\Http\Controllers\TextController::class, 'action'])->name('action');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


