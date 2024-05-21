@extends('layouts.admin')

@section('content')
    <section id="current-series" class="bg-dark">
        <div class="container py-4">

            <div class="d-flex justify-content-end align-items-center mb-3">
                <a class="btn btn-primary" href="{{ route('admin.items.create') }}"> Add new item</a>
            </div>

            <div class="table-responsive rounded">
                <table class="table table-secondary  table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">SLUG</th>
                            <th scope="col">TYPE</th>
                            <th scope="col">CATEGORY</th>
                            <th scope="col">WEIGHT</th>
                            <th scope="col">COST</th>
                            <th scope="col">DAMAGE_DICE</th>
                            <th scope="col">ACTIONS</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr class="align-middle">
                                <td scope="row">{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->category }}</td>
                                <td>{{ $item->weight }}</td>
                                <td>{{ $item->cost }}</td>
                                <td>{{ $item->damage_dice }}</td>
                                <td>
                                    {{-- show single character --}}
                                    <a class="btn btn-info" href="{{ route('admin.items.show', $item) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    {{-- edit single character --}}
                                    <a class="btn btn-warning" href="{{ route('admin.items.edit', $item) }}">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    {{-- delete single character --}}
                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalId-{{ $item->id }}">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                    @include('partials.modal-items')

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
                {{ $items->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>
@endsection
