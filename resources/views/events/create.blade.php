<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
</head>

<body>

<h1>Crear un evento</h1>

<form method="POST" action="{{route('events.store')}}">
    @csrf
    <div class="form-row">
        <label>Nombre</label>
        <input class="form-control" type="text" name="nombre">
    </div>
    <div class="form-row">
        <label>Descripcion</label>
        <input class="form-control" type="text" name="descripcion">

    </div>
    <div class="form-row">
        <label>Fecha inicio</label>
        <input class="form-control" type="datetime-local" name="fecha_inicio">

    </div>
    <div class="form-row">
        <label>Fecha final</label>
        <input class="form-control" type="datetime-local" name="fecha_final">

    </div>

    <div class="form-row">
        <button type="submit" class="btn btn-primary btn-lg">Guardar</button>

    </div>
</form>


</body>
</html>