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

@include('layouts.editprofile');

</div>














   

