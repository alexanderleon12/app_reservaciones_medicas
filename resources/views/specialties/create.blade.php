@extends('layouts.panel')

@section('content')
<div class="shadow card">
    <div class="border-0 card-header">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Nueva especialidad</h3>
        </div>
        <div class="text-right col">
            <a href="{{ url('specialties') }}" class="btn btn-sm btn-default">Cancelar y volver</a>
        </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ url('specialties') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nombre de la especialidad</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <input type="text" name="description" class="form-control">
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
        </form>
    </div>
    </div>
</div>
@endsection
