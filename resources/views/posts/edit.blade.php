@extends('layouts.madre')

@section('title')
blog
@endsection

@section('content')
<h1 class="text-center">FORMULARIO DE EDICION</h1>

<form action="{{ route('posts.update', $post) }}" method="POST">

  @csrf 
  @method('PATCH')

  <label for="">
    {{__('Title')}}<br>
    <input type="text" name="title" id="" value="{{ old('title', $post->title ) }}">

    @error('title')
    <br />
    <small style="color: red"> {{ $message }} </small>
    @enderror

  </label>

  <label for="">

    <br><br>Body <br />
    <textarea name="body" id="" cols="30" rows="2">{{ old('body', $post->body) }}</textarea>

    @error('body')
    <br />
    <small style="color: red"> {{ $message }} </small>
    @enderror

  </label>
  <br>

  <label for="">
    comentario <br />
    <textarea name="comentario" id="" cols="30" rows="2">{{ old('comentario', $post->comentario) }}</textarea>
    @error('comentario')
    <br />
    <small style="color: red"> {{ $message }} </small>
    @enderror
  </label>
  <br>

  <button type="submit"> Enviar</button>


</form>




<a href="{{ route('posts.index') }}">regresar</a>



@endsection

@push('css')
{{-- <style>
  body {
    background-color: blue;
  }
</style> --}}
@endpush