@extends('layouts.admin')
@section('title', 'お店の新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>お店の新規作成</h2>
                <form action="{{ action('Admin\ProjectController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="url">リンク</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="url" value="{{ old('url') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="url">定休日</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="day" value="{{ old('day') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="url">住所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="adress" value="{{ old('adress') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="url">雰囲気</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="mood" value="{{ old('mood') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection