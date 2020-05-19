<h1>Formulário de Exclusão de Notícias</h1>

<form action="/delete/{{$news->uuid}}" method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <p style="font-size: 32px">Deseja mesmo excluir <strong>{{$news->title}}</strong> ?</p>
    <button class="btn btn-danger" type="submit">Deletar</button>
</form>
<br>
<br>
<br>
<a href="/backend">Início</a>
