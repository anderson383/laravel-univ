@extends('..layouts.main')


@section('main')
    <div class="container mt-5">
        <h1>Listado de pedidos</h1>
        <hr>
        <a href="{{ route('pedidos.create') }}" class="btn btn-primary">Añadir</a>
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Categorias</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedidos as $item)
                        <tr>
                            <td>
                                {{ $item->id}}
                            </td>
                            <td>
                                {{ $item->nombre}}
                            </td>
                            <td>
                                {{ $item->descripcion}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
