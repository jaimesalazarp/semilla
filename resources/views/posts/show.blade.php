@extends('layouts.madre')

@section('title')
    blog
@endsection

@section('content')
      <h1 class="text-center">{{ $post->title }}</h1>
      
      
     <h2> TITULO: {{ $post->title }}</h2>
        <p>CUERPO: {{ $post->body }}</p>
        <p>COMENTARIOS: {{ $post->comentario }}</p>
        <a href="{{ route('posts.index') }}">regresar</a>
     
  
     
@endsection

 @push('css')
     {{-- <style>
        body{
            background-color: blue;
        }
     </style> --}}
 @endpush 
