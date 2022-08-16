@include('layouts.basic_page_without_footer',['title'=> 'my area'])
@section('content')
@include('layouts.header',[
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
        <div class="row col-12">
            <div class="" style="
            background-color: var(--color8);
            height: auto;
            margin-top:5em
            ">
            <div id="perfil">
              <div class="header" style="background: linear-gradient(to right, hsla(197, 38%, 28%, 0.404), hsla(194, 35%, 19%, 0.548), hsla(198, 43%, 11%, 0.548)), url('https://i.ytimg.com/vi/TN2fJ24pKXs/maxresdefault.jpg'); height:15rem; border-radius: 10px;">
                <button class="mui-btn">
                  <div class="text">CHANGE PHOTO</div>
                  <i class="fa fa-picture-o" aria-hidden="true"></i>
                </button>
              </div>
              <!-- Avatar do Utilizador -->
              <div class="avatar" style="height: 220px; width: 220px; top:-2rem">
                <div class="btnImageCam">
                  <svg style="width:38px;height:28px;" viewBox="0 0 24 24">
                    <path fill="#027c70" d="M4,4H7L9,2H15L17,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20H4A2,2 0 0,1 2,18V6A2,2 0 0,1 4,4M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9Z" />
                  </svg>
              </div>
              </div>
              <!-- Título do Perfil -->
              <div class="tituloperfil">
                <!-- Nome do Utilizador -->
                <h1 style="font-size: 25px">Carlos Rogério Ferreira Leite</h1>
                <div class="bigbriefing">
                  <!-- Briefing do Candidato -->
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
      <div class="col-3 mt-4 m-4">
        @include('layouts.progress_bar')
      </div>

      <div class="col-3 mt-4 m-4">
        @include('layouts.progress_bar')
      </div>
      <div class="col-3 mt-4 m-4">
        @include('layouts.progress_bar')
      </div>

    </div>
    <div class="col-12">
      <div class="row mt-4 mb-4 col-12 justify-content-start">
        <a  href="{{route('user.edit',auth()->user())}}" class="card row justify-content-center col-5 m-2" style="
        background-color: var(--color8);
        text-decoration:none;
        height: 220px;
        ">
          <div class="col-6 mt-0 ">
            <img src="{{asset('img/editprofile.png')}}" class="imgr" alt="responsive" style="	width:110%; height:120%; right:2rem; top:-1rem">
          </div>
          <div class="col-6 mt-5" style="color:#93A2AC">
            <h3>my jobs aplications</h3>
          </div>
        </a>
        <a class="card row justify-content-center col-5 m-2" style="
        background-color: var(--color8);
        height: 220px;
        ">
          <div class="col-6 mt-0 ">
            <img src="{{asset('img/recentposts.png')}}" class="imgr" alt="responsive" style="	width:140%; height:125%; right:2rem; top:-2rem">
          </div>
          <div class="col-6 mt-5" style="color:#93A2AC">
            <h3>update my personal data</h3>
          </div>
        </a>
       </div>
    </div>
    <div class="col-12">
      <div class="row mt-5 mb-5 col-12 justify-content-start">
        <div class="card row justify-content-center col-5 m-2" style="
        background-color: var(--color8);
        height: 220px;
        ">
          <div class="col-6 mt-0 ">
            <img src="{{asset('img/uploadfiles.png')}}" class="imgr" alt="responsive" style="	width:99%; height:120%; right:2rem; top:-2rem">
          </div>
          <div class="col-6 mt-5" style="color:#93A2AC">
            <h3>upload files</h3>
          </div>
        </div>
        <div class="card row justify-content-center col-5 m-2" style="
        background-color: var(--color8);
        height: 220px;
        ">
          <div class="col-6 mt-0 ">
          </div>
          <div class="col-6 mt-5" style="color:#93A2AC">
            <h3></h3>
          </div>
        </div>
       </div>
    </div>
  </div>

</div>
