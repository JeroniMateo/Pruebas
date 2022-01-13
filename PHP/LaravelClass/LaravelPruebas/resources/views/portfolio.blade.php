@extends('layout');

@section('title', 'portfolio')

@section('content')

<h1>Portfolio</h1>

<ul>
    @isset($portfolio)

    @forelse($portfolio as $portfolioItem)

    <li>{{ $portfolioItem['title'] }}
    
        <small>{{var_dump($loop->first ? 'Es el primero' : '')}}</small>
        <small>{{var_dump($loop->last ? 'Es el ultimo' : '')}}</small>
    </li>

    @empty

    <li>No Hay proyectos para mostrar</li>

    @endforelse


</ul>

@endsection