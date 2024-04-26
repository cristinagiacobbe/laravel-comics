@extends('layouts.app')

@section('content')

<main>
    <div class="container">
        <span class="title">CURRENT SERIES</span>
        <div class="row">
            @foreach($comics as $comic)

            <div class="col-2">
                <a href="{{route('single')}}"> <img src="{{$comic['thumb']}}" alt=""></a>
                <p>{{$comic['title']}}</p>
            </div>

            <?php $filter_comic = ($comic['title']) ?>
            <p>{{$filter_comic}}</p>
            @endforeach
        </div>
    </div>
    <button>
        <p class="load">LOAD MORE</p>
    </button>
</main>

<div class="banner">
    <div class="banner-container">
        @foreach($banners as $banner)
        <img src="{{ Vite::asset($banner['icon']) }}" alt="" width="40" height="50">
        <span>{{$banner['text']}}</span>
        @endforeach
    </div>
</div>

@endsection