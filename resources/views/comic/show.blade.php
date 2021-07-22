@extends('layouts.main')

@section('page_title', 'Comic | Detail')

@section('main_content')
<section class="py-4">

    @if (session('message'))
        <div class="alert alert-info mb-4">
            {{ session('message') }}
        </div>
    @endif

    <div class="row my-2">
        <div class="col-sm-12 col-md-3 text-center mb-3">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->slug }}" class="img-fluid">
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

    <p class="p-3 text-justify">{{ $comic->description }}</p>

    <div class="text-center">
        <a href="{{ route("comic.index") }}" class="btn btn-sm btn-info text-uppercase">Index</a>
        <a href="{{ route("comic.edit", $comic->id) }}" class="btn btn-sm btn-outline-info text-uppercase">Edit</a>
    </div>

</section>
@endsection