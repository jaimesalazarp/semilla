@extends('layouts.madre')

@section('title')
    blog
@endsection

@section('content')
      <h1 class="text-center">{{ $post->title }}</h1>
      
      <a href="{{ route('posts.edit', $post) }}">editar post</a><br>
      
     <h2> TITULO: {{ $post->title }}</h2>
        <p>CUERPO: {{ $post->body }}</p>
        <p>COMENTARIOS: {{ $post->comentario }}</p>
        <br>

        <a href="{{ route('posts.index') }}">regresar</a>
     
  
     
@endsection

 @push('css')
     {{-- <style>
        body{
            background-color: blue;
        }
     </style> --}}
 @endpush 
