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
                <form action="" method="POST" enctype="multipart/form-data" class="form mb-4">
                    <label for="title">Title:</label><br>
                    <input type="text" id="title" name="title" placeholder="Title..." class="mb-3" required><br>
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
                    <button type="submit" class="button button-black">Submit</button>
                    @csrf
                </form>
                <h2 class="text-center mb-3">Current posts</h2>
                {{-- pagination --}}
                <div class="d-flex flex-row-reverse">
                    {{ $posts->links() }}
                </div>
                @foreach ($posts as $post)
                    <div class="row bg-light pt-3 pb-3 mb-3">
                        <div class="col overflow-hidden pt-1 pb-1">
                            <h4><a class="text-dark"
                                    href="{{ URL::asset('/') }}blog/{{ $post->slug }}">{{ $post->title }}</a></h4>
                            <p class="mb-1">{{ date('jS M Y', strtotime($post->created_at)) }}</p>
                            <p class="mb-1">By {{ $post->user->name }}</p>
                        </div>
                        <div class="col-sm-4 pt-1 pb-1">
                            {{-- <div class="blog-post-card-bg-image w-50"
                                style="background-image: url('{{ URL::asset('/') }}blogimages/{{ $post->image_path }}')">
                            </div> --}}
                            <img class="w-100" src='{{ URL::asset('/') }}blogimages/{{ $post->image_path }}' />
                        </div>
                        <div class="col d-flex flex-row-reverse pt-1 pb-1">
                            <div>
                                <button class="button button-black-inverse button-small mb-1"><a
                                        href="{{ URL::asset('/') }}admin/{{ $post->slug }}/edit">Update</a></button><br />
                                <button type="button" class="button button-black button-small mb-1" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Delete
                                </button>
                            </div>
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
                {{-- pagination --}}
                <div class="d-flex flex-row-reverse">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    @endsection
