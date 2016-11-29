@extends('layouts.main')

@section('title')
    My Cd list
@endsection

@section('navbar')
    @parent
     | this my cd nav

@endsection

@section('content')
    <h1>Cds List</h1>

    <ul>
        @foreach($cds as $cd)
            <li><a href="{{ url('/cds', $cd->id) }}">{{ $cd->titel }}</a></li>
        @endforeach
    </ul>


    <a href="{{ url('/cds/create') }}">Add cd</a>
@endsection



