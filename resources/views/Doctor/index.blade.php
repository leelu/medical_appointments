@extends('layouts.layout')
@section('content')
<nav class="navbar navbar-light">
	<a class="navbar-brand text-muted">Doctores</a>
	<a href="{{ route('Doctor.create') }}" type="button" class="btn btn-outline-success">Agregar</a>
</nav>

<table class="table">
	<thead class="thead-dark">
		<tr>
			<th scope="col">Cedula</th> <!-- identification_card  -->
			<th scope="col">Nombres</th>
			<th scope="col">Apellidos</th>
			<th scope="col">Sexo</th>
			<th scope="col">Nacimiento</th>
			<th scope="col">Dirección</th>
			<th scope="col" colspan="2">Opciones</th>
		</tr>
	</thead>
	<tbody>
    @if($doctors->count())  
		@foreach($doctors as $doctor)
			<tr>
				<td>{{$doctor->identification_card}}</td>
				<td>{{$doctor->name}}</td>
				<td>{{$doctor->last_name}}</td>
				<td>{{$doctor->gender}}</td>
				<td>{{$doctor->birthdate}}</td>
				<td>{{substr($doctor->direction, 0, 50)}}...</td>
				<td><a class="btn btn-primary btn-xs" href="{{action('DoctorController@edit', $doctor->id)}}" >Modificar</a></td>
				<td>
					<form action="{{action('DoctorController@destroy', $doctor->id)}}" method="post">
                   {{csrf_field()}}
				   <input name="_method" type="hidden" value="DELETE">
				   <button class="btn btn-danger" type="submit">Borrar</button>
				</td>
			</tr>
        @endforeach 
    @else
		<tr>
			<td class="text-muted" colspan="5">No hay registros</td>
		</tr>
	@endif
	</tbody>
</table>
{{ $doctors->links() }}
@endsection