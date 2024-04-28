@extends('layouts.app')

@section('content')

@foreach ($filtered as $item)
<div class="blue-strip">
    <div class="container">
        <img src="{{$item['thumb']}}" alt="" width="150" height="200">
    </div>
</div>

<section class="top-card">
    <div class="d-flex w70">
        <div class="card-table">
            <h3>{{$item['title']}}</h3>
            <table>
                <thead>
                    <tr>
                        <td class="sinistra">U.S. PRICE: {{$item['price']}}</td>
                        <td class="centro">AVALAIBLE</td>
                        <td class="destra">Check Avalaibility</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3">
                            <p>{{$item['description']}}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-image">
            <h5>ADVERTISEMENT</h5>
            <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="" width="300" height="300">
        </div>
    </div>
</section>

<section class="bottom-card">
    <div class="d-flex w70">
        <table>
            <thead>
                <tr>
                    <td class="table-title">Talent</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Art by</td>
                    <td class="text-primary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, repudiandae!</td>
                </tr>
                <tr>
                    <td>Written by</td>
                    <td class="text-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, adipisci.</td>
                </tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <td class="table-title">Specs</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Series</td>
                    <td class="text-primary">{{$item['series']}}</td>
                </tr>
                <tr>
                    <td>U.S. Price:</td>
                    <td>{{$item['price']}}</td>
                </tr>
                <tr>
                    <td>On sale date:</td>
                    <td>{{$item['sale_date']}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endforeach

<section>
    <div class="bg-danger">
        <div class="single-banner w70 d-flex">
            @foreach($banners as $banner)
            <div class="col-banner">
                <span>{{$banner['text']}}</span>
                <img class="grey" src="{{ Vite::asset($banner['icon']) }}" alt="" width="40" height="50">
            </div>
            @endforeach
        </div>
    </div>

</section>