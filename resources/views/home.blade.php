@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5 mb-5">
        <a href="{{ route('productos.create') }}" >Crear producto</a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Precio</th>
              <th scope="col">IVA</th>
              <th scope="col">Precio Neto</th>
              <th scope="col">Existencia</th>
              <th scope="col">Proveedor</th>
              <th scope="col">Categoria</th>
              <th scope="col">Marca</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($productos as $producto)
            <tr>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->iva}}</td>
                <td>{{$producto->precio_neto}}</td>
                <td>{{$producto->existencia}}</td>
                <td>{{$producto->proveedor->razon_social}}</td>
                <td>{{$producto->categoria->nombre}}</td>
                <td>{{$producto->marca->nombre}}</td>
                <td> <a href="{{ route('productos.destroy', $producto->id) }}" >Borrar</a></td>
            </tr>

            @empty
            <option value="">Sin proveedores</option>
            @endforelse
          </tbody>
      </table>
</div>
@endsection
