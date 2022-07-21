@extends('layouts.basic_page_without_footer')
@section('title',"editprofile")
@section('content')
@include('layouts.header',[
    'item1'=> 'edit profile',
    'item2'=> 'my area',
    'item3'=> 'principal page',
    'item4'=> 'logout',
    'bg' =>'bg-dark',
    'ref1'=>route('user.edit',auth()->user()),
    'ref2'=>route('user.show',auth()->user()->id),
    'ref3'=>route('home'),
    'ref4'=> route('homepage') ])
    <section id="contenido">
    @include('layouts.editprofile')
    </section>
@endsection
