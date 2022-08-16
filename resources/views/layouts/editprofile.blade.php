<div class="content-container">
    <div class="content">
      @include('layouts.imgheaderblue',['title' => 'personal information'])
      <div class="display">
          <div class="card2 ml-3 row text-primary" style="width: 20%; height: auto;">
            <div class="col-12">
              <h3>basic information</h3>
              <h3>basic information</h3>
              <h3>basic information</h3>
              <h3>basic information</h3>
            </div>
          </div>
          <form class="edit_data  ml-4 mr-4 bg-white row justify-content-center">
            <div class="col-10 mt-4 mb-4">
              <h3>basic information</h3>
            </div>
            <div class="veen-2 col-5 mt-2 mb-2">
                <input type="text" name="email" id="email" type="email" :value="old('email')" required autofocus >
                <label>{{__('Email')}}</label>
            </div>
            <div class="veen-2 col-5 mt-2 mb-2">
                <input type="text" name="email" id="email" type="email" :value="old('email')" required autofocus >
                <label>{{__('Email')}}</label>
            </div>
          </form>
      </div>
    </div>
  </div>
