@extends('layouts.default')

@section('title', 'thanks.blade.php')

@section('content')
<h2>お問い合わせありがとうございます。</h2>
<p>氏名：{{$data->name}}</p>
<p>メールアドレス：{{$data->email}}</p>
<a href="/top">トップへ戻る</a>
@endsection