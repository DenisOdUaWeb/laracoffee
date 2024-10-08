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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/{something}', function () { /// ??????????????
    $var = 'some data';
    $var2arr = Request::all();
    return view('home', ['var'=> $var, 'var2' => $var2arr]);
})->where('something', '[0-9]+');

//Route::get('/list', [App\Http\Controllers\ProductsController::class, 'list'])
//->name('list'); // TEST LIST OF THE PRODUCTS

Route::get('/text-edit', [App\Http\Controllers\TextController::class, 'index'])->name('index');
Route::get('/text-edit/{filename}', [App\Http\Controllers\TextController::class, 'show'])->name('show');// where filename ['.blade.php']+ ?????
Route::get('/text-edit/{filename}/{text_part_index}', [App\Http\Controllers\TextController::class, 'edit'])->name('edit'); //->where('text_part_index', '[0-9]+');
Route::post('/text-edit/{filename}/{text_part_index}', [App\Http\Controllers\TextController::class, 'update'])->name('update');




Auth::routes();

Route::get('/home2', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
