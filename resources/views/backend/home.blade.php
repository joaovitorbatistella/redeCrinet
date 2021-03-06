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
        <link   rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous"
    />

    <script>
        $(document).ready(function(){
        $(".btn-alert").toggle(
            function(){$(".alert").css({"display": "none"});},
        });
        });
    </script>

        <title>Backend - Crinet</title>
    <title>Backend</title>
</head>
<body>
@error('newsUuidShowNotFoundMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('newsCategoryListNotFoundMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('newsStoreValidadorMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('newsUuidEditNotFoundMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('newsUpdateValidadorMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('newsDeleteUuidNotFoundMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('imageNewsDeleteUuidNotFoundMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('newsDestroyFailedMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('newsStoreFailedMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('newsImageIncorrectMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror

@error('eventsStoreValidadorMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('eventsUuidEditNotFoundMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('eventsUpdateValidadorMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('eventsDeleteUuidNotFoundMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('eventsDestroyFailedMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('eventsStoreFailedMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror

@error('categoriesStoreValidadorMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('categoriesUuidEditNotFoundMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('categoriesUpdateValidadorMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('categoriesDeleteUuidNotFoundMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('categoriesDestroyFailedMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('categoriesStoreFailedMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror

@error('liveStoreValidadorMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@error('liveStoreFailedMessage')
    <div id="alert" style="display:block" class="alert alert-danger">
        <div class="row">
            <div class="col-md-10">
                <p>{{ $message }}</p>
            </div>
            <div class="col-md-2">
             <a class="btn" onclick="handleToastsBtn()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
@enderror
@if(session('success'))
<div id="alert" class="alert alert-success">
        <div class="row">
            <div class="col-md-12">
                <p>{{session('success')}}</p>
            </div>
        </div>
    </div>
@endif

    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12 nav-bar">
            <h1 style="text-align: center">Gerenciador de conteúdo <strong>Rede Crinet</strong></h1>
            <a href="{{ route('logout') }}" class="btn logout-btn" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                Sair
                <i class="fa fa-sign-out" aria-hidden="true"></i>
            </a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
        <div class="row row-news">
            <div class="col-md-9 news-config">
            <h1 style="text-align: center">Notícias</h1>
            <a class="btn add-news-btn" href="/backend/news/create">Adicionar notícia</a>
            <div class="row">
                <div class="col-md-12 table-news">
                <table class="table table-striped table-dark">
        <thead>
            <tr>
            <th>#</th>
                <th scope="col">Título</th>
                <th scope="col" class="th-body">Corpo da Notícia</th>
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
                <td><a class="btn btn-details" href="/backend/news/show/{{$res->uuid}}">Detalhes</a></td>
                <td>{{$res->title}}</td>
                <td class="td-body"><p class="body-news">{{$res->body}}</p></td>
                <td>{{$res->author}}</td>
                <td>{{$res->source}}</td>
                <td>empty</td>
                <td>{{$res->nameCategory}}</td>
                <td>{{ date('d/m/Y', strtotime($res->updated_at)) }} às {{ date('H:i', strtotime($res->updated_at)) }}</td>
                <td><a class="btn edit-news-btn" href="/backend/news/edit/{{$res->uuid}}">Editar</a></td>
                <td><a class="btn delete-news-btn" href="/backend/news/delete/{{$res->uuid}}">Excluir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
                </div>
            </div>
        </div>
            <div class="col-md-3 col-img-logo">
                <img width="100%" src="{{asset('images/white_logo.png')}}" />
            </div>
        </div>
        <div class="row row-event-categories">
            <div class="col-md-6 events-config">
            <h1 style="text-align: center">Eventos</h1>
                <a class="btn add-news-btn" href="/backend/events/create">Adicionar eventos</a>
                <div class="row">
                    <div class="col-md-12 table-event">
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
                <td><a disabled class="btn btn-details">Detealhes</a></td>
                <td>{{$evt->title}}</td>
                <td>{{$evt->description}}</td>
                <td>{{ date('d/m/Y', strtotime($evt->scheduledto)) }} às {{ date('H:i', strtotime($evt->scheduledto)) }}</td>
                <td><a class="btn edit-news-btn" href="/backend/events/edit/{{$evt->uuid}}">Editar</a></td>
                <td><a class="btn delete-news-btn" href="/backend/events/delete/{{$evt->uuid}}">Excluir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 categories-config">
                <h1 style="text-align: center">Categorias</h1>
                <a class="btn add-news-btn" href="/backend/categories/create">Adicionar categoria</a>
                <div class="row">
                    <div class="col-md-12 table-categories">
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
                <td><a disabled class="btn btn-details">Detalhes</a></td>
                <td>{{$cat->nameCategory}}</td>
                <td>{{$cat->type}}</td>
                <td>{{ date('d/m/Y', strtotime($cat->updated_at)) }} às {{ date('H:i', strtotime($cat->updated_at)) }}</td>
                <td><a class="btn edit-news-btn" href="/backend/categories/edit/{{$cat->uuid}}">Editar</a></td>
                <td><a class="btn delete-news-btn" href="/backend/categories/delete/{{$cat->uuid}}">Excluir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div align="center" class="row live-row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <h1 style="text-align: center">Ao-Vivo</h1>
            <div class="live-config">
            <form class="form-horizontal form-style" id="form" method="POST" action="/backend/live/register" enctype="multipart/form-data">
                @csrf
                {{csrf_field() }}
                <label class="col-md-12">Código de implementação: <h11>*</h11></label>
                <div class="st-con-input">
                    <input type="text" required="required" name="implementationCode" style="color: #f4ede8" class="st-input live-input form-control">
                </div>

                <div class="bottuns" align="center">
                <button class="btn btn-success" onclick="load()" type="Submit">Atualizar</button>
                <button class="btn btn-danger" type="Reset">Cancelar</button>
                </div>
            </form>
            </div>
        </div>
        <div class="col-md-1">
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
<script>
    $("#alert").fadeOut(8000);
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>
