<?php include 'header.php'; ?>
		<div class="container">
			<div class="row margin-aux">
				<div class="col-xs-12">
					<div class="box-home">
						<div class="box-cabecalho">
							<p>Projeto Xavier</p>
							<?php
							/*
							if(isset($_COOKIE["usuario_logado"])) {
							?>
							<p class="text-success">Você está logado como <?= $_COOKIE["usuario_logado"] ?></p>
							<?php
							}
							*/
							?>
						</div>
						<div class="form-home">
							<div class="col-xs-6">
								<script>
								
								setInterval(function(){ getUsers(); }, 1000);
								function getUsers()
								{
								$.ajax({
								url: 'teste-bd.php',
								type: 'post',
								success: function(data) {
									var json = JSON.parse(data);
									var teste = json['fotos'];
									console.log(teste);

								if (json["autorizacao"] == 1) {
									$('#ipt-autorizacao').html("Autorizado");
									$('#ipt-placa').html(json["placa"]);
									$('#ipt-nome').html(json["nome-dono"]);
									$('#ipt-modelo-ano-cor').html(json["modelo-ano-cor"]);
									$('#ipt-cidade').html(json["cidade"]);
									$("#ipt-foto").attr("src", "http://localhost/xavier/imagens/" + json["fotos"]);
									
								} else {
									$('#ipt-autorizacao').html("Nao autorizado");
									$('#ipt-placa').html(json["placa"]);
								}
								}
								});
								}
								</script>
								<div class="box-img">
								<img id="ipt-foto">
							</div>
								<label>Dono do carro</label>
								<div class="ipt-custom" id="ipt-nome"></div>
								<label>Placa</label>
								<div class="ipt-custom" id="ipt-placa"></div>
								<label>Modelo - Ano - Cor</label>
								<div class="ipt-custom" id="ipt-modelo-ano-cor"></div>
								<label>Cidade</label>
								<div class="ipt-custom" id="ipt-cidade"></div>
								
							</div>
							<div class="col-xs-6">
								<div class="box-webcam">
							
									<iframe id="video" width="100%" height="400" controls autoplay></iframe>
								</div>
								<div class="box-autorizado"><p>
									<div id="ipt-autorizacao">
									</div>
								</p></div>
								<div class="box-nao-autorizado"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Latest compiled and minified JavaScript -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/web.js"></script>
	</body>
</html>