@extends('layouts/app')

@section('content')

    <h1>Take the Quiz</h1>

    <hr/>

    {{ Form::open(['url' => 'questions']) }}
    @foreach ($questions as $ask)


        <h1> {{  $ask->question  }} </h1>

        @foreach ( $answers as $result )
            {{--{{ Form::radio('result') }}--}}
            {{ $result->answer }}
        @endforeach
    @endforeach
    {{ Form::close() }}

@stop