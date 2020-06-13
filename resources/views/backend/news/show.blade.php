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

    <title>Mostrar Notícia</title>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" align="center">
                <h1>Detalhes de <strong>{{$result->title}}</strong></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">


                <p class="p-show"><strong>Título:</strong> {{$result->title}}</p>
                <p class="p-show"><strong>Corpo:</strong> {{$result->body}}</p>
                <p class="p-show"><strong>Autor:</strong> {{$result->author}}</p>
                <p class="p-show"><strong>Fonte:</strong> {{$result->source}}</p>
                <p class="p-show"><strong>Categoria:</strong> {{$result->nameCategory}}</p>
                <p class="p-show"><strong>Atualizada em:</strong> {{$result->updated_at}}</p>
                <p class="p-show"><strong>Criada em:</strong> {{$result->created_at}}</p>
            </div>
            <div class="col-md-6">
                <img class="img-show" src="{{ asset($result->image) }}" />
            </div>
        </div>
    </div>

</body>
</html>


