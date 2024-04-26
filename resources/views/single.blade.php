@extends('layouts.app')

@section('content')


<div class="blue-strip">
    <div class="container">
        <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="" width="150" height="200">
    </div>
</div>

<div class="single-main">

    <div class="single-container">
        <table>
            <!--       <h3>ACTION COMICS #1000: THE DELUXE EDITION</h3> -->
            <thead>
                <tr>
                    <td class="sinistra">U.S. PRICE: € 19.99</td>
                    <td class="centro">AVALAIBLE</td>
                    <td class="destra">Check Avalaibility</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolores animi totam fuga, ad dignissimos at a harum sunt unde! Maiores aliquam veritatis doloremque repellat dolor officia provident voluptas ea.</P>
                    </td>
                </tr>
            </tbody>
        </table>
        <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="" width="80%" height="80%">
    </div>

</div>


@endsection