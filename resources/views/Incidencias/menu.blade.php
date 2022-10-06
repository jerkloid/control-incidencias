<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('Incidencias.Parcial.parcial')

    <title>Menu</title>
</head>

<body>
    <main class="form-container">
        <div class="container border mt-3">
            <div class="btn-group m-3 position-relative start-50 translate-middle" role="group" aria-label="Basic mixed styles example">
                <a href="{{ route('redNueva') }}" class="btn btn-danger">Nueva</a>
                <a href="{{ route('listado') }}" class="btn btn-warning">listado de solicitudes</a>
                <button type="button" class="btn btn-success">Right</button>
            </div>
        </div>


    </main>



</body>

</html>
