<div class="content-container">
    <div class="content">
      @include('layouts.imgheaderblue',['title' => 'personal information'])
      <div class="display">
          <div class="card2 ml-3 row text-primary" style="width: 20%; height: auto;">
            <div class="col-12">
            </div>
          </div>
            <form action="" class="edit_data mb-5 ml-4 mr-4 bg-white row justify-content-center"> 
            <div class="col-10 mt-5 mb-4">
              <h3>Basic information</h3>
            </div>
            <div class="veen-2 col-5 mt-3 mb-2">
                <input type="text" name="email" id="email" type="email" :value="old('email')" required autofocus >
                <label>First name</label>
            </div>
            <div class="veen-2 col-5 mt-3 mb-2">
                <input type="text" name="email" id="email" type="email" :value="old('email')" required autofocus >
                <label>last name</label>
            </div>
            <div class="veen-2 col-5 mt-5 mb-2">
              <input type="text" name="email" id="email" type="email" :value="old('email')" required autofocus >
              <label>Adress</label>
          </div>
          <div class="veen-2 col-5 mt-5 mb-2">
              <input type="text" name="email" id="email" type="email" :value="old('email')" required autofocus >
              <label>{{__('Email')}}</label>
          </div>
          <div class="veen-2 col-5 mt-5 mb-2">
            <input type="text" name="email" id="email" type="email" :value="old('email')" required autofocus >
            <label>{{__('Email 2')}}</label>
        </div>
        <div class="veen-2 col-3 mt-5 mb-2">
          <input type="text" name="email" id="email" type="email" :value="old('email')" required autofocus >
          <label>{{__('country')}}</label>
      </div>
      <div class="veen-2 col-2 mt-5 mb-2">
        <input type="text" name="email" id="email" type="email" :value="old('email')" required autofocus >
        <label style="left: 12%">{{__('city')}}</label>
    </div>

          <div class="veen-2 col-3 mt-5 mb-2">
            <input type="text" name="email" id="email" type="email" :value="old('email')" required autofocus >
            <label>Phone Number 1</label>
        </div>
        <div class="veen-2 col-3 mt-5 mb-2">
            <input type="text" name="email" id="email" type="email" :value="old('email')" required autofocus >
            <label>Phone Number 2</label>
        </div>
        <div class="veen-2 col-2 mt-5 mb-2">
          <input type="text" name="email" id="email" type="email" :value="old('email')" required autofocus >
          <label style="left: 10%">year</label>
          <h6 style="position: relative; top: -110%; left:50%">Date of birth</h6>
      </div>
      <div class="veen-2 col-1 mt-5 mb-2">
        <input type="text" name="email" id="email" type="email" :value="old('email')" required autofocus >
        <label style="left: 22%">mount</label>
    </div>
    <div class="veen-2 col-1 mt-5 mb-2">
      <input type="text" name="email" id="email" type="email" :value="old('email')" required autofocus >
      <label style="left: 30%">day</label>
  </div>
  <div class="col-8 mt-3 mb-5">
  </div>
  <div class="col-2 mt-3 mb-5">
    <button class="link-button" style="font-size: 23px">update <i class="fa-solid fa-arrows-rotate"></i></button>
  </div>
  </form>
      </div>
      <div class="display">  
        <div class="card2 ml-3 row text-primary" style="width: 20%; height: auto;">
        </div> 
        <a  href="" class="edit_data mb-5 ml-4 mr-4 bg-white row justify-content-center">
          <div class="col-1 mt-3 mb-0">
            <p class="fa-solid fa-circle-plus icon-add"></p>
          </div>
          <div class="col-9 mt-4 mb-0">
            <h4 style="color: var(--color1)">add work experience</h4>
          </div>
        </a>  
    </div>
    <div class="display">  
      <div class="card2 ml-3 row text-primary" style="width: 20%; height: auto;">
      </div> 
      <a  href="" class="edit_data mb-5 ml-4 mr-4 bg-white row justify-content-center">
        <div class="col-1 mt-3 mb-0">
          <p class="fa-solid fa-circle-plus icon-add"></p>
        </div>
        <div class="col-9 mt-4 mb-0">
          <h4 style="color: var(--color1)">add studies performed</h4>
        </div>
      </a>  
  </div>
    </div>
  </div>










