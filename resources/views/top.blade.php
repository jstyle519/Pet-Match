{{-- トップページ画面 --}}
@extends('layouts.layout')

@section('content')
<div class="loginPage">
  <div class="container">
    <div class="loginPage_contents">
    <h1 class="h3 loginPage_contents_title">素敵な家族を見つけませんか？</h1>
    
    <div class="btn loginPage_contents_btn"><a class="text-white" href="{{ route('login') }}">メールアドレスでログインする</a></div>
    </div>
  </div>
</div>
@endsection