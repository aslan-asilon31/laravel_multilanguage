<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Post;

class WelcomeController extends Controller
{
    public function index()
    {
        $locale = App::currentLocale();
        $data = Post::where('lang', $locale)->get();
        
        return view('about', ['data' => $data]);
    }


    
}
