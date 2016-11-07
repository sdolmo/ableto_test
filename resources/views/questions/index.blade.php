@extends('layouts/app')

@section('content')

    <h1>Feelings</h1>

    <hr/>

    @foreach ($questions as $question)
        <article>
            <h2>
                <a href="{{url('/questions', $question->id)}}">{{$question->question}}</a>
            </h2>
        </article>
    @endforeach

@stop
