@extends('layouts.admin')

@section('content')
  <section id="current-series" class="bg-dark">
    <div class="container py-4">

      <div class="d-flex justify-content-end align-items-center mb-3">
        <a class="btn btn-primary" href="{{ route('admin.characters.create') }}"> Add new character </a>
      </div>

      <div class="table-responsive rounded">
        <table class="table table-secondary  table-hover table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NAME</th>
              <th scope="col">TYPE</th>
              <th scope="col">INVENTORY</th>
              <th scope="col">DESCRIPTION</th>
              <th scope="col">ATTACK</th>
              <th scope="col">DEFENSE</th>
              <th scope="col">SPEED</th>
              <th scope="col">ACTIONS</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($characters as $character)
              <tr class="align-middle">
                <td scope="row">{{ $character->id }}</td>
                <td>{{ $character->name }}</td>
                <td>{{ $character->type?->name }}</td>

                <td width="10%">
                  @if (count($character->items) > 0)
                    <div class="d-flex gap-1 flex-wrap">
                      @foreach ($character->items as $item)
                        <div>{{ $item->name }} </div>
                      @endforeach
                    </div>
                  @else
                    No items in inventory
                  @endif

                </td>

                <td>{{ $character->description }}</td>
                <td>{{ $character->attack }}</td>
                <td>{{ $character->defense }}</td>
                <td>{{ $character->speed }}</td>
                <td>
                  {{-- show single character --}}
                  <a class="btn btn-info" href="{{ route('admin.characters.show', $character) }}">
                    <i class="fa-solid fa-eye"></i>
                  </a>
                  {{-- edit single character --}}
                  <a class="btn btn-warning" href="{{ route('admin.characters.edit', $character) }}">
                    <i class="fa-solid fa-pencil"></i>
                  </a>
                  {{-- delete single character --}}
                  <!-- Modal trigger button -->
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#modalId-{{ $character->id }}">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                  @include('partials.modal')

                </td>

              </tr>
            @empty

              <tr class="">
                <td scope="row" colspan="7">Nothing to show</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>



      <div class="controls mt-3">
        {{ $characters->links('pagination::bootstrap-5') }}
      </div>
    </div>
  </section>
@endsection
