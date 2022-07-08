@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th style="width:25%;">Nombre</th>
            <th style="width:25%;">Correo</th>
            <th style="width:20%;">Fecha nacimiento</th>
            <th style="width:20%;">Sexo</th>
            <th style="width:10%;">
                <a href="{!! route('alumnos.create') !!}" class="btn btn-primary btn-sm">crear</a>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alumnos as $alumno)
        <tr>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->correo_electronico }}</td>
            <td>{{ $alumno->fecha_nacimiento }}</td>
            <td>{{ $alumno->sexo }}</td>
            <td>
                <a href="{!! route('alumnos.edit', $alumno->id) !!}" class="btn btn-secondary btn-sm">editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection