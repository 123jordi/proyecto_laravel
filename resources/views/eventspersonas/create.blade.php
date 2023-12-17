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


    <h1>Crear personas</h1>

    <form method="POST" action="{{route('eventperson.store', ['id'])}}">
        @csrf
        
        
        <div class="form-row">
            <label>Event_id</label>
            <input class="form-control" type="number" name="event_id">

        </div>
        <div class="form-row">
            <label>Persona_id</label>
            <input class="form-control" type="number" name="persona_id">

        </div>
        

        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>

        </div>
    </form>

</body>

</html>