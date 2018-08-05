<!DOCTYPE html>



<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Formulários - Aula 02</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
</head>

<body>

	<div class="container w-50 mt-3">
		<div class="row">
			<div class="col">
				<form id="formulario" method="POST" action="javascritp:;" class="border rounded p-4">
					<div class="form-group text-center">
						<h2>Índice de Masssa Corporal</h2>
						<hr>
					</div>
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite aqui o seu nome..." required>
					</div>
					<div class="form-group">
						<label for="sexo">Sexo:</label>
						<select class="custom-select" id="sexo" name="sexo">
							<option value="M">Masculino</option>
							<option value="F">Feminino</option>
						</select>
					</div>
					<div class="form-group">
						<label for="altura">Altura:</label>
						<input type="text" class="form-control" id="altura" name="altura" placeholder="Prencha este campo com sua altura..." required>
					</div>
					<div class="form-group">
						<label for="peso">Peso:</label>
						<input type="text" class="form-control" id="peso" name="peso" placeholder="Prencha este campo com sua peso..." required>
					</div>
					<div class="form-group">
						<input type="submit" class="form-control mt-5 btn btn-info" id="botao" value="Clique aqui!">
					</div>
				</form>
			</div>
		</div>

		<div class="container w-100 mt-3 d-none" id="sessaoResposta">
			<div class="row">
				<div class="col border rounded w-100 p-4">
					<div class="w-100 text-center">
						<h4 class="mt-1">Índice de Masssa Corporal</h4>
						<hr>
					</div>
					<div class="w-100 text-center">
						<h5>Classificação</h5>
						<h1 id="classificacao"></h1>
					</div>
					<div class="w-100 text-center">
						<p id="mensagemResposta"></p>
                    </div>
                    <div>
                        <button class="btn btn-info mt-5 w-100" id="again">
                            Calcular Novamente
                        </button>
                    </div>


				</div>
			</div>
		</div>

		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
		<script src="acao.js"></script>
</body>

</html>