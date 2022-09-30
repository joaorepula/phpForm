<?php

if($_POST) {

	$distancia = $_POST['distancia'];
	$autonomia = $_POST['autonomia'];

	$valorGasolina = 4.80;
	$valorAlcool = 3.80;
	$valorDiesel = 3.90;

	$mensagem = ""; 

	if (is_numeric($autonomia) && is_numeric($distancia)){
		if (($distancia > 0) && ($autonomia > 0)) {

			$consumoGasolina = ($distancia / $autonomia ) * $valorGasolina;
			$consumoGasolina = number_format($consumoGasolina,2,',','.');

			$consumoAlcool = ($distancia / $autonomia ) * $valorAlcool;
			$consumoAlcool = number_format($consumoAlcool,2,',','.');

			$consumoDiesel = ($distancia / $autonomia ) * $valorDiesel;
			$consumoDiesel = number_format($consumoDiesel,2,',','.');

			$mensagem.= "<div class='sucesso'>";
			$mensagem.= "O valor total gasto será de:";
			$mensagem.= "<ul>";
			$mensagem.= "<li><b>Gasolina:</b> R$ ".$consumoGasolina."</li>";
			$mensagem.= "<li><b>Álcool:</b> R$ ".$consumoAlcool."</li>";
			$mensagem.= "<li><b>Diesel</b>: R$ ".$consumoDiesel."</li>";
			$mensagem.= "</ul>";
			$mensagem.= "</div>";
		} else {
			$mensagem.= "<div class='erro'>";
			$mensagem.= "<b>O valor da distância e da autonomia deve ser maior que zero.</b>";
			$mensagem.= "</div>";
		}
	} else {
		$mensagem.= "<div class='erro'>";
		$mensagem.= "<b>O valor recebido não é numérico</b>";
		$mensagem.= "</div>";
	}
} else {
	$mensagem = "<div class='erro'>";
	$mensagem.= "<b>Nenhum dado foi recebido pelo formulário</b>";
	$mensagem.= "</div>";
}
    //IF($_POST) -> Estamos verificando se retornou algum valor no POST para executar nosso código -> Se não recebemos valores , por quê executar o código?
    //ELSE é uma mensagem de aviso que não recebemos nenhum dado
    // Precisamos evitar que venham valores em branco do formulário por isso na linha 15 validamos se os dois dados são verdadeiros com operador AND
    // echo -> Estamos exibindo o valor
    //($_Post['autonomia']); -> Estamos dizendo que recebemos um valor do formulário que é do tipo POST e  recebemos esse valor atráves do que definimos no formulário "autonomia";
    //Lembrando sempre que a identação na saida echo (onde é exibido o valor na tela), não é responsabilidade do echo ! 
    // Como arrumamos a formatação do documento ? Tags html de quebra de linha
    // O number format formata o numero e os valores de '' com . e , entre são como vão ser retornados os decimais parecido com flot o 2 é quantas casas vem junto
?>   <html><button onclick="history.back"></button></html>
