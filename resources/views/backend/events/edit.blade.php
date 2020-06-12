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

    <!-- Styles -->

    <title>Editar Eventos</title>

</head>
<body>
    <form class="form-horizontal form-style" method="POST" action="/backend/events/update/{{$events->uuid}}" enctype="multipart/form-data">
    @csrf
    {{ method_field('PUT') }}
    {{csrf_field() }}
        <div class="col-md-12 st-con-title">
            <h1 class="form-title">Editar evento</h1>
        </div>
    <label class="col-md-12">Título: <h11>*</h11></label>
        <div class="st-con-input">
        <input value="{{$events->title}}" type="text" required="required" name="title" class="st-input form-control">
    </div>
    <label class="col-md-12">Descrição: <h11>*</h11></label>
        <div class="st-con-input">
        <input value="{{$events->description}}" type="text" required="required" name="description" class="st-input form-control">
    </div>
    <label class="col-md-12">Data: <h11>*</h11></label>
    <label class="col-md-12"><p style="font-size:15px">{{$events->scheduledto}}</p></label>
    <div class="st-con-input">
        <input type="datetime-local" required="required" name="scheduledto" class="st-input form-control">
    </div>


    <div class="bottuns" align="center">
        <button class="btn btn-success" onclick="send()" type="Submit">Atualizar</button>
        <button class="btn btn-danger" type="Reset">Cancelar</button>
    </div>
    </form>
</body>
</html>


