<!DOCTYPE html>
<html>
<head>
	  <title>Animales</title>

</head>
<body>
   

	<table>
		<thead>
			<tr style="background: #F5B7B1">
			  <td>id</td>
			  <td>Nombre</td>
			  <td>Pais</td>
			  <td>Tipo Animal</td> 
			</tr>
		</thead>
		 @foreach($animal->get() as $key)
		<tbody>

			<tr style="background: #58ACFA">
				<td>{{$key->id}}</td>
				<td>{{$key->nombre_animal}}</td>
				<td>{{$key->pais_origen}}</td>
				<td>{{$key->tipo_animal->nombre}}</td>
			</tr>
		</tbody>
		@endforeach()
	</table>

</body>
</html>