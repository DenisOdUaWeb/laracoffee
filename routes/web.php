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



Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index'])
->name('index');
Route::post('/products', [App\Http\Controllers\ProductsController::class, 'store'])
->name('store');
Route::delete('/products/{product}', [App\Http\Controllers\ProductsController::class, 'destroy'])
->name('destroy');
Route::get('/products/{product}', [App\Http\Controllers\ProductsController::class, 'edit'])
->name('edit'); // ??????????????????????? /products/{product}/edit
Route::patch('/products/{product}', [App\Http\Controllers\ProductsController::class, 'update'])
->name('update');

Route::get('/blog', [App\Http\Controllers\PostsController::class, 'index'])
->name('index');
Route::get('/blog/create', [App\Http\Controllers\PostsController::class, 'create'])
->name('create');
Route::post('/blog', [App\Http\Controllers\PostsController::class, 'store'])
->name('store');
Route::delete('/blog/{post}', [App\Http\Controllers\PostsController::class, 'destroy'])
->name('destroy');
Route::get('/blog/{post}/edit', [App\Http\Controllers\PostsController::class, 'edit'])
->name('edit');
Route::patch('/blog/{post}', [App\Http\Controllers\PostsController::class, 'update'])
->name('update');


Route::post('/showcase', [App\Http\Controllers\ShowcaseitemsController::class, 'store'])
->name('store');
Route::delete('/showcase/{showcaseitem}', [App\Http\Controllers\ShowcaseitemsController::class, 'destroy'])
->name('destroy');
Route::get('/showcase/{showcaseitem}/edit', [App\Http\Controllers\ShowcaseitemsController::class, 'edit'])
->name('edit');
Route::patch('/showcase/{showcaseitem}', [App\Http\Controllers\ShowcaseitemsController::class, 'update'])
->name('update');

Route::get('/text-edit', [App\Http\Controllers\TextController::class, 'index'])->name('index');
Route::get('/text-edit/{filename}', [App\Http\Controllers\TextController::class, 'show'])->name('show');// where filename ['.blade.php']+ ?????
Route::get('/text-edit/{filename}/{text_part_index}', [App\Http\Controllers\TextController::class, 'edit'])->name('edit'); //->where('text_part_index', '[0-9]+');
Route::post('/text-edit/{filename}/{text_part_index}', [App\Http\Controllers\TextController::class, 'update'])->name('update');


Route::get('/reserve', [App\Http\Controllers\ReservesController::class, 'index'])->name('index');
Route::post('/reserve', [App\Http\Controllers\ReservesController::class, 'store'])->name('store');
Route::delete('/reserve/{reserve}', [App\Http\Controllers\ReservesController::class, 'destroy'])->name('destroy');



Auth::routes();

Route::get('/home2', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
