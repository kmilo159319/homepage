@extends('layouts.basic_page')
@section('title',"home")
@section('content')
@include('layouts.header',[
    'item1'=> 'docs',
    'item2'=> 'contact us',
    'item3'=> 'about us',
    'item4'=> 'login',
    'bg' =>'',
    'ref1'=>'/',
    'ref2'=>'/',
    'ref3'=>'',
    'ref4'=>route('/dashboard')
])
@include('layouts.imgheaderwebside')

<div class="container continer-position">
    <div class="row">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="slide">
                    <div class="card">
                        <div class="card__img" id="img1"></div>
                        <div class="card__content">
                            <p class="card__content-theme">dockersize</p>
                            <h2 class="card__content-header">prebuilt packages</h2>
                            <p class="card__content-paragraph">packages built and configured to use in a docker <br> container you only need to enter the main data of your project</p>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>

</div>
<br><br><br><br>
<main class="bg-light">
    <br><br>
<div class="container">
<div class="row justify-content-around  align-items-center">
    <div class="col-5 main">
        <ul>

             <h2>save time</h2>

            <li>
                <h6>
                   Shortens the time to start a fresh  site from 1-3 hours to 3-5 minutes.
                </h6>
            </li>

            <h2>work with docker</h2>
            <li>
            <h6>
                Full dockerized webstack ready for deployment on either dev boxes or docker
                cloud hosts, like Google App Engine.
            </h6>
            </li>
            <h2>reliable security</h2>
            <li>
                <h6>
                    You only have to establish the basic data of your database such as username and password
                </h6>
            </li>
            <h2>you do not need a webserver</h2>
            <li>
                <h6>
                    You can host the entire webiste on CloudFlare and wouldn't even need a webserver
                </h6>
            </li>

        </ul>

    </div>
    <div class="col-7">
        <img src="img/fondo-principal.png" class="img-fluid" alt="Responsive image">
    </div>
</div>
</div>
<br><br><br><br>
</main>
<br><br><br>
@include('layouts.cardsprojects')
@endsection
