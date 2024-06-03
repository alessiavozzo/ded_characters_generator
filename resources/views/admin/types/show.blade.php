@extends('layouts.admin')

@section('content')
    <div class="items_header bg-dark py-2">
        <div class="container d-flex justify-content-between align-items-center">
            <h2 class="text-light">{{ $type->name }}</h2>
            <div class="actions">
                <a class="btn btn-warning" href="{{ route('admin.types.edit', $type) }}">
                    Edit
                </a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#modalId-{{ $type->id }}">
                    Delete
                </button>
                @include('partials.modal-type')
            </div>
        </div>
    </div>
    <div class="container py-3">
        <div class="col-12">
            <div class="card p-5">
                <h2 class="card-title">{{ $type->name }}</h2>
                <p>{{ $type->slug }}</p>
                <p>{{ $type->desc }}</p>
            </div>
        </div>
    </div>
@endsection
