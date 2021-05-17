@extends('open.master')

@section('title', 'Blog')

@section('content')
    <div class="container page-container pt-4 pb-4">
        {{-- <h1 class="text-white mb-4"><span class="bg-black px-2">Blog</span></h1> --}}
        <h1 class="text-black mb-0">Blog</h1>
        <hr class="line-black-left" />
        @foreach ($posts as $post)
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <a href="{{ URL::asset('/') }}blog/{{ $post->slug }}">
                        {{-- <div class="noise"></div> --}}
                        <div class="blog-post-card shadow-sm"
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
                        <div class="blog-post-card shadow-sm"
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
                        <div class="blog-post-card shadow-sm"
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
                        <div class="blog-post-card shadow-sm"
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
                        <div class="blog-post-card shadow-sm"
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
                        <div class="blog-post-card shadow-sm"
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
        {{-- <div class="bg-black display-flex center-align align-items-center">
            <div class="noise"></div>
            <div class="container pt-3 pb-3" style="position: relative; z-index: 5">
                <h3 class="text-light text-center mb-0">Recent Blog Posts</h3>
            </div>
        </div> --}}
    </div>
@endsection
