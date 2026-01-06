<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
<h1 style="text-align: center">Clientes</h1>

<div style="text-align: right; margin: 20px;">
    <a href="/Crear" class="BtnCrear">Crear Nuevo Cliente</a>
</div>

<table class="tablaCli">
    <thead>
        <tr style="background-color: #343a40; color: white;">
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Género</th>
            <th>Email</th>
            <th>País</th>
            <th>Ciudad</th>
            <th>Foto</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente['Nombre'] }}</td>
            <td>{{ $cliente['Apellido'] }}</td>
            <td>{{ $cliente['Edad'] }}</td>
            <td>{{ $cliente['Genero'] == 'male' ? 'Masculino' : 'Femenino' }}</td>
            <td>{{ $cliente['Email'] }}</td>
            <td>{{ $cliente['Pais'] }}</td>
            <td>{{ $cliente['Ciudad'] }}</td>
            <td><img src="{{ $cliente['Foto'] }}" alt="Picture"></td>
            <td>
                <a href="/Editar/{{ $cliente->id }}" class="BtnEdit">Editar</a>
                
                <form action="/Eliminar/{{ $cliente->id }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Estás seguro de eliminar este cliente?')" class="BtnEliminar">Eliminar</button>
                </form>
            </td>
        @endforeach
    </tbody>
</table>
</body>
</html>


