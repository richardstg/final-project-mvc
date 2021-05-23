@extends('restricted.master')

@section('title', 'Update post')

@section('content')
    <div class="container pt-4 pb-4">
        <h1 class="text-center">Update post</h1>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form action="{{ URL::asset('/') }}admin/{{ $post->slug }}" method="POST" enctype="multipart/form-data"
                    class="form">
                    <label for="title">Title:</label><br>
                    <input type="text" id="title" name="title" value="{{ $post->title }}" class="mb-3"><br>
                    <label for="content">Content:</label><br>
                    <textarea id="content" name="content" rows="8" class="mb-3">{{ $post->content }}</textarea><br>
                    <div>
                        <label class="button button-black-inverse">
                            Choose image <input type="file" name="image" hidden
                                onchange="$('#upload-file-info').text(this.files[0].name)">
                        </label>
                        <span class='label label-info' id="upload-file-info"></span>
                    </div>
                    <button type="submit" class="button button-black">Submit</button>
                    @csrf
                    @method('PUT')
                </form>
            </div>
        </div>
    @endsection
