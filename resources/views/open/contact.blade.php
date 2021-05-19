@extends('open.master')

@section('title', 'Contact')

@section('content')
    <div class="container page-container pt-4 pb-4">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="text-black mb-0">Contact</h1>
                <hr class="line-black-left" />
                <form class="form">
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" placeholder="Your email adress..." class="mb-3"><br>
                    <label for="message">Content:</label><br>
                    <textarea id="message" name="message" rows="8" class="mb-3"
                        placeholder="Type your message..."></textarea><br>
                    <button type="submit" class="button button-black" disabled>Submit</button>
                </form>
            </div>
        </div>

    @endsection
