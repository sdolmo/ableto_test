@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>
                        Ready to take the quiz? Click the button below
                    </p>

                    <a href="{{ url('/questions/create') }}"><button>Let's go!</button></a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
