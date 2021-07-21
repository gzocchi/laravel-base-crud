@extends('layouts.main')

@section('page_title', 'Comic | Create')

@section('main_content')
<section class="py-4">

    <h1 class="text-center text-info mb-4">New Comic</h1>

    <form action="{{ route('comic.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo" name="title" required>
            </div>
            <div class="form-group col-md-4">
                <label for="series">Serie</label>
                <input type="text" class="form-control" id="series" placeholder="Inserisci la serie" name="series" required>
            </div>
            <div class="form-group col-md-4">
                <label for="type">Tipo</label>
                <input type="text" class="form-control" id="type" placeholder="Inserisci il tipo" name="type" required>
            </div>
        </div>
        

        <div class="form-group my-5">
            {{-- <label for="description"></label> --}}
            <textarea class="form-control" id="description" name="description" placeholder="Descrizione del fumetto" rows="5" required></textarea>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="thumb">Copertina</label>
                <input type="text" class="form-control" id="thumb" placeholder="Inserisci URL immagine" name="thumb" required>
            </div>
            <div class="form-group col-md-4">
                <label for="price">Prezzo</label>
                <input type="number" step="0.01" class="form-control" id="price" placeholder="Inserisci il prezzo" name="price" required>
            </div>
            <div class="form-group col-md-4">
                <label for="sale_date">Data di vendita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" required>
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-sm btn-success text-uppercase">Save</button>
        </div>
        
      </form>
    </form>
    
</section>
@endsection