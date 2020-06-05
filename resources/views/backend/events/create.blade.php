<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link   rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous"
    />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleBack.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>Criar Evento</title>

</head>
<body>
    <form class="form-horizontal" method="POST" action="/register/events" enctype="multipart/form-data">
    @csrf
    {{csrf_field() }}
        <div class="col-md-12 st-con-title">
            <h2>Criar Evento</h2>
        </div>
    <label class="col-md-12">Título: <h11>*</h11></label>
        <div class="st-con-input">
        <input type="text" required="required" name="title" class="st-input form-control">
    </div>
    <label class="col-md-12">Corpo: <h11>*</h11></label>
        <div class="st-con-input">
        <input type="text" required="required" name="description" class="st-input form-control">
    </div>
    <label class="col-md-12">Data: <h11>*</h11></label>
    <div class="st-con-input">
        <input type="datetime-local" required="required" name="scheduledto" class="st-input form-control">
    </div>




    <div class="bottuns" align="center">
        <button id="Cadastrar" class="btn btn-success" onclick="send()" type="Submit">Adicionar</button>
        <button id="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
    </div>
    </form>
</body>
</html>


