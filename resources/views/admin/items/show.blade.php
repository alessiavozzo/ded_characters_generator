@extends('layouts.admin')

@section('content')
    <div class="items_header bg-dark py-2">
        <div class="container d-flex justify-content-between align-items-center">
            <h2 class="text-light">{{ $item->name }}</h2>
            <div class="actions">
                <a class="btn btn-warning" href="{{ route('admin.items.edit', $item) }}">
                    Edit
                </a>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#modalId-{{ $item->id }}">
                    Delete
                </button>
                @include('partials.modal-items')
            </div>
        </div>
    </div>
    <div class="container py-3">
        <div class="col-4">
            <div class="card">
                <h2 class="card-title">{{ $item->name }}</h2>
                <p>{{ $item->slug }}</p>
                <p>{{ $item->type }}</p>
                <p>{{ $item->category }}</p>
                <p>{{ $item->weight }}</p>
                <p>{{ $item->cost }}</p>
                <p>{{ $item->damage_dice }}</p>
            </div>
        </div>
    </div>
@endsection
