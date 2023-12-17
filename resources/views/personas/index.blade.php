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
    <h1>Lista de Personas</h1>

    <a class="btn btn-primary" href="{{ route('personas.create') }}">Create</a>
    <a class="btn btn-primary" href="{{ route('evento.regresar') }}">Regresar</a>
    @if(empty($personas))
        <div class="table-responsive">
            <!-- Código para manejar la tabla si no hay eventos -->
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>Id</th>

                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Ver</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($personas as $persona)
                        <tr>
                            <td>{{ $persona->id }}</td>
                            <td>{{ $persona->apellidopaterno }}</td>
                            <td>{{ $persona->apellidomaterno }}</td>
                            <td>{{ $persona->nombre}}</td>
                            <td>{{ $persona->email}}</td>
                            <td>{{ $persona->telefono}}</td>

                            <td>
                                <a href="{{ route('personas.show', ['personas' => $persona->id]) }}" class="btn btn-link">
                                    <i class="bi bi-eye text-black"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('personas.edit', ['personas' => $persona->id]) }}" class="btn btn-primary">
                                    <i class="bi bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('personas.delete', ['personas' => $persona->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endempty
    </body>

</html>
