<?php

//Pegando os valores do formulário!
$nome = $_POST["nome"];
$email = $_POST["email"];
$crm = $_POST["crm"];
$resposta = $_POST["resposta"];
$data = date('Y-m-d H:i:s');
$quebra = chr(13).chr(10);

if(isset($_POST['acao']) && $_POST['acao'] == "enviar"){

	if(!empty($_POST['checkbox']))
	$campo = $_POST['checkbox'];
	foreach ($campo as $key => $value) {
		$ckb .= $value.'/';
	}
}


//Agora atribuímos tudo para uma variável só.
$documento = "$data | $nome | $email | $crm | $ckb | $resposta$quebra";

//Aqui você coloca o nome do arquivo que será gravado
$arquivo = "arquivos.txt";

//Abrimos o arquivo que será gravado.
$abrir = fopen($arquivo, "a");

//Gravamos no arquivo
$gravar = fwrite($abrir, $documento);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulário de contato</title>
	<link rel="stylesheet" href="css/bulma.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="shortcut icon" href="img/favicon.ico">

<body>

	 <center><img src="img/header.png" alt="Daichii-Sankyo" ></center>


<section class="section">
<div class="container">
		<div class="column is-hal">
		<video width="95%" height="95%" controls="controls" >
<source src="img/video1.mp4" type="video/mp4">
</div>

<div class="column is-hal">
		<video width="95%" height="95%" controls="controls" >
<source src="img/video2.mp4" type="video/mp4">
</div>
<div class="column is-hal">
		<video width="95%" height="95%" controls="controls" >
<source src="img/video3.mp4" type="video/mp4">
</div>
</div>
<div class="container">
				<div class="column is-half">
				<form method="POST">
						<h1 align=center>Que tipo de conteúdo deseja receber?</h1>
						<br>
    		<div class="field">
			<label class="label">
				<input name="checkbox[]" value="1" id="1" type="checkbox" class="Pergunta_01"> Vídeos curtos sobre temas relevantes de lurasidona</label><br><br>
			<label class="label">
				 <input name="checkbox[]" value="2" id="2" type="checkbox" class="Pergunta_01"> E-mail com atualizações mensais de artigos científicos</label><br><br>
			<label class="label">
				<input name="checkbox[]" value="3" id="3" type="checkbox" class="Pergunta_01"> Gostaria de tirar alguma duvida ou solicitar um material especifico?</label><br><br>
								<input name="resposta" class="input" type="text" placeholder="Digite aqui">
</div>
</div>-->
<div class="column is-half">
<br><br><br><br>
					 <h1 align=center>Cadastre-se na InfoMed</h1>
						<div class="field">
							<label class="label">Nome</label>
							<div class="control">
								<input name="nome" class="input" type="text" placeholder="Seu nome">
							</div>
						</div>

						<div class="field">
							<label class="label">Email</label>
							<div class="control">
								<input name="email" class="input" type="email" placeholder="Seu email">
							</div>
						</div>

						<div class="field">
							<label class="label">CRM</label>
							<div class="control">
								<input name="crm" class="input" type="text" placeholder="Seu CRM">
							</div>
						</div>
						<div class="field is-grouped">
							<div class="control">
								<br>
								<input type="hidden" name="acao" value="enviar"/>
								<button align:"right" class="button is-link is-medium" value="Enviar">Enviar</button>					
							</div>
						</div>
</div>


</div>

						</div>
					</form>

	</section>

</body>
</html>

