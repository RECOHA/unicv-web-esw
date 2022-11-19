<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge"> <title>Cadastrar um novo usuario</title>
	</head>
	<body>
		<form action="{{route('alterar_usuario', ['id' => $produto->id])}}" method="POST">
			@csrf
			<label for="">Nome</label> <br />
			<input type="text" name="nome" value="{{ $usuario->nome }}"> <br /> 
			<label for="">Email</label> <br />
			<input type="text" name="email" value="{{ $usuario->email }}"> <br />
			<label for="">Idade</label> <br />
			<input type="text" name="idade" value="{{ $usuario->idade }}"> <br />
			<label for="">Telefone</label> <br />
			<input type="text" name="telefone" value="{{ $usuario->telefone }}"> <br />
			<button>Salvar</button>
		</form>
	</body>
</html>