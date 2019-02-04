@extends('layouts.app')

@section('content')
<div class="container">
    {{--@if(isset($post))--}}
    @forelse($posts as $post)
        @can('view_post', $post)
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p><br>
            <b>Author: {{$post->user->name}}</b>
            {{--@can(   'update-post', $post )--}}
                <a href="{{route('update', $post->id)}}">Editar</a>
            {{--@endcan--}}
            <hr>
        @endcan
    @empty
        <p>Nenhum Post Encontrado!</p>
    @endforelse
</div>
@endsection
