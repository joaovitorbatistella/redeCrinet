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

    <title>Adicionar Notícias</title>
    <script>

        function myFunction() {
            var x = document.getElementById("hidenDiv");
            var y = document.getElementById("categories");
            if (x.style.display === "none") {
                x.style.display = "block";
                document.getElementById("categories").required = false;

            } else {
                x.style.display = "none";
                document.getElementById("categories").required = true;
            }
        }


    </script>
</head>
<body>
    <form class="form-horizontal form-style" method="POST" action="/register/news" enctype="multipart/form-data">
    @csrf
    {{csrf_field() }}
        <div class="col-md-12 st-con-title">
            <h2 class="form-title">Adicionar notícia</h2>
        </div>
    <label class="col-md-12">Título: <h11>*</h11></label>
        <div class="st-con-input">
        <input type="text" required="required" name="title" class="st-input form-control">
    </div>
    <label class="col-md-12">Corpo: <h11>*</h11></label>
        <div class="st-con-input">
        <textarea id="txtArea" rows="5" type="text" required="required" name="body" class="st-input form-control"></textarea>
    </div>
    <label class="col-md-12">Autor: <h11>*</h11></label>
    <div class="st-con-input">
        <input type="text" required="required" name="author" class="st-input form-control">
    </div>
    <label class="col-md-12">Fonte: <h11>*</h11></label>
    <div class="st-con-input">
        <input type="text" required="required" name="source" class="st-input form-control">
    </div>
    <div class="row">
        <div class="col-md-6">
    <label class="col-md-12">Imagem: </label>
        <div class="st-con-input">
        <input type="file" name="images[]" class="inputfile" />
        </div>
        </div>
        <div class="col-md-4">
    <label class="col-md-12">Categoria: <h11>*</h11></label>

                <div class="st-con-input">
                    <div class="st-select">
                <select required id="categories" name="category_id" class="st-input form-control">
                    <option value="">Escolha a categoria</option>
                    @foreach($categories as $c)
                        <option value="{{$c->uuid}}" >{{$c->nameCategory}}</option>
                    @endforeach
                </select>
                    </div>
                </div>
            </div>
            <div align="center" class="col-md-2" style="margin-top: 5%">
                <button type="button" class="st-button" onclick="myFunction()"><i class="addIcon fas fa-plus-circle fa-3x"></i></button>
            </div>
        </div>

        <div class="row" id="hidenDiv" style="display:none">
            <div class="col-md-6">
                <label class="col-md-12">Nome da nova categoria: </label>
                <div class="st-con-input">
                    <input type="text" maxlength="15" name="nameCategory" class="st-input form-control">
                </div>
            </div>
            <div align="center" class="col-md-2" style="margin-top: 5%">
                <label class="col-md-12">Habilitar tipagem:</label>
                <input type="checkbox"/>
            </div>
            <div class="col-md-4">
                <label class="col-md-12">Tipo:</label>
                <div class="st-con-input">
                    <input type="text" maxlength="15" name="type" class="st-input form-control">
                </div>
            </div>

        </div>


    <div class="bottuns" align="center">
        <button id="Cadastrar" class="btn btn-success" onclick="send()" type="Submit">Adicionar</button>
        <button id="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
    </div>
    </form>
</body>
</html>


