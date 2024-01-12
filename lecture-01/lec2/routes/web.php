<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\Test\NewsController;
use App\Http\Controllers\Test\TestController as TestTestController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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



Route::get('news', [TestController::class , 'mahmoud' ]);


Route::get('/test/news', [TestTestController::class , 'getView']);


Route::get('all/products', [AllController::class , 'allProducts']);
Route::get('allnews', [AllController::class , 'allNews']);

//DRY

// Route::get('news/all', [NewsController::class , 'index']);
// Route::get('news/add', [NewsController::class , 'create']);
// Route::get('news/delete', [NewsController::class , 'destroy']);

Route::get('/', function () {
    echo 'welcome from web.php';
});


Route::get(
    'main/home/{name}/{id}',
    function ($name, $id) {

        return view('welcome', compact('name', 'id'));

    }
);

// Route::view('welcome', 'welcome', ['name' => 'ahmed' , 'id' => 5])->middleware('throttle:test');
// Route::view('welcome', 'welcome', ['name' => 'ahmed' , 'id' => 5 , 'age' => 21])->middleware('young');


Route::get('main/age/{age}', function ($age) {
    return view('welcome')->with(['name' => 'ahmed' , 'id' => 20]);
})->middleware('young');


Route::get('name/{name}', [NewsController::class , 'create'])->name('karim');

Route::controller(NewsController::class)->prefix('news')->group(function () {

    Route::get('all/{string}', 'index')->where('string', '.*')->name('ahmed');

    Route::get('add', 'create');
    Route::get('delete', 'destroy');

    // Route::get([
    //     'all' => 'index',
    //     'add' => 'create',
    //     'delete' => 'destroy'
    // ]);
});

Route::post('testCsrf', function () {
    echo " success ";
})->name('cs');

Route::fallback(function () {
    return view('errors.503');
});
