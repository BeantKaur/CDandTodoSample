@extends('layouts.main')
@section('title')
    My Cd List
@endsection

@section('navbar')
    this is my sub menu<br />
    @parent
    <br />this is my sub sub menu<br />
@endsection
@section('content')
        <h2>My Cd list</h2>
        <ul>
            @foreach($cds as $cd)
                <li><a href="{{ url('/cds', $cd->id) }}">{{ $cd->titel }}</a>
                   |  <a href="{{ url('/cds/delete',$cd->id) }}">Delete</a>
                   |  <a href="{{ url('/cds/edit',$cd->id) }}">Update</a>

                </li>
            @endforeach
        </ul>

        <a href="{{ url('/cds/create')}}">Add cd</a>
@endsection


