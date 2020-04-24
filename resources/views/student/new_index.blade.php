@extends('layouts.app')

@section('title','受講生作成')

@section('content')
    <form action=""method="POST"class="form-horizontal">
        {{csrf_field()}}
        {{method_field('patch')}}
        <div class="form-group @if($errors->has('name')) has-error @endif">
            <label for="username"class="col-md-3 control-label">お名前</label>
            <div class="col-md-9">
                <input type="text"name="username"class="form-control"id="username"value="{{old('uername')}}">
                @if($errors->has('username'))
                    <span class="text-danger">
                        {{$errors->first('username')}}
                    </span>
                @endif
            </div>
            <label for="emial"class="col-md-3 control-label">メールアドレス</label>
            <div class="col-md-9">
                <input type="text" name="email" id="email"class="form-control"value="{{old('email')}}">
                @if($errors->has('email'))
                    <span class="text-danger">
                        {{$errors->first('email')}}
                    </span>
                @endif
            </div>
            <label for="tel"class="col-md-3 control-label">電話番号</label>
            <div class="col-md-9">
                <input type="text" class="form-control"name="tel" id="tel"value="{{old('tel')}}">
            </div>
            <div class="col-md-9">
                @if($errors->has('tel'))
                    <span class="text-danger">
                        {{$errors->first('tel')}}
                    </span>
                @endif
            </div>
            <div class="col-md-offset-3 text-center">
                <button class="btn btn-primary">確認画面へ</button>
            </div>
        </div>
    
    </form>

@endsection