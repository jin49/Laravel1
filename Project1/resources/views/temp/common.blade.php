<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @yield('pageCss')
    <title>@yield('title')|nodoame.net</title>
</head>

<body>
    <header class="glovalNavigation">
        <div class="glNaviContents">
            <h1>
                <a href="#">
                    <img src="{{ asset('img/demoLogo2.png') }}" alt="logo">
                </a>
            </h1>
            <nav>
                <ul>
                    @if (Auth::id())
                        <form action="{{ route('logout') }}" method=post name='a_form'>
                            @csrf
                            <a href="#" onclick="document.a_form.submit();">
                                <li class="loginButton">
                                    <span>{{ Auth::user()->name }} <br> (ログアウト)</span>
                                </li>
                            </a>
                        </form>
                    @else
                        <li><a href="{{ route('login') }}" class="loginButton"><span>ログイン<span></a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="localNavigation">
            <div id="navibox">
                <ul id="navi">
                    <li><a href="/">
                            <img src="{{ asset('img/home2.png') }}" alt="logo" class="naviMark">
                            ホーム
                        </a>
                    </li>
                    <li><a href="/Search">
                            <img src="{{ asset('img/search.png') }}" alt="logo" class="naviMark">
                            検索
                        </a>
                    </li>
                    <li>
                        <a href="/PlaylistAdd">
                            <img src="{{ asset('img/songlist.png') }}" alt="logo" class="naviMark">
                            ⊕プレイリスト追加
                        </a>
                    </li>
                    <li>
                        <a href="/Music/create">
                            <img src="{{ asset('img/music.png') }}" alt="logo" class="naviMark">
                            ⊕楽曲新規作成
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="contents">
            @yield('contents')
        </div>
    </main>

    <!-- <footer>
        <div class="footerMenu">
            <ul>
                <li><a href="index.html">ホーム</a></li>
                <li><a href="menu.html">メニュー</a></li>
                <li><a href="contact.html">問い合わせ</a></li>
            </ul>
        </div>
        <p>© Practice. 2022.</p>
    </footer> -->

    <footer id="footer">

        <ul>
            <li><a href="cat1/index.html">カテゴリ1</a></li>
            <li><a href="cat2/index.html">カテゴリ2</a></li>
            <li><a href="cat3/index.html">カテゴリ3</a></li>
            <li><a href="cat4/index.html">カテゴリ4</a></li>
        </ul>

        <p>Copyright (C) All Rights Reserved.</p>

    </footer>

</body>
