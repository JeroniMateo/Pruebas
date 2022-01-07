@extends('layout');

@section('title', 'portfolio')

@section('content')

<h1>Portfolio</h1>

    <ul>
        @foreach ($portfolio as $portfolioItem)
            
            <li>{{ $portfolioItem['title'] }}</li>
        
            @endforeach
    </ul>

@endsection