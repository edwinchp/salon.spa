<?php

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


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/

Route::resource('servicios', 'ServiceController');
Route::post('/servicios', 'SaleController@store');
Route::post('/servicios/create', 'ServiceController@store');
Route::post('/sales', 'SaleController@confirmSale');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@storage')->name('cart.store');
Route::resource('/ventas', 'SaleController');
Route::get('/promociones', 'ServiceController@indexOffer');
Route::get('/promociones/create', 'ServiceController@createOffer');
//Route::get('/promociones/$id', 'ServiceController@createOffer');
//Route::post('/promociones/create', 'ServiceController@store');



Route::get('/sales', function(){
    $service = App\Service::findOrFail(1);
    $sale = App\Sale::findOrFail(1);
    $sale_services = App\Sale::findOrFail(1)->services;
    

    foreach($sale_services as $s){
        echo $s->pivot->service_price . "<br>";
    }
    
    
} );