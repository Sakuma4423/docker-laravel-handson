@extends('layouts.default')

@section('title', $post->title)

@section('content')
<h1>
    <a href="{{ url('/') }}" class="header-menu">Back</a>
    {{ $post->title }}
</h1>
<!-- 改行をbrタグに変換 & エスケープしないで出力(!!) & エスケープ(eヘルパー) -->
<p>{!! nl2br(e($post->body))!!} </p>
@endsection