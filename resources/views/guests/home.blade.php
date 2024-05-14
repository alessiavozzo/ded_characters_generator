@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($items as $item)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h1>{{ $item->name }}</h1>
                            <h5>{{ $item->slug }}</h5>
                            <h5>{{ $item->type }}</h5>
                            <h5>{{ $item->category }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
