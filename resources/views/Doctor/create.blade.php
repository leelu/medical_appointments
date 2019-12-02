@extends('layouts.layout')
@section('content')
<nav class="navbar navbar-light">
	<a class="navbar-brand text-muted">Agregar doctor</a>
<form method="POST" action="{{ route('Doctor.store') }}" autocomplete="off" role="form">
    {{ csrf_field() }}
    <input type="reset" class="btn btn-outline-secondary" value="Limpiar">
    <a href="{{ route('Doctor.index')}}" class="btn btn-outline-secondary">Volver</a>
</nav>
    <div class="form-group">
        <label for="identification_card">Cedula</label>
        <input type="number" class="form-control" id="identification_card" name="identification_card" placeholder="Cedula">
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="name">Nombres</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombres">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="last_name">Apellidos</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="birthdate">Fecha de nacimiento</label>
                <input class="form-control" type="date" value="2000-08-19" id="birthdate" name="birthdate">
            </div>
        </div>
        <div class="col">
            <label for="Sexo">Sexo</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender1" value="Masculino">
                <label class="form-check-label" for="gender1">Masculino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender2" value="Femenino">
                <label class="form-check-label" for="gender2">Femenino</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="direction">Dirección de residencia</label>
        <textarea class="form-control" id="direction" name="direction" placeholder="Dirección..." rows="3"></textarea>
    </div>
    <div class="nav justify-content-end">
        <input type="submit" class="btn btn-success" value="Registrar">
    </div>
</form>

@endsection