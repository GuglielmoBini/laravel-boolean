@extends('layouts.main')
@section('title', 'Back Office')
@section('content')
<main class="main-index d-flex flex-column align-items-center">
    <div  class="my-2 text-center">
        <h3 class="mb-4">Back-Office Uova</h3>
        <a class="btn btn-success" href="{{route("eggs.create")}}">Aggiungi +</a>
    </div>
    @if (session('delete'))
      <div class="alert alert-success text-center p-4 fs-4 my-3">{{ session('delete') }}</div>
    @endif
    <table class="table table-sm my-3 ">
            <thead>
              <tr>
                <th scope="col">Colore</th>
                <th scope="col">Sorpresa</th>
                <th scope="col">Cioccolato</th>
                <th scope="col">Dimensioni</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>    
              <tr>
                @foreach($eggs as $egg)
                <td>{{$egg->package_color}}</td>
                <td>{{$egg->surprise}}</td>
                <td>{{$egg->type_chocolate}}</td>
                <td>{{$egg->size}}</td>
                <td class="td-btn">
                    <div class="d-flex">
                      <a class="btn btn-warning" href="{{route ("eggs.edit", $egg->id)}}">Modifica</a>
                      <form class="mx-3" action="{{route("eggs.destroy", $egg->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Elimina</button>
                      </form>
                      <a  class="btn btn-primary" href="{{route ("eggs.show", $egg->id)}}">Visualizza</a>
                    </div>
                </td>
              </tr>
              @endforeach
            </tbody>
      </table>
</main>
@endsection