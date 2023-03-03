@extends('layouts.main')
@section("content")
<main class="main-show d-flex justify-content-center">
    <div class="card m-5" style="width: 50%;">
        <div class="card-header text-center">
          <h1>Uovo</h1>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Colore: {{$egg->package_color}}</li>
          <li class="list-group-item">Sorpresa: {{$egg->surprise}}</li>
          <li class="list-group-item">Cioccolato: {{$egg->type_chocolate}}</li>
          <li class="list-group-item">Dimensioni: {{$egg->size}}</li>
        </ul>
      </div>
</main>
<div class="text-center">
    <a class="btn btn-secondary" href="{{route("eggs.index")}}">Esci dall'uovo</a>
</div>
@endsection