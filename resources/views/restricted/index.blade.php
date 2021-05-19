@extends('restricted.master')

@section('title', 'Admin')

@section('content')
    <div class="container pt-4 pb-4">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="text-center">Create post</h1>
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5><strong>Error</strong></h5>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session()->has('message'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p class="mb-0">{{ session()->get('message') }}</p>
                    </div>
                @endif
                {{-- @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                    </div>
                @endif --}}
                <form action="" method="POST" enctype="multipart/form-data" class="form">
                    <label for="title">Title:</label><br>
                    <input type="text" id="title" name="title" placeholder="Title..." class="mb-3" required><br>
                    {{-- @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror --}}
                    <label for="content">Content:</label><br>
                    <textarea id="content" name="content" rows="8" placeholder="Write your post..." class="mb-3"
                        required></textarea><br>
                    <div>
                        <label class="button button-black-inverse">
                            Choose image <input type="file" name="image" hidden
                                onchange="$('#upload-file-info').text(this.files[0].name)">
                        </label>
                        <span class='label label-info' id="upload-file-info"></span>
                    </div>
                    {{-- <div>
                        <label>
                            <span>Select a file</span>
                            <input type="file" name="image" class="hidden">
                        </label>
                    </div> --}}
                    <button type="submit" class="button button-black">Submit</button>
                    @csrf
                </form>
                <h2 class="text-center mb-3">Current posts</h2>
                @foreach ($posts as $post)
                    <div class="row bg-light pt-3 pb-3">
                        <div class="col">
                            <h3><a href="{{ URL::asset('/') }}blog/{{ $post->slug }}">{{ $post->title }}</a></h3>
                            <p class="mb-1">{{ date('jS M Y', strtotime($post->created_at)) }}</p>
                            <p class="mb-1">By {{ $post->user->name }}</p>
                        </div>
                        <div class="col">
                            <button class="button button-black-inverse button-small mb-1"><a
                                    href="{{ URL::asset('/') }}admin/{{ $post->slug }}/edit">Update</a></button><br />
                            <button type="button" class="button button-black button-small mb-1" data-toggle="modal"
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
                                            <button type="button button-black" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure?
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ URL::asset('/') }}admin/{{ $post->slug }}" method="POST">
                                                <button type="submit" class="button button-black">
                                                    Delete
                                                </button>
                                                @csrf
                                                @method('delete')
                                            </form>
                                            <button type="button" class="button button-black-inverse"
                                                data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
