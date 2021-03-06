@extends('layouts.mainLay')

@section('pageTitle')
    La Molisana - {{ $pasta['titolo'] }}
    
@endsection

@section('main__content')
    <div class="product">
        <div class="container container--l">
            <h1>{{ $pasta['titolo'] }}</h1>
            <img src="{{ $pasta['src-h'] }}" alt="{{ $pasta['titolo'] }}">
            <img src="{{ $pasta['src-p'] }}" alt="{{ $pasta['titolo'] }}">
            <p>{!! $pasta['descrizione'] !!}</p>
        </div>
    </div>
    

@endsection