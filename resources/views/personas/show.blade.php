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

    
        <h1>{{$personas->apellidopaterno }} ({{$personas->id}})</h1>
        <p>{{$personas->apellidomaterno}}</p>
        <p>{{$personas->nombre }}</p>
        <p>{{$personas->email}}</p>
        <p>{{$personas->telefono}}</p>
</body>
</html>