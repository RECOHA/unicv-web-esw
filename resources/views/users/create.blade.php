<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> <title>Cadastrar um novo Usuário</title>
</head>
<body>
	<form action="{{route('registrar_usuario')}}" method="POST">
		@csrf
		<label for="">Nome</label> <br/>
		<input type="text" name="nome"> <br/>
		<label for="">Custo</label> <br/>
		<input type="text" name="email"> <br/>
		<label for="">Preco</label> <br/>
		<input type="text" name="idade"> <br/>
		<label for="">Quantidade</label> <br/>
		<input type="text" name="telefone"> <br/>
		<button>Salvar</button>
	</form>
</body>
</html>