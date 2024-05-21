@extends('layouts.admin')

@section('content')
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
