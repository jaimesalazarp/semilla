@extends('layouts.madre')

@section('title')
blog
@endsection

@section('content')

<h1>Create new post</h1>

<form action="{{ route('posts.store') }}" method="POST">

  @csrf

  <label for="">
    {{__('Title')}}<br>
    <input type="text" name="title" id="" value="{{ old('title') }}">

    @error('title')
        <br/>
        <small style="color: red"> {{ $message }} </small>
    @enderror

  </label>

  <label for="">

    <br><br>Body <br/>
    <textarea name="body" id="" cols="30" rows="2">{{ old('body') }}</textarea>

    @error('body')
      <br />
      <small style="color: red"> {{ $message }} </small>
      @enderror

  </label>
  <br>

  <label for="">
    comentario <br/>
    <textarea name="comentario" id="" cols="30" rows="2">{{ old('comentario') }}</textarea>
    @error('comentario')
      <br />
      <small style="color: red"> {{ $message }} </small>
      @enderror
  </label>
  <br>

  <button type="submit"> Enviar</button>


</form>
<br>
<a href="{{ route('posts.index') }}"> back </a>

@endsection

@push('css')
{{-- <style>
  body {
    background-color: blue;
  }
</style> --}}
@endpush