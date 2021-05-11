@extends('master')

@section('title', 'Highscore')

@section('content')

    <h1>Highscore</h1>
    <div>
        <table>
            <tr>
              <th>Spelarens poäng</th>
              <th>Datorns poäng</th>
            </tr>
            @foreach ($highscores as $highscore)
            <tr>
                <td>{{ $highscore->player_points }}</td>
                <td>{{ $highscore->computer_points }}</td>
              </tr>
            @endforeach
          </table>
    </div>

@endsection
