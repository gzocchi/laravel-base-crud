@extends('layouts.main')

@section('page_title', 'Comic | Edit')

@section('main_content')
<section class="py-4">

    <h1 class="mb-1">Edit Comic - <span class="text-info">{{ $comic->title }}</span></h1>
    <a href="{{ route("comic.show", $comic->id) }}" class="btn btn-sm btn-outline-success text-uppercase mb-4">Show</a>
    
    <form action="{{ route('comic.update', $comic->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo" name="title" value="{{ $comic->title }}">
            </div>
            <div class="form-group col-md-4">
                <label for="series">Serie</label>
                <input type="text" class="form-control" id="series" placeholder="Inserisci la serie" name="series" value="{{ $comic->series }}">
            </div>
            <div class="form-group col-md-4">
                <label for="type">Tipo</label>
                <input type="text" class="form-control" id="type" placeholder="Inserisci il tipo" name="type" value="{{ $comic->type }}">
            </div>
        </div>
        

        <div class="form-group my-5">
            {{-- <label for="description"></label> --}}
            <textarea class="form-control" id="description" name="description" placeholder="Descrizione del fumetto" rows="5">{{ $comic->description }}</textarea>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="thumb">Copertina</label>
                <input type="text" class="form-control" id="thumb" placeholder="Inserisci URL immagine" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="form-group col-md-4">
                <label for="price">Prezzo</label>
                <input type="number" step="0.01" class="form-control" id="price" placeholder="Inserisci il prezzo" name="price" value="{{ $comic->price }}">
            </div>
            <div class="form-group col-md-4">
                <label for="sale_date">Data di vendita</label>
                <input type="text" class="form-control" id="sale_date" placeholder="AAAA-MM-GG" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route("comic.index") }}" class="btn btn-sm btn-info text-uppercase">Index</a>
            <button type="submit" class="btn btn-sm btn-success text-uppercase">Save</button>
        </div>
        
      </form>
    </form>
    
</section>
@endsection