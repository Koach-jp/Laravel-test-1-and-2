@extends('layouts.default')

@section('title', 'index.blade.php')

@section('content')

@foreach($errors->all() as $error)
<p style="color: red">※{{$error}}</p>
@endforeach
<form action="/top" method="post">
  @csrf
  <p><label for="name">氏名</label></p>
  <p><input type="text" id="name" name="name"></p>
  
  <p><label for="email">メールアドレス</label></p>
  <p><input type="text" id="email" name="email"></p>
  {{-- formrequestでバリデートするためにあえてtype="text"、タグ内のrequiredも外す --}}
  <button type="submit">送信する</button>
</form>


{{-- @error('name')
{{ $message }}
@enderror
@error('email')
{{ $message }}
@enderror
@endsection --}}