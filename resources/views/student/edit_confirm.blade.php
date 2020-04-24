@extends('layouts.app')

@section('title','確認画面')

@section('content')
    
    <form action=""method="POST"class="form-horizontal">
        {{csrf_field()}}
        <input type="hidden" name="username"value="{{$username}}">
        <input type="hidden" name="email"value="{{$email}}">
        <input type="hidden" name="tel"value="{{$tel}}">
        <div class="row">
            <label for="username"class="col-sm-4">お名前</label>
            <div class="col-sm-8">{{$username}}</div>
        </div>
        <div class="row">
            <label for="email"class="col-sm-4">メールアドレス</label>
            <div class="col-sm-8">{{$email}}</div>
        </div>
        <div class="row">
            <label for="tel"class="col-sm-4">電話番号</label>
            <div class="col-sm-8">{{$tel}}</div>
        </div>
        <div class="col-sm-offset-4 col-sm-8">
            <input type="submit" value="登録"class="btn-btn-primary">
        </div>
    </form>
@endsection