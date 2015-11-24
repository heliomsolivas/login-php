<?php

$con = mysqli_connect('localhost', 'root', '') or
die('Não foi possível conectar');
mysqli_select_db($con,"placas");

//por causa dos acentos no BD
mysqli_query($con, 'SET CHARACTER SET utf8');

$result = mysqli_query($con, 'SELECT * FROM dados_compilados');
while($row = mysqli_fetch_assoc($result)){

//$row = array

//Convertendo o objeto para JSON
		$jsonrow =  json_encode($row);
		echo $jsonrow;
		
  
mysqli_close($con);
}
