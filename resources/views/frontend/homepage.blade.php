@extends('layouts.basic_page')
@section('title',"homepage")
@section('content')
@include('layouts.header',[
    'item1'=> 'docs',
    'item2'=> 'contact us',
    'item3'=> 'home',
    'item4'=> 'login',
    'bg' =>'',
    'ref1'=>'',
    'ref2'=>'',
    'ref3'=>'',
    'ref4'=>''
])


@include('layouts.imgheader')]


 <div class="container continer-position">

    <div class="row justify-content-start align-items-center">
      <div class="col-6">
        <div class="col d-flex align-items-start">
          <div class="veen">
            <div class="login-btn splits">
                <p>do you have an ccount?</p>
                <button class="dark" id="btn-dark">Login</button>
            </div>
            <div class="rgstr-btn splits">
                <p>Don't have an account?</p>
                <button class="dark" id="btn-dark">Register</button>
            </div>
            <div class="wrapper">

              <!--------------- login ---------------------->

                <form method="POST" action="{{ route('login') }}" id="loginForm" tabindex="500">
                    @csrf
                    <h3>Login</h3>
                    <div class="mail">
                        <input type="text" name="email" id="email" type="email" :value="old('email')" required autofocus >
                        <label>{{__('Email')}}</label>
                    </div>
                    <div class="passwd">
                        <input type="password" name="password" id="password-login" required autocomplete="current-password">
                        <label>{{__('Password')}}</label>
                    </div>
             <!-- forgot password -->

                    @if (Route::has('password.request'))
                    <a class="name forgetpass" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

              <!-- Remember Me -->

              <div class="checkbox">
                    <input id="rememberme" type="checkbox" class="" name="remember">
                    <label class="">{{ __('Remember me') }}</label>
            </div>

              <!-- submit-->

                    <div class="submit">
                        <button type="submit" class="dark" id="click-login">{{ __('Log in') }}</button>
                    </div>


                </form >

              <!--------------- register ---------------------->

                <form method="POST" action="{{ route('register') }}" class="createuser_" id="register" tabindex="502">
                    @csrf
                    <h3>Register</h3>
                    <div class="name">
                        <input type="text" name="name" id="name">
                        <label>{{__('Name')}}</label>
                    </div>
                    <div class="mail">
                        <input type="email" name="email" id="email" :value="old('email')" required>
                        <label>{{__('Email')}}</label>
                    </div>
                    <div class="passwd">
                        <input type="password" name="password" required autocomplete="new-password">
                        <label>{{__('Password')}}</label>
                    </div>
                    <div class="passwd">
                        <input type="password" name="password_confirmation" required >
                        <label>{{__('Confirm Password')}}</label>
                    </div>
                    <div class="submit">
                        <button type="submit" class="dark">{{ __('Register') }}</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
      </div>
        <div class="col-6">
            <div class="singin_with">
                <div class="veen-2">
                    <div class="continer_buttom">
                        <br>
                        <h3>Sign in with</h3>
                        <br>
                        @include('layouts.button',[
                            'url' => 'img/logogoogle.png',
                            'tittle' => 'google',
                            'url2'=>'login'
                        ])
                        @include('layouts.button',[
                            'url' => 'img/github.png',
                            'tittle' => 'github',
                            'url2'=>'login'
                        ])
                        @include('layouts.button',[
                            'url' => 'img/linkelink.png',
                            'tittle' => 'linkedin',
                            'url2'=>'login'
                        ])
                        @include('layouts.button',[
                            'url' => 'img/stack.png',
                            'tittle' => 'StackExchange',
                            'url2'=>'login'
                        ])

                    </div>
                </div>
            </div>

        </div>
    </div>
  </div>
@endsection
