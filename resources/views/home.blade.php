@extends('layouts.app')

@section('contenuto')
    <h1>Libri</h1>
    <ul>
        @forelse ($movies as $key=>$movie)
            <li class="rob">
                <h1>{{$movie->title}}</h1>
                <img src="{{$movie->image}}" alt="">
                <p></p>
            </li>
            
        @empty
            <li>No results</li>
        @endforelse
    </ul>
@endsection

@section('paragrafo')
    <p></p>
@endsection


