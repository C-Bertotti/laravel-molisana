@extends('layouts.mainLay')

@section('main__content')
    <div class="home__wrapper">
        <div class="container container--l">
            <section>
                <h2>Le lunghe</h2>
                <div class="boxes">
                    @foreach($lunga as $pasta)
                    <div class="box">
                        <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                    </div>
                    @endforeach
                </div>
            </section>
            <section>
                <h2>Le corte</h2>
                <div class="boxes">
                    @foreach($corta as $pasta)
                    <div class="box">
                        <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                    </div>
                    @endforeach
                </div>
            </section>
            <section>
                <h2>Le cortissime</h2>
                <div class="boxes">
                    @foreach($cortissima as $pasta)
                    <div class="box">
                        <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                    </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div> 
@endsection
