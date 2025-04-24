<?php

namespace App\Http\Controllers; // Bu satır kritik!

use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index($locale)
{
    return view("frontend.{$locale}.index");
}
}