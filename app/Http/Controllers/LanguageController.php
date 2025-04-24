<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switch($lang)
{
    if (!in_array($lang, ['tr', 'en', 'ru'])) {
        abort(404);
    }

    session()->put('locale', $lang);
    return redirect()->route('localized.index', ['lang' => $lang]);
}

}