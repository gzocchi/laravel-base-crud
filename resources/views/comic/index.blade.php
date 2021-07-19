@extends('layouts.main')

@section('page_title', 'Comic Detail')

@section('main_content')
<section class="py-4">
    <h1 class="text-center text-underline my-3">Comic Detail</h1>

    <table class="my-5 table table-striped table-bordered table-responsive-md">
        <thead class="table-dark text-uppercase">
          <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Serie</th>
            <th scope="col">Tipo</th>
            <th colspan="3" class="text-center">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->series }}</td>
                    <td>{{ $item->type }}</td>
                    <td class="text-uppercase text-center">
                        <a href="{{ route("comic.show", $item->id) }}" class="btn btn-sm btn-outline-success">Show</a>
                    </td>
                    <td class="text-uppercase text-center">
                        <a href="{{ route("comic.edit", $item->id) }}" class="btn btn-sm btn-outline-info">Edit</a>
                    </td>
                    <td class="text-uppercase text-center">
                        <a href="{{ route("comic.destroy", $item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      <div class="pagination">
          {{ $comics->links() }}
      </div>

      
    
</section>
@endsection