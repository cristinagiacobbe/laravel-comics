@extends('layouts.app')

@section('content')

<main>
    <div class="container">
        <span class="title">CURRENT SERIES</span>
        <div class="row">
            @foreach($comics as $comic)

            <div class="col-2">
                <img src="{{$comic['thumb']}}" alt="">
                <p>{{$comic['title']}}</p>
            </div>
            @endforeach
        </div>
    </div>
    <button>
        <p class="load">LOAD MORE</p>
    </button>
</main>

@yield('banner')

@endsection