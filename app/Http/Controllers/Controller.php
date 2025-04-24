<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    // Dil değiştirme fonksiyonu
    public function setLanguage($lang)
    {
        app()->setLocale($lang);
        session()->put('locale', $lang);
        return back();
    }

    public function index()
{
    $lang = app()->getLocale(); // Aktif dili al (tr/en/ru)
    return view("{$lang}.index");
}

    // Ana sayfa görünümü
    public function home()
    {
        return view(app()->getLocale().'.index');
    }
}