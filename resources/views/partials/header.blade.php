<body>
    <header>
        <div class="container container--l">
            <img src="{{ asset('images/marchio-sito-test.png') }}" alt="la-molisana-logo">
            <nav class="main__nav">
                <ul>
                    <li><a href="{{route('homepage')}}" class="{{Route::getCurrentRoute()->getName() == 'homepage' ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{route('prodotto', ['id' => 0])}}" class="{{Route::getCurrentRoute()->getName() == 'prodotto' ? 'active' : '' }}">Prodotti</a></li>
                    <li><a href="{{route('news')}}" class="{{Route::getCurrentRoute()->getName() == 'news' ? 'active' : '' }}">News</a></li>
                </ul>
            </nav>
        </div>
    </header>