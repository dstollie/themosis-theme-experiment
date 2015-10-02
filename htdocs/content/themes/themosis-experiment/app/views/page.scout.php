@extends('layouts.main')

@section('main')
    @loop
        <h1>{{ Loop::title() }}</h1>
        {{ Loop::content() }}
    @endloop
@stop