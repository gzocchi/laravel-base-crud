@extends('layouts.main')

@section('page_title', 'Comic | Edit')

@section('main_content')
<section class="py-4">

    <div class="row mb-4">
        <div class="d-none d-md-block col-md-1">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->slug }}" class="img-fluid">
        </div>
        <div class="col-md-11">
            <h1 class="mb-1">Edit Comic - <span class="text-info">{{ $comic->title }}</span></h1>
            <a href="{{ route("comic.show", $comic->id) }}" class="btn btn-sm btn-outline-success text-uppercase">Show</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p class="my-1">{{ $error }}</p>
            @endforeach            
        </div>
    @endif
    
    <form action="{{ route('comic.update', $comic->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror"" id="title" placeholder="Inserisci il titolo" name="title" value="{{ old('title', $comic->title) }}" required>
            </div>
            <div class="form-group col-md-4">
                <label for="series">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror"" id="series" placeholder="Inserisci la serie" name="series" value="{{ old('series', $comic->series) }}" required>
            </div>
            <div class="form-group col-md-4">
                <label for="type">Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror"" id="type" placeholder="Inserisci il tipo" name="type" value="{{ old('type', $comic->type) }}" required>
            </div>
        </div>
        
        <div class="form-row my-4">
            <div class="form-group col">
                <label for="description">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror"" id="description" name="description" placeholder="Descrizione del fumetto" rows="5" required>{{ old('description', $comic->description) }}</textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="thumb">Copertina</label>
                <input type="text" class="form-control @error('thumbs') is-invalid @enderror"" id="thumb" placeholder="Inserisci URL immagine" name="thumb" value="{{ old('thumb', $comic->thumb) }}" required>
            </div>
            <div class="form-group col-md-4">
                <label for="price">Prezzo</label>
                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"" id="price" placeholder="Inserisci il prezzo" name="price" value="{{ old('price', $comic->price) }}" min="0" max="9999.99" required>
            </div>
            <div class="form-group col-md-4">
                <label for="sale_date">Data di vendita</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror"" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" required>
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