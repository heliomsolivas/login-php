<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Projeto Xavier</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:700,300,400' rel='stylesheet' type='text/css'>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


	<title>Projeto Xavier</title>
</head>

<body>
	<div class="container">
		<div class="row margin-aux">
			<div class="col-xs-12">
				<div class="box-home">
					<div class="box-cabecalho">
					   <?php
if(isset($_COOKIE["usuario_logado"])) {
?>
<p class="text-success">Você está logado como <?= $_COOKIE["usuario_logado"] ?></p>
<?php
}
?>
</div>
						<div class="form-home">
							<div class="col-xs-6">

							<label>Dono do carro</label><input type="text" class="ipt-custom" name="nomeDono">
							<label>Professor</label><input type="text" class="ipt-custom" name="funcao">
							<label>Placa</label><input type="text" class="ipt-custom" name="numeroPlaca">
							<label>Modelo - Ano - Cor</label><input type="text" class="ipt-custom" name="modeloCarro">
							<label>Cidade</label><input type="text" class="ipt-custom" name="cidadePlaca">
							<label>Situação</label><input type="text" class="ipt-custom" name="situacaoPlaca">
							<?php
							$url = "http://placa.hol.es/?placa=AFT0017&type=json";
							$json = file_get_contents($url);
							$json_data = json_decode($json, true);
							print $json_data['placa'].$json_data['municipio'];
							

							/*
								{"codigoRetorno":"0","mensagemRetorno":"Sem erros.","codigoSituacao":"0","situacao":"Sem restri\u00e7\u00e3o","modelo":"I\/FERRARI 360 MODENA","marca":"I\/FERRARI 360 MODENA","cor":"VERMELHA","ano":"1999","anoModelo":"2000","placa":"AFT0017","data":"12\/11\/2015 21:26:03","uf":"PR","municipio":"QUATRO BARRAS","chassi":"************15765"}
							*/
?>

						</div>
						<div class="col-xs-6">
							<div class="box-webcam">
								<video id="video" width="100%" height="400" controls autoplay></video>
  							</div>
  							<div class="box-autorizado"><p>Não autorizado</p></div>
  							<div class="box-nao-autorizado"></div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<script type="text/javascript" src="web.js"></script>
</body>
</html>