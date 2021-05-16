@extends('open.master')

@section('title', 'Login')

@section('content')
    <div class="container">
        <h1 class="text-center">Login</h1>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form action="" type="POST" class="form">
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" class="mb-3"><br>
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password" class="mb-3"><br>
                    <button type="submit" class="button">Login</button>
                </form>
            </div>
        </div>
    @endsection
