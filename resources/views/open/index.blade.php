@extends('open.master')

@section('title', 'Home')

@section('content')

    <div class="hero display-flex center-align mb-0">
        <div class="hero-bg-image"></div>
        <div class="overlay-dark"></div>
        {{-- <div class="noise"></div> --}}
        <div class="container hero-content">
            <h1 class="display-3 text-white mb-2">Lorem ipsum</h1>
            <h2 class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
            <button class="button button-white-inverse button-large"><a href="{{ URL::asset('/') }}about">Learn
                    more</a></button>
        </div>
    </div>
    <div class="blog-post-cards container">
        <h4 class="text-white font-weight-bold">Recent Posts</h4>
        @foreach ($posts as $post)
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <a href="{{ URL::asset('/') }}blog/{{ $post->slug }}">
                        {{-- <div class="noise"></div> --}}
                        <div class="blog-post-card"
                            style="background-image: url('{{ URL::asset('/') }}blogimages/{{ $post->image_path }}')">
                            <div class="blog-post-card-bg-image"
                                style="background-image: url('{{ URL::asset('/') }}blogimages/{{ $post->image_path }}')">
                            </div>
                            <div class="overlay-dark"></div>
                            <div class="blog-post-card-content">
                                <h2 class="text-white">{{ $post->title }}</h2>
                                <p class="text-light mb-1">{{ date('jS M Y', strtotime($post->created_at)) }}</p>
                                <p class="text-light mb-1">By {{ $post->user->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="{{ URL::asset('/') }}blog/{{ $post->slug }}">
                        {{-- <div class="noise"></div> --}}
                        <div class="blog-post-card"
                            style="background-image: url('{{ URL::asset('/') }}blogimages/{{ $post->image_path }}')">
                            <div class="blog-post-card-bg-image"
                                style="background-image: url('{{ URL::asset('/') }}blogimages/{{ $post->image_path }}')">
                            </div>
                            <div class="overlay-dark"></div>
                            <div class="blog-post-card-content">
                                <h2 class="text-white">{{ $post->title }}</h2>
                                <p class="text-light mb-1">{{ date('jS M Y', strtotime($post->created_at)) }}</p>
                                <p class="text-light mb-1">By {{ $post->user->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="{{ URL::asset('/') }}blog/{{ $post->slug }}">
                        {{-- <div class="noise"></div> --}}
                        <div class="blog-post-card"
                            style="background-image: url('{{ URL::asset('/') }}blogimages/{{ $post->image_path }}')">
                            <div class="blog-post-card-bg-image"
                                style="background-image: url('{{ URL::asset('/') }}blogimages/{{ $post->image_path }}')">
                            </div>
                            <div class="overlay-dark"></div>
                            <div class="blog-post-card-content">
                                <h2 class="text-white">{{ $post->title }}</h2>
                                <p class="text-light mb-1">{{ date('jS M Y', strtotime($post->created_at)) }}</p>
                                <p class="text-light mb-1">By {{ $post->user->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="{{ URL::asset('/') }}blog/{{ $post->slug }}">
                        {{-- <div class="noise"></div> --}}
                        <div class="blog-post-card"
                            style="background-image: url('{{ URL::asset('/') }}blogimages/{{ $post->image_path }}')">
                            <div class="blog-post-card-bg-image"
                                style="background-image: url('{{ URL::asset('/') }}blogimages/{{ $post->image_path }}')">
                            </div>
                            <div class="overlay-dark"></div>
                            <div class="blog-post-card-content">
                                <h2 class="text-white">{{ $post->title }}</h2>
                                <p class="text-light mb-1">{{ date('jS M Y', strtotime($post->created_at)) }}</p>
                                <p class="text-light mb-1">By {{ $post->user->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="{{ URL::asset('/') }}blog/{{ $post->slug }}">
                        {{-- <div class="noise"></div> --}}
                        <div class="blog-post-card"
                            style="background-image: url('{{ URL::asset('/') }}blogimages/{{ $post->image_path }}')">
                            <div class="blog-post-card-bg-image"
                                style="background-image: url('{{ URL::asset('/') }}blogimages/{{ $post->image_path }}')">
                            </div>
                            <div class="overlay-dark"></div>
                            <div class="blog-post-card-content">
                                <h2 class="text-white">{{ $post->title }}</h2>
                                <p class="text-light mb-1">{{ date('jS M Y', strtotime($post->created_at)) }}</p>
                                <p class="text-light mb-1">By {{ $post->user->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="{{ URL::asset('/') }}blog/{{ $post->slug }}">
                        {{-- <div class="noise"></div> --}}
                        <div class="blog-post-card"
                            style="background-image: url('{{ URL::asset('/') }}blogimages/{{ $post->image_path }}')">
                            <div class="blog-post-card-bg-image"
                                style="background-image: url('{{ URL::asset('/') }}blogimages/{{ $post->image_path }}')">
                            </div>
                            <div class="overlay-dark"></div>
                            <div class="blog-post-card-content">
                                <h2 class="text-white">{{ $post->title }}</h2>
                                <p class="text-light mb-1">{{ date('jS M Y', strtotime($post->created_at)) }}</p>
                                <p class="text-light mb-1">By {{ $post->user->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
        <div class="bg-black display-flex center-align align-items-center">
            <div class="noise"></div>
            <div class="container pt-3 pb-3" style="position: relative; z-index: 5">
                <h3 class="text-light text-center mb-0">Recent Blog Posts</h3>
            </div>
        </div>
    </div>
    <div class="bg-black display-flex center-align align-items-center">
        <div class="noise"></div>
        <div class="container pt-3 pb-3" style="position: relative; z-index: 5">
            <h3 class="text-light text-center mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore aliquid
                iure ipsa. Sequi nulla numquam provident, quia impedit atque nihil at magnam error dolorem explicabo cum
                recusandae possimus! Commodi, beatae?</h3>
        </div>
    </div>

@endsection
