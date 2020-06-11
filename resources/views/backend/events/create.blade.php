<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/homeBackStyle.css')?>">
    <link   rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous"
    />
    <title>Criar Evento</title>

</head>
<body>
    <form class="form-horizontal form-style" method="POST" action="/register/events" enctype="multipart/form-data">
    @csrf
    {{csrf_field() }}
        <div class="col-md-12 st-con-title">
            <h2 class="form-title">Criar Evento</h2>
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


