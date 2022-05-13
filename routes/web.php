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
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('merhaba',function(){
    return "Merhaba";
});

Route::get('api/v1/merhaba',function(){
    return ['mesaj'=>'Merhaba'];
});
Route::get('/urun/{isim}/{id?}',function($urunadi,$id=0){
   return "Ürün Adı: $id $urunadi";
})->name('urun_detay');

Route::get('/kampanya',function (){
   return redirect()->route('urun_detay', ['isim'=>'elma', 'id'=>5]);
});
Route::get('/kampanya1/{name}/{yas}',function ($name,$yas){
   return "feride34: ".$name. " yas:".$yas;
})->name('feride');

Route::get('/kampanya2',function (){
    return redirect()->route('feride',['name'=>'Nurullah', 'yas'=>26]);
});

