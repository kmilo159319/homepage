@extends('layouts.basic_page_without_footer')
@section('title',"my area")
@section('content')
@include('layouts.header',[
    'item1'=> 'edit profile',
    'item2'=> 'my area',
    'item3'=> 'home',
    'item4'=> 'logout',
    'bg' =>'navbar-app',
    'ref1'=>route('user.edit',auth()->user()),
    'ref2'=>route('user.show',auth()->user()->id),
    'ref3'=>route('/dashboard'),
    'ref4'=> route('login') ])


<div class="container" id="">
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-5">
        <div class="row">
            <div class="card2 justify-content-center" style="
            background-color: var(--color12);
            height: 200px;
            margin-top:5em
            ">
                    <div class="row card3" style="
                    background-color: var(--color4);
                    height: 30%;
                    width: 104.8%;
                    border-radius: 5px 5px 0px 0px;
                    ">
                    </div>
            </div>
            <div class="card" style="
            background-color: var(--color8);
            height: 400px;
            margin-top:0.5em;
            margin-bottom:1.5em
            ">
            </div>
      </div>
    </div>
    <div class="col-md-2 ml-3">

        <div class="row">
            <div class="card" style="
            background-color:var(--color8);
            height: 10rem;
            margin-top:5em
            ">
            </div>

            <div class="card" style="
            background-color: var(--color12);
            height: 100px;
            margin-top:1rem
            ">
            </div>
        </div>

    </div>
  </div>

</div>
