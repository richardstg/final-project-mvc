@extends('master')

@section('title', 'Tärningsspelet')

@section('content')

    <h1>Resultat</h1>
    <div class="total-points">
        <h3 style="border-bottom: none">Dina poäng för rundan: {{ $roundPointsPlayer }}</h3>
        <h3 style="border-bottom: none">Datorns poäng för rundan: {{ $roundPointsComputer }}</h3>
        <h3 style="border-bottom: none">Antal rundor som du vunnit: {{ $playerTotalScore }}</h3>
        <h3 style="border-bottom: none">Antal rundor som datorn vunnit: {{ $computerTotalScore }}</h3>
    </div>
    <br>
    <div class="total-points">
    @if ($playerWin)
        <h1 style="border-bottom: none">Grattis, du vann!</h1>
    @else
        <h1 style="border-bottom: none">Du förlorade.</h1>
    @endif
    </div>
    <form action="../dice" method="post">
        <input type="submit" name="newRound" value="Nästa runda">
        {{ csrf_field() }}
    </form>
    <div class="game-field">
        <p>Poäng för ditt senaste kast: {{ $playerLastHandSum }}</p>
    </div>
    {{-- <a href="../dice">Återställ</a> --}}
    <form action="../dice" method="post">
        <input type="submit" name="quit" value="Avsluta">
        {{ csrf_field() }}
    </form>

@endsection
