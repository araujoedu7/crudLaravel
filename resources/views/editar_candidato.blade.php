<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <form action="/atualizar_candidato/{{ $candidato->id }}" method="POST">
        @csrf
       
        <label for="">Nome</label>
        <input type="text" name="nome_candidato" placeholder="digite seu nome" value="{{ $candidato->nome}}">
        <br><br>
        <label for="">telefone</label>
        <input type="text" name="telefone_candidato" placeholder="digite seu telefone" value="{{ $candidato->telefone }}">
        <br><br>
        <button>Enviar</button>


    </form>
</body>

</html>