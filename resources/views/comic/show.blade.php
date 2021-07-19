@extends('layouts.main')

@section('page_title', 'Detail')

@section('main_content')
<section class="py-4">
    <h1 class="text-center my-3">Detail</h1>

    {{-- DEBUG --}}
    @dump($comic->getAttributes())

    
</section>
@endsection