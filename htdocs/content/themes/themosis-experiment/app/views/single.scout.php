@extends('layouts.main')

@section('main')

    @loop
        <h1>{{ Loop::title() }}</h1>
        {{ Loop::content() }}

        @include('includes.comments')

    @endloop

@stop