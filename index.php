<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">   
	<title>Calculo de Consumo de Combustível</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>	
	<main>
		<div class="painel">
			<h2>Instruções</h2>
			<div class="conteudo-painel">
				<p>Esta aplicação tem como finalidade demonstrar os valores que
					serão gastos com combustível durante uma viagem, com base no
				consumo do seu veículo, e com a distância determinada por você!</p>
				<p>Os combustíveis disponíveis para este cálculo são:</p>
				<ul>
					<li><b>Álcool</b></li>
					<li><b>Díesel</b></li>
					<li><b>Gasolina</b></li>
				</ul>
			</div>
		</div>
		
		<div class="painel">
			<h2>Cálculo do valor (R$) do consumo</h2>
			<div class="conteudo-painel">
				<form action="calculo.php" method="POST">
					<label for="distancia">Distância em Quilômetros a ser percorrida</label>
					<input type="number" class="campoTexto"  name="distancia" required/>

					<label for="autonomia">Consumo de combustível do veículo (Km/l)</label>
					<input type="number" class="campoTexto" name="autonomia" required/>

					<button class="botao" type="submit">Calcular</button>
				</form>				
			</div>
		</div>			
	</main>	
</body>
</html>
// action -> Para onde vamos enviar nossos dados? calculo.php;
// method - > Method que isso vai ser enviado para o back-end;
// name - > Nome onde vamos pegar esses dados no back-end (referência);
// input type -> Tipo do dado -> Ex:Texto,Números,Datas e etc;
// number -> Define que vamos receber valores numérico no nosso formulário 
//Validação tanto no back-end quanto no front (: -> como ? adicionando required (Linha 16 e 18) e type= "number"