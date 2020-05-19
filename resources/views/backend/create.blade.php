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
    <form class="form-horizontal" method="POST" action="/register/news" enctype="multipart/form-data">
    {{csrf_field() }}
        <div class="col-md-12 st-con-title">
            <h2>Adicionar notícia</h2>
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
        <input type="file" name="image" class="inputfile" />
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
        <div id="hidenDiv" style="display:none">
            <label class="col-md-12">Nome da nova categoria: </label>
            <div class="st-con-input">
            <input type="text" maxlength="15" name="nameCategory" class="st-input form-control">
            </div>
        </div>


    <div class="bottuns" align="center">
        <button id="Cadastrar" class="btn btn-success" onclick="send()" type="Submit">Adicionar</button>
        <button id="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
    </div>
    </form>
</body>
</html>


