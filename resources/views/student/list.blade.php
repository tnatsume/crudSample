@extends('layouts.app')

@section('title','生徒一覧')

@section('content')
    <div class="container">
        <div class="page-header"style="argin-top:-30px;padding-bottom:0px;">
            <h1><small><a href="/student/list">{{__('受講生一覧')}}</a></small></h1>
            <a href="/student/new"class="btn btn-info">{{__('新規登録')}}</a>
        </div>
        @if(Session::has('message'))
            <script type="text/javascript"src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
            <script>
                $(window).load(function(){
                    $('#modal_box').modal('show');
                });
            </script>
            <!-- モーダルウィンドウの中身 -->
            <div class="modal fade"id="modal_box"abindex="-1"role="dialog">
                <div class="modal-dialog"role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">受講生App</h4>
                        <button type="button"close="close"data-dismiss="modal"aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {{Session('message')}}
                        </div>
                        <div class="modal-footer">
                            <button type="button"class="btn btn-default"data-dismiss="modal">閉じる</button>
                        </div>
                    </div>
                </div>

            </div>
        @endif
        @if(!empty($students))
            <div class="row panel"style="margin-bottom:30px;">
                <div class="col-sm-10"style="margin-bottom:10px;">
                    <form action=""method="GET"class="form-inline">
                        <div class="form-group">
                            <input type="text"name="keyword"class="form-control"value="@if(!empty($keyword)){{$keyword}}@endif"placeholder="検索キーワード">
                        </div>
                        <input type="submit" value="検索"class="btn btn-info">
                    </form>
                </div>
            </div>
            <table class="table table-stripedtable-hover">
                <thead>
                    <tr>
                        <th>@sortablelink('No','No')</th>
                        <th>name</th>
                        <th>@sortablelink('email','メールアドレス')</th>
                        <th>@sortablelink('tel','電話番号')</th>
                        <th>@sortablelink('updated_at','更新時間')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->tel}}</td>
                            <td>{{$student->updated_at}}</td>
                            <td>
                                <a href="/student/edit/{{$student->id}}"class="btn btn-primary btn-sm">編集</a>
                                <form action="/student/delete/{{$student->id}}"method="POST">
                                    {{csrf_field()}}
                                    <input type="submit"value="削除"class="btn btn-danger btn-sm btn-del">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- page control -->
            <div class="text-center">
                @if(empty($keyword))
                    {!! $students->render() !!}
                @else
                    {!! $students->appends(['keyword'=>$keyword])->render() !!}
                @endif
            </div>
        @else
            <p>まだ受講生はいません。</p>
        @endif
    </div>
    @section('script')
    <script>
        window.addEventListener('DOMContentLoaded',function(){
            $(".btn-dell").click(function(){
                if(confirm('本当に削除しますか？')){

                }else{
                    return false;
                }
            });
        });
    </script>
@endsection
@endsection