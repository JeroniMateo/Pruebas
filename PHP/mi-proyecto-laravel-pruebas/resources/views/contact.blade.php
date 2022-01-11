@extends('layout');

@section('title', 'contact')

@section('content')

    <h1>Contact</h1>
    <form method="POST" action="{{route('contact')}}">
        <input type="text" name="name" placeholder="Nombre..." id=""> <br>
        <input type="email" name="email" placeholder="Email..." id=""> <br>
        <input type="text" name="subject" placeholder="Asunto..." id=""><br>
        <textarea name="content" placeholder="Mensaje..." id="" cols="30" rows="10"></textarea> <br>
        <button>Enviar</button>
    </form>
@endsection