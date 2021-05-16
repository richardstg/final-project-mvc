@extends('open.master')

@section('title', 'Contact')

@section('content')

    <div class="about-hero display-flex center-align mb-5"
        style="background-image: url('{{ URL::asset('/') }}img/hero.jpg')">
        <div class="overlay-dark"></div>
        <div class="noise"></div>
        <div class="container hero-content">
            <h1 class="text-white mb-4">Contact</h1>
        </div>
    </div>
    <div class="container">
        {{-- <h1>About</h1> --}}
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A voluptas ipsum cum reiciendis nesciunt sint
                    similiqueLorem ipsum dolor sit, amet consectetur adipisicing elit. A voluptas ipsum cum reiciendis
                    nesciunt
                    sint
                    similique
                    fugit delectus explicabo? Quae adipisci non earum, atque expedita ex. Nemo iure eos iusto.
                    fugit delectus explicabo? Quae adipisci non earum, atque expedita ex. Nemo iure eos iusto.</p>
            </div>
        </div>

    @endsection
