@extends('layouts.main')

@section('page_title', 'Home | Comics CRUD')

@section('main_content')
<section class="py-4">
    <h1 class="text-center my-3">Home Page | laravel-base-crud</h1>
   
    <div id="carouselExampleControls" class="carousel slide col-md-4 offset-md-4 my-4" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">

          @foreach ($comicSelect as $item)

            <div class="carousel-item
                @if ($loop->first)
                active
                @endif
                "
            >
                <a href="{{ route("comic.show", $item->id) }}">
                    <img class="d-block w-100" src="{{$item->thumb}}" alt="{{$item->slug}}">
                </a>
                <div class="my_caption carousel-caption d-none d-md-block">
                    <h5 class="font-weight-bold text-dark">{{$item->title}}</h5>
                </div>
            </div>

          @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

</section>
@endsection