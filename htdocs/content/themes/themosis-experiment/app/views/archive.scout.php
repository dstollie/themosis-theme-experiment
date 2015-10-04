@extends('layouts.main')

@section('main')
    <h1>{{ Loop::title() }}</h1>
    <ul>
        @foreach ($posts as $post)

            <li>

                <a href="{{ get_permalink($post->ID) }}">{{ $post->post_title }}</a></br>
                Comments geplaatst door:

                @foreach ($post->comments() as $comment)

                    {{ $comment->author }}

                @endforeach

            </li>

        @endforeach
    </ul>

@stop