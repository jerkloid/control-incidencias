<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('Incidencias.Parcial.parcial')



    <title>Revision</title>
</head>

<body>
    <main class="content">
        <div class="container border p-4 mt-4">
            <h1>respuesta de la solicitud</h1>


                <div class="mb-3">
                    <div class="container border mt-3">
                        <h1>Titulo original de la solicitud: </h1>
                        <h2>{{ $incidences->title }}</h2>
                    </div>
                </div>

                <label for="sol">imagen de la respuesta</label>
                <div id='sol' class="zoom img-fluid"><a target="_blank" href="{{ url($solutions->imgUrl) }}"><img
                            src="{{ asset($solutions->imgUrl) }}" alt="" width="400" height="400"></a>
                </div>
                <label for="sol">imagen de la solicitud</label>
                <div id='sol' class="zoom img-fluid"><a target="_blank" href="{{ url($incidences->imgUrl) }}"><img
                            src="{{ asset($incidences->imgUrl) }}" alt="" width="400" height="400"></a>
                </div>


                <label for="categoria" class="form-label">Categoria: </label>
                <h4 id="categoria">{{ $incidences->category }}</h4>


                <br>
                <label for="tipo" class="form-label">Tipo solicitud:</label>
                <h4 id="tipo">{{ $incidences->type }}</h4>

                <br>
                <label for="prioridad" class="form-label">Prioridad:</label>
                <h4 id="prioridad">{{ $incidences->priority }}</h4>




                <br>
                <label for="content" class="form-label">Detalle</label>
                <div class=""id="content">
                    <textarea name="content" id="editor2">{{ $solutions->content }}</textarea>
                </div>

                <br>
                <div class="input-group mt-3 float-right">
                    <a href="{{ route('listado') }}" class="btn btn-primary btn-lg ">volver</a>
                </div>


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
    <script>
        ClassicEditor
            .create(document.querySelector('#editor2'), {
                // ...
            })
            .then(editor => {
                const toolbarElement = editor.ui.view.toolbar.element;

                editor.enableReadOnlyMode('feature-id');
            })
            .catch(error => {
                console.log(error);
            });
    </script>
    <style>
        .zoom {


            transition: transform .2s;
            /* Animation */
            width: 400px;
            height: 400px;
            margin: 0 auto;
        }

        .zoom:hover {
            transform: scale(1.5);
            /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    </style>

</body>

</html>
