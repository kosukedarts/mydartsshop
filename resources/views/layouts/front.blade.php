<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
　　　　
　　　　<title>kosukeのダーツ日記</title>
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
        <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
　　</head>
　　 <body>
      <div class="container">
      <div class="header-title-area">
      <h1><center><a href="/" style="text-decoration: none;">kosukeのきままなダーツ日記</a></center></h1>
      <hr>
      <h5><center>私が今まで行ったことのある札幌のダーツショップやダーツが出来るネットカフェについて独断と偏見で綴っていきます。</center></h5>
      <h5><center>これからも新しいダーツショップやダーツバーを開拓していく予定なので、その都度更新していきます。</center></h5>
      <h6 style="text-align:right">そもそもkosukeって誰？？<a href="/admin/project/profile">⇒プロフィール詳細</a></h6>
      <div id="app">
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
    </body>
    <footer>
  　　<p><center>Copyright ©kosukeのダーツ日記 All rights reserved.</center></p>
　　</footer>
</html>