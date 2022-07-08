@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card">
        <div class="card-header">
            <i class="bi bi-file-earmark-person-fill"></i> Crear alumno
        </div>
        <div class="card-body">
            {{ html()->modelForm($alumno, $alumno->exists ? 'put' : 'post', $alumno->exists ? route('alumnos.update', $alumno->id) : route('alumnos.store'))->attributes(['id' => 'formulario'])->open() }}
                @csrf
                <div class="mb-3">
                    <label for="primer_apellido" class="form-label">Primer apellido</label>
                    {{ html()->text('primer_apellido')->class('form-control form-control-sm') }}
                </div>
                <div class="mb-3">
                    <label for="segundo_apellido" class="form-label">Segundo apellido</label>
                    {{ html()->text('segundo_apellido')->class('form-control form-control-sm') }}
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    {{ html()->text('nombre')->class('form-control form-control-sm') }}
                </div>
                <div class="mb-3">
                    <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                    {{ html()->text('fecha_nacimiento')->class('form-control form-control-sm')->attributes(['type' => 'date']) }}
                </div>
                <div class="mb-3">
                    <label for="sexo0" class="form-label">Sexo</label>
                    <div>
                        <div class="form-check form-check-inline">
                            {!! html()->radio('sexo', 'femenino' == $alumno->sexo, 'femenino')->class('form-check-input')->attributes(['id' => 'sexo0']) !!}
                            <label class="form-check-label" for="sexo0">femenino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            {!! html()->radio('sexo', 'masculino' == $alumno->sexo, 'masculino')->class('form-check-input')->attributes(['id' => 'sexo1']) !!}
                            <label class="form-check-label" for="sexo1">masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            {!! html()->radio('sexo', 'prefiere no decirlo' == $alumno->sexo, 'prefiere no decirlo')->class('form-check-input')->attributes(['id' => 'sexo2']) !!}
                            <label class="form-check-label" for="sexo2">prefiere no decirlo</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="correo_electronico" class="form-label">Correo electrónico</label>
                    {{ html()->text('correo_electronico')->class('form-control form-control-sm')->attributes(['type' => 'email']) }}
                </div>
                <div class="mb-3">
                    <label for="numero_celular" class="form-label">Número de celular</label>
                    {{ html()->text('numero_celular')->class('form-control form-control-sm')->attributes(['type' => 'tel']) }}
                </div>
                <div class="mb-3">
                    <label for="comentarios" class="form-label">Comentarios</label>
                    {{ html()->textArea('comentarios')->class('form-control')->attributes(['rows' => 2]) }}
                  </div>
                <button type="submit" class="btn btn-primary">guardar</button>
            {{ html()->closeModelForm() }}
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.min.js')}}"></script>
{!! $validator !!}
@endsection