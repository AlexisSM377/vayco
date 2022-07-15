@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('home') }}">Regresar</a>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registar Producto</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('productos.store') }}" enctype="multipart/form-data" >
                        @csrf

                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required>

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="imagen" class="col-md-4 col-form-label text-md-end">Imagen</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control @error('imagen') is-invalid @enderror" id="imagen" name="imagen" required>
                                @error('imagen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                          </div>

                        <div class="row mb-3">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">Descripcion</label>

                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required>

                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="precio" class="col-md-4 col-form-label text-md-end">Precio</label>

                            <div class="col-md-6">
                                <input id="precio" type="number" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{ old('precio') }}" required>

                                @error('precio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="iva" class="col-md-4 col-form-label text-md-end">IVA</label>

                            <div class="col-md-6">
                                <input id="iva" type="number" class="form-control" name="iva" value="{{ old('iva') }}" required >
                                @error('iva')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="neto" class="col-md-4 col-form-label text-md-end">Precio Neto</label>

                            <div class="col-md-6">
                                <input id="neto" type="number" class="form-control" name="neto" value="{{ old('neto') }}" required>
                                @error('neto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="existencia" class="col-md-4 col-form-label text-md-end">Existencia</label>

                            <div class="col-md-6">
                                <input id="existencia" type="number" class="form-control" name="existencia" value="{{ old('existencia') }}" required>
                                @error('existencia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="proveedor" class="col-md-4 col-form-label text-md-end">Proveedor</label>

                            <div class="col-md-6">
                                <select class="form-select" name="proveedor" required>
                                    <option selected>Selecciona una Opcion</option>
                                    @forelse ($proveedores as $proveedor)
                                    <option value="{{$proveedor->id}}">{{$proveedor->razon_social}}</option>
                                    @empty
                                    <option value="">Sin proveedores</option>
                                    @endforelse
                                  </select>
                                    @error('proveedor')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>    <div class="row mb-3">
                            <label for="categoria" class="col-md-4 col-form-label text-md-end">Categoria</label>

                            <div class="col-md-6">
                                <select class="form-select" name="categoria" required>
                                    <option selected>Selecciona una Opcion</option>
                                    @forelse ($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                    @empty
                                    <option value="">Sin categorias</option>
                                    @endforelse
                                  </select>
                                    @error('categoria')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="marca" class="col-md-4 col-form-label text-md-end">Marca</label>

                            <div class="col-md-6">
                                <select class="form-select" name="marca" required>
                                    <option selected>Selecciona una Opcion</option>
                                    @forelse ($marcas as $marca)
                                    <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                                    @empty
                                    <option value="">Sin marcas</option>
                                    @endforelse
                                  </select>
                                    @error('marca')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">


                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
