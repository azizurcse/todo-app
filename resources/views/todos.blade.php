@extends('layouts')


@section('content')

@foreach($todos as $todo)

    {{$todo->todo}}

    <hr>

@endforeach

@stop