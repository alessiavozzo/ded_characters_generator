@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-title">{{ $character->name }}</div>
                    <div class="card-body">
                        <div class="card-text">
                            {{ $character->description }}
                        </div>
                        <div class="card-text">
                            {{ $character->attack }}
                        </div>
                        <div class="card-text">
                            {{ $character->defense }}
                        </div>
                        <div class="card-text">
                            {{ $character->speed }}
                        </div>
                        <div class="card-text">
                            {{ $character->type?->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
