<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend</title>
</head>
<body>
    <h1>Olá</h1>
    <a href="/backend/news/create">Criar</a>
    <br>
    <table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Título</th>
      <th>Corpo da Notícia</th>
      <th>Autor</th>
      <th>Fonte</th>
      <th>Imagem</th>
      <th>Categoria</th>
      <th>Atualizada em:</th>
      <th>Editar</th>
      <th>Deletar</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($result as $res)

    <tr>
      <td><a href="/news/show/{{$res->uuid}}">{{$res->uuid}}</a></td>
      <td>{{$res->title}}</td>
      <td>{{$res->body}}</td>
      <td>{{$res->author}}</td>
      <td>{{$res->source}}</td>
      <td><img width="220px" src="{{ asset($res->image) }}" /></td>
      <td>{{$res->nameCategory}}</td>
      <td>{{ date('d/m/Y', strtotime($res->updated_at)) }} às {{ date('H:i', strtotime($res->updated_at)) }}</td>
      <td><a class="btn" href="/news/edit/{{$res->uuid}}">Editar</a></td>
      <td><a class="btn" href="/news/delete/{{$res->uuid}}">Excluir</a></td>
    </tr>
  @endforeach


  </tbody>
</table>
</body>
</html>
