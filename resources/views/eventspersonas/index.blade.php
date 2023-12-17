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
<h1>Lista de EventosPersonas</h1>
<a class="btn btn-primary" href="{{ route('eventperson.create') }}">Create</a>
<a class="btn btn-primary" href="{{ route('evento.regresar') }}">Regresar</a>



@if(empty($eventsperson))
<div class="table-responsive">
    <!-- Código para manejar la tabla si no hay eventos -->
</div>
@else
<div class="table-responsive">
    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Nombre del evento</th>
                <th>Nombre de la persona</th>
                <th>Eliminar</th>

            </tr>
        </thead>
        <tbody>
            @foreach($eventsperson as $evenperson)
            <tr>
                <td>{{ $evenperson->id }}</td>
                <td>{{ $evenperson->nombre_evento }}</td>
                <td>{{ $evenperson->nombre_persona }}</td>



                <!-- Muestra el campo de eventpersonas -->
                <!-- ... otros campos de eventpersonas -->
                
                    
                    <td>
                        <form method="POST" action="{{ route('eventperson.delete', ['eventperson' => $evenperson->id]) }}">
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
</body></html>
