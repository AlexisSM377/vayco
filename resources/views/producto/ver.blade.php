@extends('layouts.app')

@section('content')
<div class="container">
    <a role="button" href="{{ route('home') }}" class="btn btn-primary">
        Regresar
    </a>
    <div class="card mb-3 mt-5">


        <div class="card-body">
            <div class="container">
                <div class="row">
                  <div class="col-8">
                    <h5 class="card-title fw-bold">Detalle de Producto</h5>
                    <p class="fw-bold">Nombre: <span class="fw-normal">{{$producto->nombre}}</span> </p>
                    <p class="fw-bold">Descripcion: <span class="fw-normal">{{$producto->descripcion}}</span> </p>
                    <p class="fw-bold">Precio:  <span class="fw-normal">{{$producto->precio}}</span> </p>
                    <p class="fw-bold">IVA:  <span class="fw-normal">{{$producto->iva}}</span> </p>
                    <p class="fw-bold">Precio Neto:  <span class="fw-normal">{{$producto->precio_neto}}</span> </p>
                    <p class="fw-bold">Existencia:  <span class="fw-normal">{{$producto->existencia}}</span> </p>
                    <p class="fw-bold">Proveedor:  <span class="fw-normal">{{$producto->proveedor->razon_social}}</span> </p>
                    <p class="fw-bold">Categoria:  <span class="fw-normal">{{$producto->categoria->nombre}}</span> </p>
                    <p class="fw-bold">Marca:  <span class="fw-normal">{{$producto->marca->nombre}}</span> </p>
                  </div>
                  <div class="col-4"><img src="{{ asset("images/$producto->url_imagen") }}"  width="400" alt="..."></div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
