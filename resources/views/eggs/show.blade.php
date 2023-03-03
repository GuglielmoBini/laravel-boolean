@extends('layouts.main')
@section('title', 'Details')
@section("content")
<main class="main-show d-flex justify-content-center">
    <div class="card m-5" style="width: 50%;">
        <div class="card-header text-center">
          <h1>Uovo</h1>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>Colore: </strong>{{$egg->package_color}}</li>
          <li class="list-group-item"><strong>Sorpresa: </strong>{{$egg->surprise}}</li>
          <li class="list-group-item"><strong>Cioccolato: </strong>{{$egg->type_chocolate}}</li>
          <li class="list-group-item"><strong>Dimensioni: </strong>{{$egg->size}}</li>
        </ul>
      </div>
</main>
<div class="text-center">
    <a class="btn btn-secondary" href="{{route("eggs.index")}}">Esci dall'Uovo</a>
</div>
@endsection