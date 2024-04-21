<!-- @extends('layouts.app') -->

@section('banner')

<div class="container">


    @foreach($banners as $banner)


    <img src="{{$banner['icon']}}" alt="">
    <span>{{$banner['text']}}</span>

    @endforeach

</div>



@endsection