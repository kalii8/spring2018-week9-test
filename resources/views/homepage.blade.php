@extends('layouts/app')

@section('content')
<div class="page page-home">
    
    <img src="img/justice-league-logo.png" alt="" class="logo">
    <h1>Justice League<br><small>Emergency reporting</small></h1>

    <div class="desc">
        Is there an emergency? Let us know. We will be in touch as soon as possible.
    </div>

    <a href="#" class="report">Report an emergency</a>

    <div class="heroes">
        <a href="{{ action('HeroController@show', ['hero_slug' => 'aquaman']) }}">
            <img src="img/aquaman.jpg" alt="">
        </a>
        <a href="{{ action('HeroController@show', ['hero_slug' => 'batman']) }}">
            <img src="img/batman.jpg" alt="">
        </a>
        <a href="{{ action('HeroController@show', ['hero_slug' => 'cyborg']) }}">
            <img src="img/cyborg.jpg" alt="">
        </a>
        <a href="{{ action('HeroController@show', ['hero_slug' => 'flash']) }}">
            <img src="img/flash.jpg" alt="">
        </a>
        <a href="{{ action('HeroController@show', ['hero_slug' => 'wonderwoman']) }}">
            <img src="img/wonderwoman.jpg" alt="">
        </a>
    </div>

</div>
@endsection
