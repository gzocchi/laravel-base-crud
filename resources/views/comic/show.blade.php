@extends('layouts.main')

@section('page_title', 'Detail')

@section('main_content')
<section class="py-4">

    <div class="row my-2">
        <div class="col-sm-12 col-md-3 text-center mb-3">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->slug }}">
        </div>
        <div class="col-sm-12 col-md-9">

            <h2 class="text-center text-info mb-4">{{ $comic->title }}</h2>

            <ul class="list-group">
                <li class="list-group-item"><small class="font-weight-bold">Serie:</small> {{ $comic->series }}</li>
                <li class="list-group-item"><small class="font-weight-bold">Tipo:</small> {{ $comic->type }}</li>
                <li class="list-group-item"><small class="font-weight-bold">Data di Vendita:</small> {{ $comic->sale_date }}</li>
                <li class="list-group-item"><small class="font-weight-bold">Prezzo:</small> {{ $comic->price }} &euro;</li>
            </ul>
        </div>
    </div>

    <p class="p-3">{{ $comic->description }}</p>

    <div class="text-center">
        <a href="{{ route("comic.index") }}" class="btn btn-sm btn-info">Torna all'elenco</a>
    </div>
    
</section>
@endsection