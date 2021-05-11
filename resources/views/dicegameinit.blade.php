@extends('master')

@section('title', 'Tärningsspelet')

@section('content')

    <h1>Starta spelet</h1>
    <div>
        <form action="" method="post">
            <label for="numberDices">Antal tärningar:</label>
            <select name="numberDices" id="numberDices">
                <option value="1" selected="selected">1</option>
                <option value="2">2</option>
            </select>
            <input type="submit" name="startGame" value="Starta spelet">
            {{ csrf_field() }}
        </form>
    </div>

@endsection
