@extends('layouts.admin')

@section('content')
  <div class="container">
    <h3 class="mt-3 text-center">Add Item</h3>

    <form action="{{ route('admin.items.store') }}" method="post" class="pt-3 pb-5">
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
        <label for="type" class="form-label">type</label>
        <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
          aria-describedby="helpId" placeholder="" value="{{ old('type') }}" />
        <small id="typeHelper" class="form-text text-muted">Aggiungi il type </small>
        @error('type')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="category" class="form-label">category</label>
        <input type="text" class="form-control @error('category') is-invalid @enderror" name="category" id="category"
          aria-describedby="helpId" placeholder="" value="{{ old('category') }}" />
        <small id="categoryHelper" class="form-text text-muted">Scrivi la category</small>
        @error('category')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="weight" class="form-label">weight</label>
        <input type="text" class="form-control @error('weight') is-invalid @enderror" name="weight" id="weight"
          aria-describedby="helpId" placeholder="" value="{{ old('weight') }}" />
        <small id="weightHelper" class="form-text text-muted">Scrivi la weight</small>
        @error('weight')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="cost" class="form-label">cost</label>
        <input type="text" class="form-control @error('cost') is-invalid @enderror" name="cost" id="cost"
          aria-describedby="helpId" placeholder="" value="{{ old('cost') }}" />
        <small id="costHelper" class="form-text text-muted">Scrivi la cost</small>
        @error('cost')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="damage_dice" class="form-label">damage_dice</label>
        <input type="text" class="form-control @error('damage_dice') is-invalid @enderror" name="damage_dice"
          id="damage_dice" aria-describedby="helpId" placeholder="" value="{{ old('damage_dice') }}" />
        <small id="damage_diceHelper" class="form-text text-muted">Scrivi la damage_dice</small>
        @error('damage_dice')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>


      <button type="submit" class="btn btn-primary">
        Add
      </button>



    </form>
  </div>
@endsection
