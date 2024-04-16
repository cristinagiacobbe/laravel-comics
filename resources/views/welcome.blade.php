@extends('layouts.app')

@section('content')


<div class="container">
    <h1>CURRENT SERIES</h1>
    <div class="row">
        @foreach($comics as $comic)

        <div class="col-2">
            <img src="{{$comic['thumb']}}" alt="">
            <p>{{$comic['title']}}</p>
        </div>


        @endforeach
    </div>
</div>







@endsection