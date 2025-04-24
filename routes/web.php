<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Mail2Controller;
use App\Http\Controllers\LanguageController;

Route::get('language/{locale}', [LanguageController::class, 'switchLanguage'])->name('language.switch');


Route::get('/', function () 
{
    return view('frontend/index');
});

Route::view('/index', 'frontend.index');

Route::get('/hakkimizda', function () {
    return view('frontend/hakkimizda');
});
Route::get('/misyon-vizyon', function () {
    return view('frontend/misyon-vizyon');
});
Route::get('/kalite-yonetimi', function () {
    return view('frontend/kalite-yonetimi');
});

Route::get('/rulo-sarim', function () {
    return view('frontend/rulo-sarim');
});
Route::get('/pecete-grubu', function () {
    return view('frontend/pecete-grubu');
});
Route::get('/paketleme', function () {
    return view('frontend/paketleme');
});
Route::get('/ikinci-el', function () {
    return view('frontend/ikinci-el');
});

Route::get('/yedek-parca', function () {
    return view('frontend/yedek-parca');
});

Route::get('/movablejaw-skh650', function () {
    return view('frontend/urunler/movablejaw-skh650');
});
Route::get('/automaticlcut-t450', function () {
    return view('frontend/urunler/automaticlcut-t450');
});
Route::get('/papertowel-shrink', function () {
    return view('frontend/urunler/papertowel-shrink');
});
Route::get('/ducttape-shrink', function () {
    return view('frontend/urunler/ducttape-shrink');
});
Route::get('/frontfeeding-shrink', function () {
    return view('frontend/urunler/frontfeeding-shrink');
});
Route::get('/sidefeeding-shrink', function () {
    return view('frontend/urunler/sidefeeding-shrink');
});
Route::get('/fuarlar', function () {
    return view('frontend/fuarlar');
});

Route::get('/haberler', function () {
    return view('frontend/haberler');
});

Route::get('/teknik-servis', function () {
    return view('frontend/teknik-servis');
});
Route::get('/iletisim', function () {
    return view('frontend/iletisim');
});

Route::post('ariza', [MailController::class, 'mail']);
Route::post('mail2', [MailController::class, 'mail']);
