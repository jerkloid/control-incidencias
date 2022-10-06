<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('Incidencias.Parcial.parcial')



    <title>nueva</title>
</head>

<body>
    <main class="content">
        <div class="container border p-4 mt-4">
            <h1>Nueva solicitud</h1>



            <form method="POST" action="{{ route('incidences.store') }}" enctype="multipart/form-data">
                @csrf
                @include('Incidencias.Parcial.messages')

                <div class="mb-3">
                    <input type="text" id="titulo" name="title" class="form-control"placeholder="Titulo de la solicitud">
                </div>

                <label for="categoria" class="form-label">Categoria:</label>
                <select class="js-example-basic-single" id="categoria" name="category">
                    <option value="Curso">Curso</option>
                    <option value="Asignaturas">Asignaturas</option>
                    <option value="Matriculas">Matriculas</option>
                    <option value="Registro de antecedentes">Registro de antecedentes</option>
                    <option value="Asistencia">Asistencia</option>
                    <option value="Control de asignatura">Control de asignatura</option>
                    <option value="Hoja de subvención">Hoja de subvención</option>
                    <option value="Hoja de vida">Hoja de vida</option>
                    <option value="Calificaciones">Calificaciones</option>
                    <option value="Reunión de apoderados">Reunión de apoderados</option>
                    <option value="Convicencia escolar">Convicencia escolar</option>
                    <option value="Inspectoría">Inspectoría</option>
                    <option value="Pie">Pie</option>
                    <option value="Evaluaciones">Evaluaciones</option>
                    <option value="UTP">UTP</option>
                    <option value="Leccionario">Leccionario</option>
                    <option value="Planificaciones">Planificaciones</option>


                </select>
                <br>
                <label for="tipo" class="form-label">Tipo solicitud:</label>
                <select class="js-example-basic-single " id="tipo" name="type">
                    <option value="Bug">Bug</option>

                    <option value="Opinión">Opinión</option>
                    <option value="Recomendación">Recomendación</option>
                </select>
                <br>
                <label for="prioridad" class="form-label">Prioridad:</label>
                <select class="js-example-basic-single" id="prioridad" name="priority">
                    <option value="Baja">Baja</option>
                    <option value="Media">Media</option>
                    <option value="Alta">Alta</option>
                    <option value="Urgente">Urgente</option>
                </select>


                <div class="mb-3">
                    <label for="formFile" class="form-label">Imagen de prueba Max: 2MB</label>
                    <input class="form-control" type="file" id="formFile" name="imgUrl" accept="image/*">
                </div>

                <div class="input-group">
                    <span class="input-group-text">Detalle de la solicitud</span>
                    <textarea name="content" id="editor">
                        &lt;p&gt;This is some sample content.&lt;/p&gt;
                    </textarea>
                </div>
                <div class="input-group mt-3 float-right">
                    <button type="submit" class="btn btn-primary btn-lg ">Enviar solicitud</button>
                </div>

            </form>


        </div>

    </main>

    <script src="{{ url('assets/js/jquery-3.6.1.min.js') }}"></script>



    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>



    <script type="text/javascript">
        $(document).ready(function() {
            $(".js-example-basic-single").select2();
            // theme: "bootstrap",
        });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>
