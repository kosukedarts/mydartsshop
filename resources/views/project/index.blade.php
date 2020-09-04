@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        　<div class="row">
            <dt><h4 class="subtitle color-primary">雰囲気で検索</h4></dt>
　　　　<form action="{{ action('ProjectController@index') }}" method="get">
　　　　<input type="radio" name="mood" value="初心者歓迎">初心者歓迎
　　　　<input type="radio" name="mood" value="一人でも入りやすい">一人でも入りやすい
　　　　<input type="radio" name="mood" value="ガッツリ練習">ガッツリ練習
　　　　<input type="radio" name="mood" value="対戦">対戦
　　　　<input type="radio" name="mood" value="安い">安い
　　　　<input type="radio" name="mood" value="家族と一緒に">家族と一緒に
　　　　<input type="radio" name="mood" value="品揃え豊富">品揃え豊富
　　　　<input type="radio" name="mood" value="デート">デート
　　　　<input type="radio" name="mood" value="フード、ドリンクが充実">フード、ドリンクが充実
     　 <input type="submit" name="submit" value="絞り込む"><br />
        </form>
            <br>
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="title">
                                    <a href="{{ str_limit($post->url, 200) }}">{{ str_limit($post->title, 200) }}</a>
                                </div>
                                <div class="body mt-3">
                                    {{ str_limit($post->body, 1500) }}
                                </div>
                                <div class="day">
                                    {{ str_limit($post->day, 200) }}
                                </div>
                                <div class="adress">
                                    {{ str_limit($post->adress, 200) }}
                                </div>
                                <div class="mood">
                                    {{ str_limit($post->mood, 200) }}
                                </div>
                            </div>
                            <div class="image col-md-6 text-right mt-4">
                                @if ($post->image_path)
                                    <img src="{{ $post->image_path }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection