@extends('layouts.app')

@section('content')
  <div class="container">
    <h3 class="mt-3 text-center">Add Character</h3>

    <form action="{{ route('admin.characters.store') }}" method="post" class="pt-3 pb-5">
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
        <label for="type_id" class="form-label">Type</label>
        <select class="form-select" name="type_id" id="type_id">
          <option selected disabled>Select type</option>
          @foreach ($types as $type)
            <option value="{{ $type->id }}" {{ $type->id == old('type_id') ? 'selected' : '' }}>
              {{ $type->name }}</option>
          @endforeach
        </select>

      </div>

      <label for="items[]" class="form-label">Item used</label>
      <div class="mb-3 d-flex gap-3 flex-wrap">

        @foreach ($items as $item)
          <div class="form-check @error('items') is-invalid @enderror">

            <input name="items[]" class="form-check-input" type="checkbox" value="{{ $item->id }}"
              id="item-{{ $item->id }}" {{ in_array($item->id, old('items', [])) ? 'checked' : '' }} />
            <label class="form-check-label" for="item-{{ $item->id }}">
              {{ $item->name }}
            </label>

          </div>
        @endforeach

        @error('items')
          <div class="text-danger">{{ $message }}</div>
        @enderror

      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
          rows="7">{{ old('description') }}</textarea>
        @error('description')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="attack" class="form-label">Attack</label>
        <input type="number" class="form-control @error('attack') is-invalid @enderror" name="attack" id="attack"
          aria-describedby="helpId" placeholder="" value="{{ old('attack') }}" required />
        <small id="attackHelper" class="form-text text-muted">Aggiungi il valore dell'attack</small>
        @error('attack')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="defense" class="form-label">Defense</label>
        <input type="number" class="form-control @error('defense') is-invalid @enderror" name="defense" id="defense"
          aria-describedby="helpId" placeholder="" value="{{ old('defense') }}" />
        <small id="defenseHelper" class="form-text text-muted">Aggiungi il defense </small>
        @error('defense')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="speed" class="form-label">Speed</label>
        <input type="text" class="form-control @error('speed') is-invalid @enderror" name="speed" id="speed"
          aria-describedby="helpId" placeholder="" value="{{ old('speed') }}" />
        <small id="speedHelper" class="form-text text-muted">Scrivi la speed</small>
        @error('speed')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>


      <button type="submit" class="btn btn-primary">
        Add
      </button>



    </form>
  </div>
@endsection
