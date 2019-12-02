@extends('layouts.layout')
@section('content')
<nav class="navbar navbar-light">
	<a class="navbar-brand text-muted">Especialidades</a>
	<a href="{{ route('MedicalSpecialty.create') }}" type="button" class="btn btn-outline-success">Agregar</a>
</nav>

	<div class="d-flex flex-wrap">
        @if($medical_specialties->count())  
			@foreach($medical_specialties as $medical_specialty)  
				<div class="card mr-2 ml-2 mb-3 mt-3" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">{{$medical_specialty->name}}</h5>
						<p class="text-muted">{{substr($medical_specialty->description, 0, 85)}}...</p>
						<div class="row">
							<div class="col">
								<a href="{{ action('MedicalSpecialtyController@edit', $medical_specialty->id) }}" class="btn btn-warning">Modificar</a>
							</div>
							<div class="col">
							<form action="{{ action('MedicalSpecialtyController@destroy', $medical_specialty->id) }}" method="post">
								{{csrf_field()}}
								<input name="_method" type="hidden" value="DELETE">
								<button class="btn btn-danger" type="submit">Borrar</button>
							</form>
							</div>
						</div>
						
						
					</div>
				</div>
            @endforeach 
        @else
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Sin registros</h5>
					<p class="card-text text-muted">No has registrado ninguna especialidad medica...</p>
				</div>
			</div>
		@endif
	</div>
@endsection