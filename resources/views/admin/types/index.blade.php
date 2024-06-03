@extends('layouts.admin')

@section('content')
  <section id="current-series" class="bg-dark">
    <div class="container py-4">

      @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          {{ session('message') }}
        </div>
      @endif

      <div class="d-flex justify-content-end align-items-center mb-3">
        <a class="btn btn-primary" href="{{ route('admin.types.create') }}"> Add new type</a>
      </div>

      <div class="table-responsive rounded">
        <table class="table table-light table-hover table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NAME</th>
              <th scope="col">SLUG</th>
              <th scope="col">DESCRIPTION</th>
              <th scope="col">ACTIONS</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($types as $type)
              <tr class="align-middle">
                <td scope="row">{{ $type->id }}</td>
                <td>{{ $type->name }}</td>
                <td>{{ $type->slug }}</td>
                <td class="text-truncate" style="max-width:1px">{{ $type->desc }}</td>
                <td>
                  {{-- show single character --}}
                  <a class="btn btn-info" href="{{ route('admin.types.show', $type) }}">
                    <i class="fa-solid fa-eye"></i>
                  </a>
                  {{-- edit single character --}}
                  <a class="btn btn-warning" href="{{ route('admin.types.edit', $type) }}">
                    <i class="fa-solid fa-pencil"></i>
                  </a>
                  {{-- delete single character --}}
                  <!-- Modal trigger button -->
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#modalId-{{ $type->id }}">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                  @include('partials.modal-type')

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
        {{ $types->links('pagination::bootstrap-5') }}
      </div>
    </div>
  </section>
@endsection
