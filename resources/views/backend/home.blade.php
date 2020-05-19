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
      <th>Atualizada em:</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($new as $new)

    <tr>
      <td><a href="/news/show/{{$new->uuid}}">{{$new->uuid}}</a></td>
      <td>{{$new->title}}</td>
      <td>{{$new->body}}</td>
      <td>{{$new->author}}</td>
      <td>{{$new->source}}</td>
      <td><img src="{{ asset($new->image) }}" /></td>
      <td>{{$new->updated_at}}</td>
    </tr>
  @endforeach


  </tbody>
</table>
</body>
</html>
