@extends('restricted.master')

@section('title', 'Delete post')

@section('content')
    <div class="container">
        <h1 class="text-center">Delete post</h1>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2>Are you sure?</h2>
                <form class="form">
                    <button class=" button">Yes</button>
                    <button class=" button">No</button>
                </form>
            </div>
        </div>
    @endsection
