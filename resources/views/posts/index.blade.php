@extends('layouts.madre')

@section('title')
blog
@endsection

@section('content')


<h1 class="text-center"> Aqui se mostraran todos los posts pagina de inicio de blog</h1>
<div>
<a href="{{  route('posts.create') }}"> create new post</a>
</div>
<dir >

    @foreach ($posts as $post )
        <h2>
            <a href="{{ route('posts.show', $post->id) }}">
                    {{ $post->title }}
            </a> &nbsp;
            <a href="{{ route('posts.edit', $post) }}">editar</a>
        </h2>
    @endforeach

</dir>


@endsection

@push('css')
{{-- <style>
    body {
        background-color: blue;
    }
</style> --}}
@endpush