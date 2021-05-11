@extends('master')

@section('title', 'Böcker')

@section('content')

    <h1>Böcker</h1>
    <div>
        <table>
            <tr>
              <th>Titel</th>
              <th>Författare</th>
              <th>ISBN</th>
            </tr>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->isbn }}</td>
                <td><img style="width: 80px" alt="Omslagsframsida" src={{ $book->img }} /></td>
              </tr>
            @endforeach
          </table>
    </div>

@endsection
