@extends('layouts.main')

@section('page_title', 'Home | Comic Detail')

@section('main_content')
<section class="py-4">
    <h1 class="text-center my-3">Comic Detail</h1>

    {{-- DEBUG --}}
    @foreach ($comics as $item)
        @dump($item->getAttributes())
    @endforeach
    
</section>
@endsection