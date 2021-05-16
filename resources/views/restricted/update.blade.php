@extends('restricted.master')

@section('title', 'Update post')

@section('content')
    <div class="container">
        <h1 class="text-center">Update post</h1>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form action="{{ URL::asset('/') }}admin/{{ $post->slug }}" method="POST" enctype="multipart/form-data"
                    class="form">
                    <label for="title">Title:</label><br>
                    <input type="text" id="title" name="title" value="{{ $post->title }}" class="mb-3"><br>
                    <label for="content">Content:</label><br>
                    <textarea id="content" name="content" rows="8" class="mb-3">{{ $post->content }}</textarea><br>
                    {{-- <div>
                        <label>
                            <span>Select a file</span>
                            <input type="file" name="image" class="hidden">
                        </label>
                    </div> --}}
                    <button type="submit" class="button">Submit</button>
                    @csrf
                    @method('PUT')
                </form>
            </div>
        </div>
    @endsection
