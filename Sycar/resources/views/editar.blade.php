<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    
    <form action="/Actualizar/{{ $cliente->id }}" method="POST">   
        @csrf
        @method('PUT')     
        <h1>Editar Cliente</h1>
        <div style = "display: flex; gap: 10px; align-items: center;">
            <label>Nombre:</label>
            <input type="text" name="Nombre" value="{{ $cliente->Nombre }}" required>
        </div>

        <div style = "display: flex; gap: 10px; align-items: center;">
            <label>Apellido:</label>
            <input type="text" name="Apellido" value="{{ $cliente->Apellido }}" required>
        </div>

        <div style = "display: flex; gap: 10px; align-items: center;">
            <label>Edad:</label>
            <input type="number" name="Edad" value="{{ $cliente->Edad }}" required>
        </div>

        <div style = "display: flex; gap: 10px; align-items: center;">
            <label>Género:</label>
            <select name="Genero" required>
                <option value="male" {{ $cliente->Genero == 'male' ? 'selected' : '' }}>Masculino</option>
                <option value="female" {{ $cliente->Genero == 'female' ? 'selected' : '' }}>Femenino</option>
            </select>
        </div>

        <div style = "display: flex; gap: 10px; align-items: center;">
            <label>Email:</label>
            <input type="email" name="Email" value="{{ $cliente->Email }}" required>
        </div>

        <div style = "display: flex; gap: 10px; align-items: center;">
            <label>País:</label>
            <input type="text" name="Pais" value="{{ $cliente->Pais }}" required>
        </div>

        <div style = "display: flex; gap: 10px; align-items: center;">
            <label>Ciudad:</label>
            <input type="text" name="Ciudad" value="{{ $cliente->Ciudad }}" required>
        </div>

        <div style = "display: flex; gap: 10px; align-items: center;">
            <label>URL Foto:</label>
            <input type="text" name="Foto" value="{{ $cliente->Foto }}">
        </div>

        <button type="submit">Guardar Cambios</button>
        <a href="/">Cancelar</a>
    </form>
</body>
</html>