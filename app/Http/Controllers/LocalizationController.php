<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Post;

class LocalizationController extends Controller
{
    public function index()
    {
        $locale = App::currentLocale();
        $data = Post::where('lang', $locale)->get();
        return view('welcome', ['data' => $data]);
    }
    
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

}
