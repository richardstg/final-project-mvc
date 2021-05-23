@extends('open.master')

@section('title', 'Home')

@section('content')
    <div class="hero display-flex flex-column justify-content-center mb-0">
        {{-- <div class="hero-bg-image"></div> --}}
        {{-- <div class="overlay-dark"></div> --}}
        <div class="position-relative w-100">
            <div class="hero-bg-black"></div>
            <div class="container hero-content">
                <h1 class="display-3 text-white mb-2 font-weight-bold">Lorem
                    ipsum<br>consectetur</h1>
            </div>
        </div>
        <div class="container hero-content">
            <h2 class="text-dark mb-4 mt-2 font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
            <button class="button button-black-inverse button-large"><a href="{{ URL::asset('/') }}blog">Read
                    Blog</a></button>
        </div>
    </div>
    <div class="blog-post-cards container pt-4 pb-4">
        <h4 class="text-dark font-weight-bold">New Posts</h4>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-lg-4 mb-4">
                    <a href="{{ URL::asset('/') }}blog/{{ $post->slug }}">
                        {{-- <div class="noise"></div> --}}
                        <div class="blog-post-card shadow-sm"
                            style="background-image: url('{{ URL::asset('/') }}blogimages/{{ $post->image_path }}')">
                            <div class="blog-post-card-bg-image"
                                style="background-image: url('{{ URL::asset('/') }}blogimages/{{ $post->image_path }}')">
                            </div>
                            {{-- <div class="overlay-dark"></div> --}}
                            <div class="blog-post-card-content">
                                {{-- <h2 class="text-white">{{ $post->title }}</h2>
                                <hr class="small-line-black-left" />
                                <p class="text-light mb-1">{{ date('jS M Y', strtotime($post->created_at)) }}</p>
                                <p class="text-light mb-1">By {{ $post->user->name }}</p> --}}
                                {{-- <p class="text-light mb-1 mt-5">{{ substr($post->content, 0, 90) }}...</p> --}}
                            </div>
                        </div>
                    </a>
                    <h3 class="text-dark mt-2 mb-0"><a class="text-dark text-decoration-none"
                            href="{{ URL::asset('/') }}blog/{{ $post->slug }}">{{ $post->title }}</a></h3>
                    <hr class="line-black-left mt-2 mb-2" />
                    <p class="mb-1">Posted {{ date('jS M Y', strtotime($post->created_at)) }} by
                        {{ $post->user->name }}</p>
                    {{-- <p class="text-black mb-1">by {{ $post->user->name }}</p> --}}
                </div>
            @endforeach
        </div>
    </div>
    <div class="subscribe display-flex center-align align-items-center position-relative pt-4 pb-4">
        <div class="noise"></div>
        <div class="container pt-3 pb-3 d-flex flex-column align-items-center" style="position: relative; z-index: 5">
            <h1 class="text-light text-center">Subscribe</h1>
            <p class="text-light text-center mb-4">Sign up with your email to receive news and updates.</p>
            <form class="w-100 d-flex justify-content-center">
                <input class="w-50 p-2" type="email" name="email" placeholder="Enter your email...">
                <button class="button button-white-inverse" disabled>Sign up</button>
            </form>
        </div>
    </div>

@endsection
