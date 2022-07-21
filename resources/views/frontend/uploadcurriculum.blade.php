@extends('layouts.basic_page_without_footer')
@section('title',"upload curriculum")
@section('content')
@include('layouts.header',[
    'item1'=> 'edit profile',
    'item2'=> 'my area',
    'item3'=> 'principal page',
    'item4'=> 'logout',
    'bg' =>'bg-dark',
    'ref1'=>route('user.edit',auth()->user()),
    'ref2'=>route('user.show',auth()->user()->id),
    'ref3'=>route('login'),
    'ref4'=> route('login') ])

<section id="contenido">
    <div class="row justify-content-start">
  <div class="col-6">
<form method="POST"  class="uploadcurriculum option" action="{{ route('curriculum.store')}}"  enctype="multipart/form-data">
    @csrf
   <div class="tittleform">
       <span>save curriculum</span>
   </div>
   <div class="row">
    <div class="tittleoutput">
        <label>{{__('description:')}}</label>
      </div>
      <div class="continerinput">
        <input class="input" type="text" placeholder="insert description" name='description'  required/>
        <a>{{__('name archive')}}</a>
      </div>
   </div>
   <div class="row">
    <div class="tittleoutput">
        <label>{{__('upload:')}}</label>
      </div>
        <div class="continerinput">
            <input class="input" id="pdffFile" name= "pdfurl" type="file" required/>
            <embed id="file" type="application/pdf" height="250">
            <a>{{__('archive')}}</a>
          </div>

        <div class="tittleoutput">
            <button type="submit" class="btnform">{{ __('Register') }}</button>
          </div>
   </div>
  </form>
 </div>

 <div class="col-4">
    <div class="uploadlist option" action="">
        <div class="tittleform">
            <span>archives uploaded</span>
        </div>
       @foreach ($files as $item)
       <div class="pdfcurriculum veen-2">
        <form method="post" action="{{route('curriculum.destroy',auth()->user()->id)}}">
            @csrf
            @method('DELETE')
           <input type="submit" value=" " class="delete">
        </form>
        <a href="{{asset($item->pdfurl)}}" target="_blank">
            <img src="{{asset('img/pdf.png')}}" class="img-fluid" alt="Responsive image">
            <h2 class="">{{$item->description}}</h2>
        </a>
    </div>
       @endforeach
        </div>
      </div>

 <div class="col-4">

      </div>
</div>
</section>
@endsection
