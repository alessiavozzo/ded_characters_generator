@extends('layouts.admin')

@section('content')
    <div class="container">
        <h3 class="mt-3 text-center">Add Type</h3>

        <form action="{{ route('admin.types.store') }}" method="post" class="pt-3 pb-5">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    aria-describedby="helpId" placeholder="" value="{{ old('name') }}" required />
                <small id="nameHelper" class="form-text text-muted">Scrivi il name</small>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">description</label>
                <textarea class="form-control  @error('desc') is-invalid @enderror" name="desc" id="desc"
                    aria-describedby="helpId" placeholder="aggiungi una descrizione">{{ old('desc') }}</textarea>
                <small id="typeHelper" class="form-text text-muted">Aggiungi la descrizione </small>
                @error('desc')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>



            <button type="submit" class="btn btn-primary">
                Add
            </button>



        </form>
    </div>
@endsection
