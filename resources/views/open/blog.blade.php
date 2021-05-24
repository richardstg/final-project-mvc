@extends('open.master')

@section('title', 'Blog')

@section('content')
    <div class="container page-container pt-4 pb-4">
        {{-- <h1 class="text-white mb-4"><span class="bg-black px-2">Blog</span></h1> --}}
        <h1 class="text-black mb-0">Blog</h1>
        <hr class="line-black-left" />
        {{-- pagination --}}
        <div class="d-flex flex-row-reverse">
            {{ $posts->links() }}
        </div>
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
                </div>
            @endforeach
        </div>
        {{-- pagination --}}
        <div class="d-flex flex-row-reverse">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
