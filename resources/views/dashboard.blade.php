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
    'ref4'=> route('logout') ])


<div class="container" id="">
  <div class="row">
    <div class="row col-md-11">
        <div class="col-12">
            <div class="" style="
            background-color: var(--color8);
            height: auto;
            margin-top:5em
            ">
            <div id="perfil">
              <div class="header" style="background-image: url('https://i.ytimg.com/vi/TN2fJ24pKXs/maxresdefault.jpg'); height:15rem; border-radius: 10px;">
                <button class="mui-btn">
                  <div class="text">CHANGE PHOTO</div>
                  <i class="fa fa-picture-o" aria-hidden="true"></i>
                </button>
              </div>
              <!-- avatar -->
              <div class="avatar" style="height: 220px; width: 220px; top:-2rem">
                <div class="btnImageCam">
                  <svg style="width:38px;height:28px;" viewBox="0 0 24 24">
                    <path fill="#027c70" d="M4,4H7L9,2H15L17,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20H4A2,2 0 0,1 2,18V6A2,2 0 0,1 4,4M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9Z" />
                  </svg>
              </div>
              </div>
              <!-- profile tittle -->
              <div class="tituloperfil">
                <!-- user name -->
                <h1>Carlos Rogério Ferreira Leite</h1>
                <div class="bigbriefing">
                  <!-- candidate information -->
                  <p style="font-size: 16px" >
                    <b>age: </b>38 years <b>&nbsp; &nbsp;|</b>
                    <b>city:  </b>bogota <b>&nbsp; &nbsp;|</b>
                    <b>item 3:  </b>definition
                  </p>
                </div>
              </div>
             </div>
            </div>
      </div>

      <div class="col-3">

      </div>


    </div>

    <div class="col-12">
      <div class="row mt-4 col-12 justify-content-start">
        <div class="card justify-content-center col-5 m-2" style="
        background-color: var(--color8);
        height: 220px;
        ">
        </div>
        <div class="card justify-content-center col-5 m-2" style="
        background-color: var(--color8);
        height: 220px;
        ">
        </div>
       </div>
    </div>
    <div class="col-12">
      <div class="row mt-4 col-12 justify-content-start">
        <div class="card justify-content-center col-5 m-2" style="
        background-color: var(--color8);
        height: 220px;
        ">
        </div>
        <div class="card justify-content-center col-5 m-2" style="
        background-color: var(--color8);
        height: 220px;
        ">
        </div>
       </div>
    </div>
  </div>

</div>



<!--  Defining Angle Gradient Colors  -->
<svg width="0" height="0">
  <defs>
  <linearGradient id="cl1" gradientUnits="objectBoundingBox" x1="0" y1="0" x2="1" y2="1">
      <stop stop-color="#618099"/>
      <stop offset="100%" stop-color="rgb(69, 85, 110)"/>
  </linearGradient>
  <linearGradient id="cl2" gradientUnits="objectBoundingBox" x1="0" y1="0" x2="0" y2="1">
      <stop stop-color="rgb(69, 85, 110)"/>
      <stop offset="100%" stop-color="rgb(69, 85, 110)"/>
  </linearGradient>
  <linearGradient id="cl3" gradientUnits="objectBoundingBox" x1="1" y1="0" x2="0" y2="1">
      <stop stop-color="rgb(69, 85, 110)"/>
      <stop offset="100%" stop-color="#498a98"/>
  </linearGradient>
  <linearGradient id="cl4" gradientUnits="objectBoundingBox" x1="1" y1="1" x2="0" y2="0">
      <stop stop-color="#498a98"/>
      <stop offset="100%" stop-color="rgb(58, 72, 94)"/>
  </linearGradient>
  <linearGradient id="cl5" gradientUnits="objectBoundingBox" x1="0" y1="1" x2="0" y2="0">
      <stop stop-color="rgb(58, 72, 94)"/>
      <stop offset="100%" stop-color="rgb(69, 85, 110)"/>
  </linearGradient>
  <linearGradient id="cl6" gradientUnits="objectBoundingBox" x1="0" y1="1" x2="1" y2="0">
      <stop stop-color="rgb(69, 85, 110)"/>
      <stop offset="100%" stop-color="#618099"/>
  </linearGradient>
  </defs>
  </svg>



  