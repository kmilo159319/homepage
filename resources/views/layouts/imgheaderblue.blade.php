<div class="image-nav-blue" style="background: linear-gradient(to right, hsla(197, 38%, 28%, 0.404), hsla(194, 35%, 19%, 0.548), hsla(198, 43%, 11%, 0.548)), url('https://i.ytimg.com/vi/TN2fJ24pKXs/maxresdefault.jpg');">
    <br><br><br>    
  <div class=" text-white">
    <div class="row">
        <div class="col-3 mt-1">
            <div class="avatar" 
               @if (auth()->user()->profilephoto)
               style="background: url('{{asset('profilephoto')}}'); width: 12rem; height:12rem; top:5rem;"
               @else    
               style="background: url('{{asset('img/icon-home2.png')}}'); width: 12rem; height:12rem; top:5rem;"
               @endif>
                <div class="btnImageCam">
                  <svg style="width:38px;height:28px;" viewBox="0 0 24 24">
                    <path fill="#027c70" d="M4,4H7L9,2H15L17,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20H4A2,2 0 0,1 2,18V6A2,2 0 0,1 4,4M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9Z" />
                  </svg>
              </div>
              </div>
        </div>
        <div class="col-6 ml-1 mt-5">
            <h1 style="font-size: 3rem" >{{$title}}</h1>
        </div>
        </div>
  </div>
    <div style="height: 100%; overflow: hidden;" >
      <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 70%; width: 100%;">
       <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: white;">
       </path>
      </svg>
    </div>
</div>
  