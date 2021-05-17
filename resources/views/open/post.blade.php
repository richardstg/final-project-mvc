@extends('open.master')

@section('title', 'Post')

@section('content')
    {{-- <div class="blog-post-hero display-flex center-align mb-5"
        style="background-image: url('{{ URL::asset('/') }}blogimages/{{ $post->image_path }}')">
        <div class="overlay-dark"></div>
        <div class="noise"></div>
        <div class="container hero-content">
            <h1 class="text-white mb-4">{{ $post->title }}</h1>
            <p class="text-light">{{ date('jS M Y', strtotime($post->created_at)) }}</p>
            <p class="text-light">By {{ $post->user->name }}</p>
        </div>
    </div> --}}
    <div class="container page-container pt-4 pb-4">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <p><a class="text-dark" href=href="{{ URL::asset('/') }}blog">Blog </a>> {{ $post->slug }}</p>
                <h1 class="text-black display-5 mb-3">{{ $post->title }}</h1>
                <hr class="line-black-left" />
                <p class="text-dark">{{ date('jS M Y', strtotime($post->created_at)) }}</p>
                <p class="text-dark">By {{ $post->user->name }}</p>
                <div class="position-relative">
                    <div class="noise"></div>
                    <img class="mw-100 mb-3" src='{{ URL::asset('/') }}blogimages/{{ $post->image_path }}' />
                </div>
                <p>{!! nl2br($post->content) !!}</p>
            </div>
        </div>
    </div>
@endsection
