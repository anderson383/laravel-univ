@extends('..layouts.main')


@section('main')
    <div class="container mt-5">
        <h1>Crear pedido</h1>
        <hr>
        <form action="{{ route('pedidos.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12 my-4">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" id="nombre">
                </div>
                <div class="col-12 pb-3">
                    <label for="nombre">Descripcion</label>
                    <textarea cols="30" rows="10" name="descripcion" class="form-control" id="descripcion" placeholder="Descripción"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" >Guardar</button>
            
            
        </form>
    </div>
@endsection