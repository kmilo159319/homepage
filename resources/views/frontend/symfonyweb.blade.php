@extends('layouts.basic_page')
 @section('title',"laravel")
  @section('content')
  @include('layouts.header',[
    'item1'=> 'docs',
    'item2'=> 'contact us',
    'item3'=> 'register',
    'item4'=> 'login',
    'bg' =>'',
    'ref1'=>'/',
    'ref2'=>'/',
    'ref3'=>route('home'),
    'ref4'=>route('login')
])
  @include('layouts.imgheader')
     @include('layouts.instructiontoinstall',['img'=>'img/symfony2.png'])
      @include('layouts.cardsprojects')
 @endsection
