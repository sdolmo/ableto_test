@extends('layouts/app')

@section('content')


    {{ Form::open(['url' => 'questions']) }}
    @foreach ($questions as $ask)

        <h1> {{  $ask->question  }} </h1>

    @endforeach
    {{ Form::close() }}

@stop