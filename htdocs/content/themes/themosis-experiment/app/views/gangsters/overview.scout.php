@extends('layouts.main')

@section('main')

<table>
    <thead>
    <tr>
        <th>{{ __('Gangster naam') }}</th>
    </tr>
    </thead>
    <tbody>

        <h1>{{ __('Ontmoet alle gangsters') }}</h1>

        @foreach($gangsters as $gangster)

            <tr>
                <td>{{ $gangster->post_title }}</td>
            </tr>

        @endforeach

    </tbody>
</table>

@stop