<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <title>lista solicitudes</title>
</head>

<body>
    <main class="content">
        <div class="container border p-4 mt-4">
            <h1>listado solicitud</h1>
            @include('Incidencias.Parcial.messages')
            <table class="table table-striped table-bordered dt-responsive nowrap" id="example">
                <thead>
                    <tr>
                        <th scope="col">creado</th>
                        <th scope="col text-truncate">Titulo</th>
                        <th scope="col">categoria</th>
                        <th scope="col">tipo</th>
                        <th scope="col">prioridad</th>
                        <th scope="col">estado</th>
                        <th scope="col">ir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($incidences as $incidence)
                        <tr>
                            <th scope="row">{{ $incidence->created_at->format('d-m-Y H:i:s')}}</th>
                            <td>{{ $incidence->title }}</td>
                            <td>{{ $incidence->category }}</td>
                            <td>{{ $incidence->type }}</td>
                            <td>{{ $incidence->priority }}</td>
                            <td>{{ $incidence->solution }}</td>
                            <td><a class="btn btn-primary" href="{{ route('incidences.show', ['incidence' => $incidence->id]) }}" >Revisar</a></td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <div class="container border p-4 mt-4">
            <h1>listado soluciones</h1>
            @include('Incidencias.Parcial.messages')
            <table class="table table-striped table-bordered dt-responsive nowrap" id="example2">
                <thead>
                    <tr>
                        <th scope="col">creado</th>
                        <th scope="col text-truncate">Numero</th>
                        <th scope="col">numero solicitud</th>
                        <th scope="col">status</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">ir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($solutions as $solution)
                        <tr>
                            <th scope="row">{{ $solution->created_at->format('d-m-Y H:i:s')}}</th>
                            <td>{{ $solution->id }}</td>
                            <td>{{ $solution->incidence_id }}</td>
                            <td>{{ $solution->status }}</td>
                            <td>{{ $solution->user_id }}</td>
                            <td><a class="btn btn-primary" href="#" >ver</a></td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </main>
    <script src="{{ url('assets/js/jquery-3.6.1.min.js') }}"></script>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/dataTables.bootstrap5.min.css') }}">
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/js/dataTables.bootstrap5.min.js') }}"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
<script>
    $(document).ready(function () {
    $('#example2').DataTable();
});
</script>

</body>

</html>
