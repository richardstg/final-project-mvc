@extends('open.master')

@section('title', 'Home')

@section('content')

    <div class="hero display-flex center-align mb-5">
        <div class="overlay-dark"></div>
        <div class="noise"></div>
        <div class="container hero-content">
            <h1 class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
            <button class="button"><a href="{{ URL::asset('/') }}about">Learn more</a></button>
        </div>
    </div>
    <div class="blog-post-cards container">
        @foreach ($posts as $post)
            <div class="row mb-5">
                <div class="col-sm">
                    <a href="{{ URL::asset('/') }}blog/{{ $post->slug }}">
                        <div class="blog-post-card shadow-sm"
                            style="background-image: url('{{ URL::asset('/') }}blogimages/{{ $post->image_path }}')">
                            <div class="overlay-dark"></div>
                            <div class="blog-post-card-content">
                                <h3 class="text-white">{{ $post->title }}</h3>
                                <p class="text-light">{{ date('jS M Y', strtotime($post->created_at)) }}</p>
                                <p class="text-light">By {{ $post->user->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
        @endforeach
        {{-- <div class="col-sm">
                <a href="./blog/this-is-a-post">
                    <div class="blog-post-card shadow-sm">
                        <div class="overlay-dark"></div>
                        <div class="blog-post-card-content">
                            <h3 class="text-white">This is a post</h3>
                            <p class="text-light">2011-06-01</p>
                            <p class="text-light">John Doe</p>
                        </div>
                    </div>
                </a>
            </div> --}}
        {{-- <div class="col-sm">
                <a href="./blog/this-is-a-post">
                    <div class="blog-post-card shadow-sm">
                        <div class="overlay-dark"></div>
                        <div class="blog-post-card-content">
                            <h3 class="text-white">This is a post</h3>
                            <p class="text-light">2011-06-01</p>
                            <p class="text-light">John Doe</p>
                        </div>
                    </div>
                </a>
            </div> --}}
    </div>
    {{-- <div class="row mb-5">
            <div class="col-sm">
                <a href="./blog/this-is-a-post">
                    <div class="blog-post-card shadow-sm">
                        <div class="overlay-dark"></div>
                        <div class="blog-post-card-content">
                            <h3 class="text-white">This is a post</h3>
                            <p class="text-light">2011-06-01</p>
                            <p class="text-light">John Doe</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="./blog/this-is-a-post">
                    <div class="blog-post-card shadow-sm">
                        <div class="overlay-dark"></div>
                        <div class="blog-post-card-content">
                            <h3 class="text-white">This is a post</h3>
                            <p class="text-light">2011-06-01</p>
                            <p class="text-light">John Doe</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="./blog/this-is-a-post">
                    <div class="blog-post-card shadow-sm">
                        <div class="overlay-dark"></div>
                        <div class="blog-post-card-content">
                            <h3 class="text-white">This is a post</h3>
                            <p class="text-light">2011-06-01</p>
                            <p class="text-light">John Doe</p>
                        </div>
                    </div>
                </a>
            </div>
        </div> --}}
    </div>

@endsection
