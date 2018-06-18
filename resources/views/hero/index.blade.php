@extends('layouts/app')

@section('content')

<h1>The hero roster</h1>

    <ul>
        @foreach ($heroes as $hero)
                <li>
                    {{ $hero->name }} 
                </li>
        @endforeach
    </ul>

@endsection