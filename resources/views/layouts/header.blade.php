<nav class=" p-1 navbar navbar-expand-md fixed-top {{$bg}}" id="navbar-r">
  <div class="container">
    <a class="navbar-brand" href="#"><s class="fisrtbrand">PHP</s>Experts.pro &nbsp; &nbsp; &nbsp;</a>

    @if (Route::has('login'))
      @auth
            <a  style="color:#00C4B0; font-size:12px;">
               @if (auth()->user()->name == 'cristian')
               <img src="{{auth()->user()->avatar}}" class="avatar-size" alt="">
               {{ auth()->user()->name}}</a>
               @else
               <img src="{{asset('img/icon-home1.png')}}" class="avatar-size" alt="">
               {{ auth()->user()->name}}</a>
               @endif
      @endauth
    @endif

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span>
        <i class="fas fa-bars"></i>
      </span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ml-3">
          <a class="nav-link" href="{{$ref2}}" id="letter"><i class="fa-solid fa-layer-group"></i>&nbsp;{{$item2}}</a>
        </li>
        <li class="nav-item ml-3">
          <a class="nav-link" href="{{$ref3}}" id="letter"><i class="fa-solid fa-house-chimney-crack"></i>&nbsp;{{$item3}}</a>
        </li>
        <li class="nav-item ml-3">
          <a class="nav-link" href="{{$ref4}}" id="letteron"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;{{$item4}}</a>
        </li>
        <li class="nav-item ml-3">
          <a class="nav-link mt-1" href="{{$ref1}}" id="letter"><i class="fa-solid fa-bell"></i></a>
        </li>
        <li class="nav-item ml-3">
          <a class="nav-link mt-1" href="{{$ref1}}" id="letter"><i class="fa-solid fa-comments"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>



