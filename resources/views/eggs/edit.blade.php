@extends('layouts.main')
@section("content")
<main>
    <h1 class="text-center py-4">Creazione Uova</h1>

{{-- form --}}
<div class="container">
  <form class="w-100" action="{{route("eggs.update", $egg->id)}}" method="post">
@csrf
@method("PUT")
<div class="row">
  {{-- form title --}}
  <div class="col-6">
    <div class="mb-3">
      <label for="package_color" class="form-label">Colore Pacchetto</label>
      <input type="text" class="form-control" id="package_color" name="package_color" placeholder="Colore Pacchetto..." value="{{old("package_color", $egg->package_color)}}"
        >
    </div>
  </div>
  {{-- form thumb --}}
  <div class="col-6">
    <div class="mb-3">
      <label for="surprise" class="form-label">Sorpresa</label>
      <input type="text" class="form-control" id="surprise" name="surprise" placeholder="Sorpresa..."  value="{{old("surprise", $egg->surprise)}}"
        >
    </div>
  </div>

  {{-- testo--}}
  <div class="col-6">
    <div class="mb-3">
      <label for="type_chocolate" class="form-label">Cioccolato</label>
      <input type="text" class="form-control" id="type_chocolate" name="type_chocolate" placeholder="Tipo di Cioccolato..."  value="{{old("type_chocolate", $egg->type_chocolate)}}"
        >
    </div>
  </div>

    {{-- select --}}
  <div class="col-6">
    <div class="mb-3">
      <label for="size" class="form-label">Dimensione</label>
      <select name="size" id="size" class="form-select" >
        <option selected>Seleziona Dimensione</option>
        <option @if (old("size", $egg->size)==="S") selected @endif value="S">S</option>
        <option @if (old("size", $egg->size)==="M") selected @endif value="M">M</option>
        <option @if (old("size", $egg->size)==="L") selected @endif value="L">L</option>
        <option @if (old("size", $egg->size)==="X") selected @endif value="X">X</option>
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