@extends('layouts/app')

@section('content')

    <h1>Take the Quiz</h1>

    <hr/>

    {{ Form::open(['url' => 'questions']) }}
        @foreach ($questions as $ask)

            <div class="form-group">
                <h1> {{  $ask->question  }} </h1>
            </div>

            <div class="form-group">
                @foreach ($answers as $option)

                    {{ Form::label($option->answer ) }}
                    {{ Form::radio($ask->id, $option->answer, ['class' => 'radio-inline']) }}

                @endforeach
            </div>

        @endforeach

        <div class="form-group">
            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
        </div>

    {{ Form::close() }}

@stop