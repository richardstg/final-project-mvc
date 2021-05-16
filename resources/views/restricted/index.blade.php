@extends('restricted.master')

@section('title', 'Admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="text-center">Create post</h1>
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session()->has('message'))
                    <div>
                        <p>{{ session()->get('message') }}</p>
                    </div>
                @endif
                <form action="" method="POST" enctype="multipart/form-data" class="form">
                    <label for="title">Title:</label><br>
                    <input type="text" id="title" name="title" placeholder="Title..." class="mb-3"><br>
                    <label for="content">Content:</label><br>
                    <textarea id="content" name="content" rows="8" placeholder="Write your post..."
                        class="mb-3"></textarea><br>
                    <div>
                        <label>
                            <span>Select a file</span>
                            <input type="file" name="image" class="hidden">
                        </label>
                    </div>
                    <button type="submit" class="button">Submit</button>
                    @csrf
                </form>
                <h2 class="text-center mb-3">Current posts</h2>
                @foreach ($posts as $post)
                    <div class="row">
                        <div class="col">
                            <h3><a href="{{ URL::asset('/') }}blog/{{ $post->slug }}">{{ $post->title }}</a></h3>
                            <p>{{ date('jS M Y', strtotime($post->created_at)) }}</p>
                            <p>By {{ $post->user->name }}</p>
                        </div>
                        <div class="col">
                            <button class="button button-small mb-1"><a
                                    href="{{ URL::asset('/') }}admin/{{ $post->slug }}/edit">Update</a></button><br />
                            <button type="button" class="button button-small mb-1" data-toggle="modal"
                                data-target="#exampleModal">
                                Delete
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete post</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="button" data-dismiss="modal">Cancel</button>
                                            <form action="{{ URL::asset('/') }}admin/{{ $post->slug }}" method="POST">
                                                <button type="submit" class="button">
                                                    Delete
                                                </button>
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <form action="{{ URL::asset('/') }}admin/{{ $post->slug }}" method="POST">
                                <button type="submit" class="button button-small mb-1">
                                    Delete
                                </button>
                                @csrf
                                @method('delete')
                            </form> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
