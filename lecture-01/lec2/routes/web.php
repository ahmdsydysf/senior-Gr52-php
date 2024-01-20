<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\Proto\ProtoController;
use App\Http\Controllers\Test\NewsController;
use App\Http\Controllers\Test\ProductsController;
use App\Http\Controllers\Test\TestController as TestTestController;
use App\Http\Controllers\Test\UserController;
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


Route::get('proto', [ProtoController::class , 'index']);
Route::get('proto/contact-us', [ProtoController::class , 'contact'])->name('contact-us');

Route::get('user/test/invo', UserController::class);


Route::resource('ahmed', ProductsController::class)->names(['create' => 'Ahmed.make']);
// Route::resource('ahmed', ProductsController::class)->except('show');
// Route::resource('ahmed', ProductsController::class)->only('show');


// Route::resources(
//     [
// 'product' => ProductsController::class,
// 'user' => UserController::class
// ],
//     [
//         'except' => ["product" => "index"],
//         'names' => ["product" => ['create' => 'pp'] ]
// ],
// );

Route::get(
    'main/home/{name}/{id}',
    function ($name, $id) {

        return view('welcome', compact('name', 'id'));

    }
);

// Route::view('welcome', 'welcome', ['name' => 'ahmed' , 'id' => 5])->middleware('throttle:test');
// Route::view('welcome', 'welcome', ['name' => 'ahmed' , 'id' => 5 , 'age' => 21])->middleware('young');


Route::get('users/user/{id}', [AllController::class , 'allUsers']);



Route::get('main/age/{age}', function ($age) {
    return view('welcome')->with(['name' => 'ahmed' , 'id' => 20 , 'myage' => $age]);
});

// http://127.0.0.1:8000/all/controller?name=sayed&age=50
// Route::get('all/{name}/controller/{age}', [AllController::class , 'index'])->name('all');
Route::get('all/controller', [AllController::class , 'index'])->name('all');


Route::get('user/age/{age}', function ($age) {
    return "this is another age == $age";
})->name('user_age');


Route::get('name/{name}', [NewsController::class , 'create'])->name('karim');

Route::middleware('young')->controller(NewsController::class)->prefix('news')->as('news.')->group(function () {

    Route::get('all/{string}', 'index')->where('string', '.*')->name('one');

    Route::get('add', 'create')->name('two')->withoutMiddleware('young');
    Route::get('delete', 'destroy')->name('there');

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
