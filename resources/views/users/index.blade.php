{{-- マッチング画面 --}}
@extends('layouts.layout')

@section('content')

<div class="matchingPage">
  <header class="header">
    {{-- プロフィール画像 --}}
    <i class="fas fa-comments fa-3x"></i>
    <div class="header_logo"><a href="{{route('home')}}"><img src="/storage/images/techpit-match-icon.png"></a></div>
  </header>
  <div class="container">
    <div class="mt-5">
      <div class="matchingNum">{{ $match_users_count }}匹とマッチングしています</div>
      <h2 class="pageTitle">マッチングしたワンちゃんの一覧</h2>
      <div class="matchingList">
        {{-- ユーザー情報引っ張ってくる --}}
				@foreach( $matching_users as $user)
          <div class="matchingPerson">
          <div class="matchingPerson_img"><img src="/storage/images/{{ $user->img_name}}"></div>
            <div class="matchingPerson_name">{{ $user->name }}</div>

            <form method="POST" action="{{ route('chat.show') }}">
            @csrf
              <input name="user_id" type="hidden" value="{{$user->id}}">
              <button type="submit" class="chatForm_btn">チャットを開く</button>
            </form>

          </div>
        @endforeach
      </div>
    <div>
  </div>
</div>

@endsection