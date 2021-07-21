@extends('layouts.main')

@section('page_title', 'Comic | Index')

@section('main_content')
<section class="comic_table">

    @if (session('deleted'))
        <div class="alert alert-danger">
            {{ session('deleted') }}
        </div>
    @endif

    <table class="my-3 table table-striped table-bordered table-responsive-md">
        <thead class="table-dark text-uppercase">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Serie</th>
            <th scope="col">Tipo</th>
            <th colspan="3" class="text-center">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
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
                        <form 
                            action="{{ route('comic.destroy', $item->id) }}" method="POST"
                            onSubmit = "return confirm(`Cancellare definitivamente '{{ $item->title }}'?`)">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-danger text-uppercase">Delete</button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

      <div class="my_pagination my-4">
          {{ $comics->links() }}
      </div>

</section>
@endsection