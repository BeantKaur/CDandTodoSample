@extends('layouts.main')

@section('title')
My Cd list
@endsection

@section('navbar')
@parent
| this my cd nav

@endsection

@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            <li> {{ $error }}</li>
        @endforeach
    @endif

<h1>Add cd</h1>
<form method="post" action="{{ url('cds/create') }}">
    {{ csrf_field() }}
    Title: <input type="text" name="titel" value="{{ Request::old('titel') }}"><br />
    interpret: <input type="text" name="interpret" value="{{ Request::old('interpret') }}"><br />
    jahr: <input type="text" name="jahr" value="{{ Request::old('jahr') }}"><br />
    <input type="submit" value="Add Cd" />
</form>
@endsection