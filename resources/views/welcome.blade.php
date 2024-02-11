<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
  
    <form method="POST" action="/cadastrar_candidato">
        @csrf
    
        <label for="">Nome</label>
        <input type="text" name="nome_candidato" placeholder="digite seu nome">
        <br><br>
        <label for="">telefone</label>
        <input type="text" name="telefone_candidato" placeholder="digite seu telefone">
        <br><br>
        <button type="submit">Enviar</button>
    </form>

</body>

</html>