@extends('open.master')

@section('title', 'Blog')

@section('content')
    <div class="container page-container pt-4 pb-4">
        <h1 class="text-black mb-0">Blog</h1>
        <hr class="line-black-left" />
        <div class="blog-posts-header row">
            <div class="col-12 col-sm-8 col-md-6">
                <form action="{{ URL::asset('/blog') }}" method="GET" class="d-flex w-100 mb-3">
                    <input class="p-2 w-100" type="text" name="search" placeholder="Search...">
                    <button class="button button-black">Submit</button>
                    {{-- @csrf --}}
                </form>
            </div>
            <div class="col d-flex justify-content-end">
                {{-- pagination --}}
                {{ $posts->links() }}
            </div>
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
