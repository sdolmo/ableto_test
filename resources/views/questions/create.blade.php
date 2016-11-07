@extends('layouts/app')

@section('content')

    <h1>Take the Quiz</h1>

    <hr/>

    {{ Form::open(['url' => 'questions']) }}
        @foreach ($questions as $ask)


           <h1> {{  $ask->question  }} </h1>

            {{--{{ Form::radio('result', '1' ); }}--}}
            {{--{{ Form::radio('result', '2' ); }}--}}
            {{--{{ Form::radio('result', '3' ); }}--}}
            {{--{{ Form::radio('result', '4' ); }}--}}
            {{--{{ Form::radio('result', '5' ); }}--}}


        @endforeach
    {{ Form::close() }}

@stop