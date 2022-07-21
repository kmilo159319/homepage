<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticWebController extends Controller
{
    public function index(){
        return view('frontend.index');
      }

      public function laravel(){
          return view('frontend.laravelwebside');
      }

      public function symfony(){
          return view('frontend.symfonyweb');
      }
      public function phpreact(){
        return view('frontend.phpreactweb');
      }
      public function Swoole(){
        return view('frontend.swooleweb');
      }

      public function get_into(){
        return view('frontend.homepage');
      }
}
