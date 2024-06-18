@extends('layouts.madre')

@section('title')
blog
@endsection

@section('content')


<h1 class="text-center"> Aqui se mostraran todos los posts pagina de inicio de blog</h1>

<a href="{{  route('posts.create') }}"> create new post</a>

<ul>
    @foreach ($posts as $post )
        <li>
            <a href="{{ route('posts.show', $post->id) }}">
                {{ $post->title }}
            </a>
        </li>
    @endforeach
</ul>


{{-- <a href="{{  route('posts.create') }}"> create new post</a> --}}

{{-- @foreach ($posts as $post )

<div style="display: flex; align-items:baseline">

    <h2>
        <a href="{{ route('posts.show', $post->id)}}">
            {{ $post->title }}
        </a>
    </h2> &nbsp;

    <a href="{{ route('posts.edit', $post) }}">editar</a>

</div>

@endforeach --}}

@endsection

@push('css')
{{-- <style>
    body {
        background-color: blue;
    }
</style> --}}
@endpush