
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

<h1>Editar un evento</h1>

<form method="POST" action="{{route('personas.update', ['personas' => $personas->id])}}">
    @csrf
    @method('PUT')
    <div class="form-row">
        <label>Apellido paterno</label>
        <input class="form-control" type="text" name="apellidopaterno" value="{{$personas->apellidopaterno}}" required>
    </div>
    <div class="form-row">
        <label>Apellido materno</label>
        <input class="form-control" type="text" name="apellidomaterno" value="{{$personas->apellidomaterno}}" required>

    </div>
    <div class="form-row">
        <label>Nombre</label>
        <input class="form-control" type="text" name="nombre" value="{{$personas->nombre}}"  required>

    </div>
    <div class="form-row">
        <label>Email</label>
        <input class="form-control" type="email" name="email" value="{{$personas->email}}" required>

    </div>
    <div class="form-row">
    <label>Teléfono</label>
    <input class="form-control" type="text" name="telefono" value="{{$personas->telefono}}" required>
</div>



    <div class="form-row">
        <button type="submit" class="btn btn-primary btn-lg">Actualizar</button>

    </div>
</form>
</body>

</html>