@extends('master')

@section('title', 'Rulla tärningar')

@section('content')

    <h1>Rulla tärningar</h1>
    <form action="./rolldices" method="post">
        <input type="submit" name="rollDices" value="Kasta">
        {{ csrf_field() }}
    </form>
    <form action="./rolldices" method="post">
        <input type="submit" name="quit" value="Avsluta">
        {{ csrf_field() }}
    </form>

    <div class="game-field">
    @if(isset($lastHandGraphical))
        <p class="dice-utf8">
            @foreach($lastHandGraphical as $value)
                <i style="font-style: normal" class="{{ $value }}"></i>
            @endforeach
        </p>
        {{-- <p>Du kastade: {{ implode(', ', $playerLastHand) }}</p> --}}
    @endif
    </div>

@endsection
