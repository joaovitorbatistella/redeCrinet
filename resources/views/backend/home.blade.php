<!DOCTYPE html>
<html lang="pt-BR">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/homeBackStyle.css')?>">
        <title>Backend - Crinet</title>
    <title>Backend</title>
</head>
<body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12 nav-bar">
            <h1 style="text-align: center">Gerenciador de conteúdo <strong>Rede Crinet</strong></h1>
        </div>
    </div>
        <div class="row">
            <div class="col-md-9 news-config">
            <h1 style="text-align: center">Notícias</h1>
            <a class="btn add-news-btn" href="/backend/news/create">Adicionar notícia</a>
            <table class="table table-striped table-dark">
        <thead>
            <tr>
            <th>#</th>
                <th scope="col">Título</th>
                <th scope="col">Corpo da Notícia</th>
                <th scope="col">Autor</th>
                <th scope="col">Fonte</th>
                <th scope="col">Imagem</th>
                <th scope="col">Categoria</th>
                <th scope="col">Atualizada em</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($news as $res)
            <tr>
                <td><a href="/news/show/{{$res->uuid}}">{{$res->uuid}}</a></td>
                <td>{{$res->title}}</td>
                <td><p class="body-news">{{$res->body}}</p></td>
                <td>{{$res->author}}</td>
                <td>{{$res->source}}</td>
                <td><img width="110px" src="{{ asset($res->image) }}" /></td>
                <td>{{$res->nameCategory}}</td>
                <td>{{ date('d/m/Y', strtotime($res->updated_at)) }} às {{ date('H:i', strtotime($res->updated_at)) }}</td>
                <td><a class="btn edit-news-btn" href="/news/edit/{{$res->uuid}}">Editar</a></td>
                <td><a class="btn delete-news-btn" href="/news/delete/{{$res->uuid}}">Excluir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>
            <div class="col-md-3 col-img-logo">
                <img width="90%" src="{{asset('images/logo.png')}}" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 events-config">
            <h1 style="text-align: center">Eventos</h1>
                <a class="btn add-news-btn" href="/backend/events/create">Adicionar eventos</a>

            <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th scope="col">Título</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($events as $evt)
            <tr>
                <td><a href="/news/show/{{$evt->uuid}}">{{$evt->uuid}}</a></td>
                <td>{{$evt->description}}</td>
                <td>{{$evt->scheduledto}}</td>
                <td>{{ date('d/m/Y', strtotime($evt->updated_at)) }} às {{ date('H:i', strtotime($evt->updated_at)) }}</td>
                <td><a class="btn edit-news-btn" href="/news/edit/{{$evt->uuid}}">Editar</a></td>
                <td><a class="btn delete-news-btn" href="/news/delete/{{$evt->uuid}}">Excluir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>
            <div class="col-md-6 categories-config">
                <h1 style="text-align: center">Categorias</h1>
                <a class="btn add-news-btn" href="/backend/news/create">Adicionar categoria</a>

            <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th scope="col">Nome</th>
                <th scope="col">Tipo</th>
                <th scope="col">Atualizada em</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($categories as $cat)
            <tr>
                <td><a href="/news/show/{{$cat->uuid}}">{{$cat->uuid}}</a></td>
                <td>{{$cat->nameCategory}}</td>
                <td>{{$cat->type}}</td>
                <td>{{ date('d/m/Y', strtotime($cat->updated_at)) }} às {{ date('H:i', strtotime($cat->updated_at)) }}</td>
                <td><a class="btn edit-news-btn" href="/news/edit/{{$cat->uuid}}">Editar</a></td>
                <td><a class="btn delete-news-btn" href="/news/delete/{{$cat->uuid}}">Excluir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>
    </div>


    <footer>
            <div class="footer-div">
                <p><strong>Designed and Built by:</strong> João Vítor Batistella</p>
                <a target="_blank" href="https://github.com/joaovitorbatistella"><img src="{{asset('images/github_white.png')}}" /><a>
                <a target="_blank" href="https://linkedin.com/in/joão-vítor-batistella-0aa300175"><img src="{{asset('images/linkedin.png')}}" /><a>
                <a target="_blank" href="https://facebook.com/joaovitorbatistella.batistellajoviba"><img src="{{asset('images/facebook.png')}}" /><a>
            </div>
            <div class="footer-div">
                <p><strong>Contribution from :</strong> Guilherme Barboza</p>
                <a class="a-sec" target="_blank" href="https://github.com/"><img src="{{asset('images/github_white.png')}}" /><a>
                <a class="a-sec" target="_blank" href="https://linkedin.com/"><img src="{{asset('images/linkedin.png')}}" /><a>
                <a class="a-sec" target="_blank" href="https://facebook.com/"><img src="{{asset('images/facebook.png')}}" /><a>
            </div>
        </footer>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
