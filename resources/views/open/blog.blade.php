@extends('open.master')

@section('title', 'Blog')

@section('content')
    <div class="about-hero display-flex center-align mb-5"
        style="background-image: url('{{ URL::asset('/') }}img/hero.jpg')">
        <div class="overlay-dark"></div>
        <div class="noise"></div>
        <div class="container hero-content">
            <h1 class="text-white mb-4">Blog</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                @foreach ($posts as $post)
                    <div class="row">
                        <div class="col">
                            <h2><a href="{{ URL::asset('/') }}blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
                            <p>{{ date('jS M Y', strtotime($post->created_at)) }}</p>
                            <p>By {{ $post->user->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
