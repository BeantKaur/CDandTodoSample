@extends('layouts.main')

@section('title')
    My Cd list
@endsection

@section('navbar')
    @parent
    | this my cd nav

@endsection

@section('content')
    <h1>Cd details</h1>

    <h2>{{ $cd->titel }}</h2>
    <div>Interpred : {{ $cd->interpret }}</div>
    <div>Jahr : {{ $cd->jahr }}</div>
@endsection
