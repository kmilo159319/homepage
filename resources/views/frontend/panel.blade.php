@include('layouts.basic_page_without_footer',['title'=> 'my area'])
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

   <div class="col-sm-12 col-md-12 col-xl-4">
       <div class=" text-white">
           <div class="card" style="
           background-color: var(--color8);
           height: auto;
           margin-top:5em
           ">          


<div id="perfil">
 <div class="header" style="background: linear-gradient(to right, hsla(197, 38%, 28%, 0.404), hsla(194, 35%, 19%, 0.548), hsla(198, 43%, 11%, 0.548)), url('https://i.ytimg.com/vi/TN2fJ24pKXs/maxresdefault.jpg');">
   <button class="mui-btn">
     <div class="text">CHANGE PHOTO</div>
     <i class="fa fa-picture-o" aria-hidden="true"></i>
   </button>
 </div>
 <!-- Avatar do Utilizador -->
 <div class="avatar" 
    @if (auth()->user()->profilephoto)
    style="background: url('{{asset('profilephoto')}}');"
    @else    
    style="background: url('{{asset('img/icon-home2.png')}}');"
    @endif>
   <div class="btnImageCam">
     <svg style="width:38px;height:28px;" viewBox="0 0 24 24">
       <path fill="#027c70" d="M4,4H7L9,2H15L17,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20H4A2,2 0 0,1 2,18V6A2,2 0 0,1 4,4M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9Z" />
     </svg>
 </div>
 </div>
 <!-- Título do Perfil -->
 <div class="tituloperfil">
   <!-- Nome do Utilizador -->
   <h1>{{auth()->user()->name}}</h1>
   <div class="bigbriefing">
     <!-- Briefing do Candidato -->
     <p>
       <b>age: </b>38 years <b>|</b>
       <b>city:  </b>bogota <b>|</b>
       <b>item 3:  </b>definition
     </p>
   </div>
 </div>
</div>
           </div>
           <div class="card" style="
           background-color: var(--color8);
           height: 100px;
           margin-top:1em
           ">
           </div>
     </div>
   </div>
   <div class="col-sm-12 col-md-12 col-xl-8">

     <div class="card text-white" style="
         background-color: var(--color8);
         height: auto;
         margin-top:5em;">
       <div class="row justify-content-center ">
         <div class="col-10  m-2 mt-4">
           <input class="inputmyarea" type="text" name="" id="" placeholder=" search">
         </div>
       </div>

      <div class="row justify-content-center ml-1">
         <div class="col-12">
           <ul class="iconspanel row justify-content-around">
             <li class="col-6 col-sm-3 mt-3 mb-3">
               <a href="#">
                 <img src="{{asset('img/offert.png')}}" class="" alt="Responsive image">
                 public</a>
              </li>
             <li class="col-6 col-sm-3 mt-3 mb-3">
               <a href="#">
                 <img src="{{asset('img/uploadfolder.png')}}" class="" alt="Responsive image">
                 upload</a>
             </li>
             <li class="col-6 col-sm-3 mt-3 mb-3">
               <a href="#">
                 <img src="{{asset('img/almanac.png')}}" class="" alt="Responsive image">
                 my meetings</a></li>
             <li class="col-6 col-sm-3 mt-3 mb-3">
               <a href="#">
                 <img src="{{asset('img/more.png')}}" class="" alt="Responsive image">
                 filter</a></li> 
           </ul>
         </div>
       </div>
     </div>

     <div class="col-12 row">
         <div class="col-10 col-md-11 col-sm-11 col-lg-11 col-xl-11" style=" 
         border-bottom: 1px solid var(--color15);
         height: 0;
         line-height: 28px;
         margin:0 0 1px;
         padding-bottom: 15px;
         
         "
         ></div>
        <div class="col-1" style="font-size: 12px; padding-top: 1%; color: var(--color9)">posts</div>
     </div>

     <div class="card mt-3" style="
           background-color: var(--color8);
           height: auto;">
      <div class="card2 row m-3">
        <div class="icon-posts col-2 col-sm-2 col-md-1 col-xl-1" 
             style="background-image: url('{{asset('img/descarga.jpg')}}');">
        </div>
        <div class="col-9 col-sm-10 col-md-11 col-xl-11 justify-content-left p-0 m-0 row text-white">
         <div class="col-10 col-md-11 col-xl-11">
          <h6>empresas del sur sas</h6>
         </div>
         <div class="col-1 justify-content-right m-0 dropdown show">
          <a href="" class="fa-solid fa-ellipsis " id="dropdownMenuLink" data-toggle="dropdown" style=" color:white; text-decoration:none"></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
           <a class="dropdown-item" href="#">Action</a>
           <a class="dropdown-item" href="#">Another action</a>
           <a class="dropdown-item" href="#">Something else here</a>
         </div>
         </div>
         <div class="col-11" style="font-size: 12px;">
           <p>empresa</p>
          </div>
        </div>
      </div>

      <div class="card2 row mt-3 m-1 mb-4">
       <div class="col-12">
          <div class="row justify-content-left text-white">
           <div class="col-8 col-sm-9">
             <h6>
             Lorem ipsum dolor sit 
             </h6>
           </div>
           <div class="col-4 col-sm-3" style="font-size: 9px">
             hace un momento
           </div>
          </div>
       </div>
       <div class="col-12">
         <div class="row text-white">
           <div class="col-12 mt-3" style="font-size: 13px">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
               Eligendi inventore libero culpa dignissimos voluptates totam nihil, 
               assumenda repudiandae porro alias et dolores repellendus dolore reprehenderit
               mollitia, maiores optio distinctio odit!  
           </div>
         </div>
       </div>
        <div class="col-12">
            <div class="row justify-content-end">
               <div class="col-5 col-sm-4 col-md-3 col-xl-3 mt-3">
                 <a href="" class="link-button" style="font-size: 14px">show more.. <i class="fa-solid fa-chevron-right"></i></a>
               </div>
            </div>
        </div>
      </div>
     </div>  
   </div>
 </div>
 </div>
   

