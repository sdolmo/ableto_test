@extends('layouts/app')

@section('content')

    <h1>Feelings</h1>

    <hr/>


    {!! $chart->render() !!}


@stop
