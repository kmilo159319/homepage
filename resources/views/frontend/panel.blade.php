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
    <div class="col-md-2">
    </div>
    <div class="col-md-2">
        <div class="row">
            <div class="card" style="
            background-color: var(--color12);
            height: 300px;
            margin-top:5em
            ">
            </div>
            <div class="card" style="
            background-color: var(--color8);
            height: 100px;
            margin-top:1em
            ">
            </div>
      </div>
    </div>
    <div class="col-md-5">

      <div class="card" style="
          background-color: var(--color8);
          height: auto;
          margin-top:5em;">
        <div class="row justify-content-center">
          <div class="col-10 mt-3 md-5">
            <input class="inputmyarea" type="text" name="" id="" placeholder="  searh">
          </div>

          <div class="col-3 mt-2 ">
            <div class="items-var-myarea">
               <p style="font-size: 12px">item 1</p>
            </div>
          </div>

          <div class="col-3 mt-2 ">
            <div class="items-var-myarea">
               <p style="font-size: 12px">item 1</p>
            </div>
          </div>

          <div class="col-3 mt-2 ">
            <div class="items-var-myarea">
               <p style="font-size: 12px">item 1</p>
            </div>
          </div>

          <div class="col-3 mt-2 ">
            <div class="items-var-myarea">
               <p style="font-size: 12px">item 1</p>
            </div>
          </div>

        </div>
      </div>

      <div class="card" style="
            background-color: var(--color8);
            height: 15rem;
            margin-top:0.5em;">
      </div>

      <div class="card" style="
            background-color: var(--color8);
            height: 15rem;
            margin-top: 0.5em;">
      </div>

      <div class="card" style="
            background-color: var(--color8);
            height: 15rem;
            margin-top: 0.5em;">
      </div>

    </div>

    <div class="col-md-2">

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
