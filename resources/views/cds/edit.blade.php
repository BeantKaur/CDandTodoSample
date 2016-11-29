@extends('layouts.main')
@section('title')
    My Cd List
@endsection


@section('content')

    @if($errors->any())
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

    @endif
    <h2>Update cd</h2>

    <form method="post" action="{{ url('/cds/edit', $cd->id) }}">

        {{ csrf_field() }}
        Titel: <input type="text" name="titel" value="{{ $cd->titel }}" /><br />
        Interpret: <input type="text" name="interpret" value="{{ $cd->interpret }}" /><br />
        Jahr: <input type="text" name="jahr" value="{{ $cd->jahr }}"/><br />
        <input type="submit" name="submit" />
    </form>

@endsection