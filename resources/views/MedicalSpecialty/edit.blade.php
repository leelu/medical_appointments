@extends('layouts.layout')
@section('content')
<nav class="navbar navbar-light">
	<a class="navbar-brand text-muted">Agregar especialidad</a>
<form method="POST" action="{{ route('MedicalSpecialty.update',$medical_specialty->id) }}" autocomplete="off" role="form">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PATCH">
    <input type="reset" class="btn btn-outline-secondary" value="Reiniciar">
    <a href="{{ route('MedicalSpecialty.index')}}" class="btn btn-outline-secondary">Volver</a>
</nav>

    <div class="form-group">
        <label for="name">Especialidad</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $medical_specialty->name }}">
    </div>
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{$medical_specialty->description}}</textarea>
    </div>
    <div class="nav justify-content-end">
        <input type="submit" class="btn btn-outline-success" value="Registrar">
    </div>
</form>

@endsection