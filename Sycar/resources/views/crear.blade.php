<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <div class="container">
        <h1>Crear Nuevo Cliente</h1>
        <form action="/Guardar" method="POST">
            @csrf
            
            <div>
                <label>Nombre:</label>
                <input type="text" name="Nombre" required>
            </div>

            <div>
                <label>Apellido:</label>
                <input type="text" name="Apellido" required>
            </div>

            <div>
                <label>Edad:</label>
                <input type="number" name="Edad" required>
            </div>

            <div>
                <label>Género:</label>
                <select name="Genero" required>
                    <option disabled selected>Seleccione...</option>
                    <option value="male">Masculino</option>
                    <option value="female">Femenino</option>
                </select>
            </div>

            <div>
                <label>Email:</label>
                <input type="email" name="Email" required>
            </div>

            <div>
                <label>País:</label>
                <input type="text" name="Pais" required>
            </div>

            <div>
                <label>Ciudad:</label>
                <input type="text" name="Ciudad" required>
            </div>

            <div>
                <label>URL Foto:</label>
                <input type="text" name="Foto">
            </div>

            <button type="submit">Crear Cliente</button>
            <a href="/">Cancelar</a>
        </form>
    </div>
</body>
</html>