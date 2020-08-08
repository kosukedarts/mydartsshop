<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/slide.css') }}" rel="stylesheet">
    </head>
    <body>
        <style>
            body {
            margin-left:200px;
                }
            body {
            margin-right:200px;
                }
        </style>
      <p>
        <div style="margin-bottom:30px"></div>
    　</p>
      <h1><center><a href="https://5ab816667ade45009462a2e3a30e0349.vfs.cloud9.us-east-2.amazonaws.com/" style="text-decoration: none;">kosukeのきままなダーツ日記</a></center></h1>
      <hr>
      <h5><center>私が今まで行ったことのある札幌のダーツショップやダーツが出来るネットカフェについて独断と偏見で綴っていきます。</center></h5>
      <h5><center>これからも新しいダーツショップやダーツバーを開拓していく予定なので、その都度更新していきます。</center></h5>
      <div class="container">
    <figure>
      <h2>ダーツハイブ札幌店 <img src="https://card.dartslive.com/t_prm/img/tmico/6f0a2ad67230d728aa22845c83943e4fc389f5b271bf2161cecaf7095f7bbb73748.jpg" alt=""></h2> 
        <h11>　　dartslive公式→<a href="https://search.dartslive.com/jp/shop/9ec8c750484d3ba30d9b047a20a7ba1e">https://search.dartslive.com/jp/shop/9ec8c750484d3ba30d9b047a20a7ba1e</a></h11>
    </figure>
        <body>
        <p>
        <div class="cp_cssslider">
	      <div class="cp_slidewrapper">
            <div class="cp_slide_item"><img src="https://dl.cdn.dartslive.com/search/photo/9ec8c750484d3ba39954fe9d93c47d02.jpg?1596795535196" width="400" height="400" ></div>
            <div class="cp_slide_item"><img src="https://dl.cdn.dartslive.com/search/photo/9ec8c750484d3ba3185b270006915642.jpg?1596640931045" width="400" height="400" ></div>
            <div class="cp_slide_item"><img src="https://dl.cdn.dartslive.com/search/photo/9ec8c750484d3ba38e3e627b26e12faa.jpg?1596726439833" width="400" height="400" ></div>
            <div class="cp_slide_item"><img src="https://dl.cdn.dartslive.com/search/photo/9ec8c750484d3ba336bd7d144e4a3b4e.jpg?1596726439833" width="400" height="400" ></div>
            <div class="cp_slide_item"><img src="https://dl.cdn.dartslive.com/search/photo/9ec8c750484d3ba3d58f0ec9038b31f1.jpg?1596726439833" width="400" height="400" ></div>  
        ダーツ用品をそろえるならここ！！<br>
        ダーツ用品、品揃え豊富なダーツショップ。北海道最大級の品揃えでソフトダーツ用品はもちろん、ハード用ダーツも多数。ダーツを始めたいという人もバレルを買い買いたいという人もハイブ札幌に行けば１日で解決します。<br>
        私もダーツを始めようと思ったとき、ここを最初に訪れました。</p>
        
          </div>
        </div>
            <div id="app"></div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- ここまでナビゲーションバー --}}

            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
        </div>
    </body>
    <footer>
  　　<p><center>Copyright ©kosukeのダーツ日記 All rights reserved.</center></p>
　　</footer>
</html>