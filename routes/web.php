<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PageDetailController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
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



Route::get('/language/create', LangController::class . '@create')->name('lang.create');
Route::post('/language/create', LangController::class . '@store')->name('lang.store');
Route::get('/language/change', LangController::class . '@change')->name('lang.change');



Route::get('/', function(){
    return redirect()->route('page.show', session()->get('locale'));
});
Route::group(['prefix' => '{lang}', 'middleware' => ['web', 'langManager']
,], function () {

    //Show 404 Page
    Route::get('/404', function () {
        return view('pages.404');
    })->name('404');

    //Show Page
    Route::get('{slug?}', [PageController::class, 'show'])->name('page.show');
    Route::get('{slug}/{slugDetail}', [PageDetailController::class, 'show'])->name('pageDetail.show');
    

    //For Admin
    //Page
    Route::get('/page/create', PageController::class . '@create')->name('page.create');
    Route::post('/page/create', PageController::class . '@store')->name('page.store');

    //Page Detail
    Route::get('/page-detail/create', [PageDetailController::class, 'create'])->name('pageDetail.create');
    Route::post('/page-detail/create', [PageDetailController::class, 'store'])->name('pageDetail.store');
});
