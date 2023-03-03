@extends('layouts.main')
@section("content")
<main>
    <h1 class="text-center py-4">Creazione Uova</h1>

{{-- form --}}
<div class="container">
  <form class="w-100" action="{{route("eggs.store")}}" method="post">
@csrf

<div class="row">
  {{-- form title --}}
  <div class="col-6">
    <div class="mb-3">
      <label for="package_color" class="form-label">Colore Pacchetto</label>
      <input type="text" class="form-control" id="package_color" name="package_color" placeholder="Colore Pacchetto..."
        >
    </div>
  </div>
  {{-- form thumb --}}
  <div class="col-6">
    <div class="mb-3">
      <label for="surprise" class="form-label">Sorpresa</label>
      <input type="text" class="form-control" id="surprise" name="surprise" placeholder="Sorpresa..."
        >
    </div>
  </div>

  {{-- testo--}}
  <div class="col-6">
    <div class="mb-3">
      <label for="type_chocolate" class="form-label">Cioccolato</label>
      <input type="text" class="form-control" id="type_chocolate" name="type_chocolate" placeholder="Tipo di Cioccolato..."
        >
    </div>
  </div>

    {{-- select --}}
  <div class="col-6">
    <div class="mb-3">
      <label for="size" class="form-label">Dimensione</label>
      <select name="size" id="size" class="form-select" >
        <option selected>Seleziona Dimensione</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="X">X</option>
      </select>
    </div>
  </div>
  {{-- buttons --}}
  <div class="d-flex justify-content-center align-items-center my-5">
    {{-- submit --}}
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</div>
</form>
</div>
</main>
@endsection