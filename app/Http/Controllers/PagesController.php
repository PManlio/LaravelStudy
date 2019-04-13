<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {

      $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to work',
        'Go to university',
        'Go to idk'
      ];

      return view('welcome')->withTasks($tasks)->withFoo('my first Laravel'); // 'my first Laravel' verrà messo nella section {!! $foo !!}
    }

    public function contact() {
      return view('contact');
    }

    public function about() {
      return view('about');
    }
}
