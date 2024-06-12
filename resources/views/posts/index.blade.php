@extends('layouts.madre')

@section('title')
blog
@endsection

@section('content')


<h1 class="text-center"> pagina de inicio de blog</h1>

<a href="{{  route('posts.create') }}"> create new post</a>

@foreach ($posts as $post )

<div style="display: flex; align-items:baseline">

    <h2>
        <a href="{{ route('posts.show', $post->id)}}">
            {{ $post->title }}
        </a>
    </h2> &nbsp;

    <a href="{{ route('posts.edit', $post) }}">editar post</a>

</div>






@endforeach

@endsection

@push('css')
{{-- <style>
    body {
        background-color: blue;
    }
</style> --}}
@endpush