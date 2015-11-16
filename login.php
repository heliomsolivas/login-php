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

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


	<title>Projeto Xavier</title>
</head>
<body>
	<div class="container">
		<div class="row margin-aux">
			<div class="col-xs-12">
				<div class="box-login">
					<div class="box-cabecalho">
						<p>Xavier's Login</p>
					</div>

					<form class="form-login" action="verificar.php" method="post" >
  						<div class="form-group">
  							<div class="box-icon">
  							<i class="fa fa-user"></i>
  						</div>
    							<input type="text" class="ipt-login" placeholder="Usuario" name="email">
  						</div>
  						<div class="form-group">
  							<div class="box-icon">
  							<i class="fa fa-unlock-alt"></i>
  						</div>
    						<input type="password"  class="ipt-login"  placeholder="Senha" name="senha">
  						</div>
                 <?php
           if(isset($_GET["login"]) && $_GET["login"]==false) {
        ?>
        
      <div class="form-wrong"><i class="fa fa-times"></i> Usuário ou senha inválida!</div>
      <?php
    }
    ?>
 					<button type="submit" class="btn-login">Entrar</button>
      </form>
</div>
			</div>
		</div>
	</div>
</body>
</html>