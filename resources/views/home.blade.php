@extends('layouts.layout')
@section('content')

    <div class="d-flex flex-wrap justify-content-center">
        <div class="card mr-2 ml-2 mb-3 mt-3" style="width: 18rem;">
            <div class="card-body text-center">
                <h5 class="card-title">Doctores</h5>
                <i class="fas fa-user-md fa-5x text-secondary"></i>
                <hr>
                <a href="{{ route('Doctor.index') }}" class="card-link">Mostrar</a>
                <a href="{{ route('Doctor.create') }}" class="card-link">Agregar</a>
            </div>
        </div>
        <div class="card mr-2 ml-2 mb-3 mt-3" style="width: 18rem;">
            <div class="card-body text-center">
                <h5 class="card-title">Pacientes</h5>
                <i class="fas fa-diagnoses fa-5x text-secondary"></i>
                <hr>
                <a href="#" class="card-link">Mostrar</a>
                <a href="#" class="card-link">Agregar</a>
            </div>
        </div>
        <div class="card mr-2 ml-2 mb-3 mt-3" style="width: 18rem;">
            <div class="card-body text-center">
                <h5 class="card-title">Especialidad</h5>
                <i class="fab fa-accusoft fa-5x text-secondary"></i>
                <hr>
                <a href="{{ route('MedicalSpecialty.index') }}" class="card-link">Mostrar</a>
                <a href="{{ route('MedicalSpecialty.create') }}" class="card-link">Agregar</a>
            </div>
        </div>
        <div class="card mr-2 ml-2 mb-3 mt-3" style="width: 18rem;">
            <div class="card-body text-center">
                <h5 class="card-title">Especialistas</h5>
                <i class="fas fa-dna fa-5x text-secondary"></i>
                <hr>
                <a href="#" class="card-link">Mostrar</a>
                <a href="#" class="card-link">Agregar</a>
            </div>
        </div>
        <div class="card border-danger mr-2 ml-2 mb-3 mt-3" style="width: 18rem;">
            <div class="card-body text-center">
                <h5 class="card-title text-danger">Citas medicas</h5>
                <i class="fas fa-file-medical fa-5x text-danger"></i>
                <hr>
                <a href="#" class="card-link">Mostrar</a>
                <a href="#" class="card-link">Agregar</a>
            </div>
        </div>
    </div>


@endsection