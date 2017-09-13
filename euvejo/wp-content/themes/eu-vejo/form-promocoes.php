<?php require('fornecedor/includes/fornecedorLogado.php'); ?>

	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$campos = array();
		
		$campos['titulo'] = addslashes(trim($_POST['titulo']));
		$campos['beneficio'] = addslashes(trim($_POST['beneficio']));
		$campos['tipo'] = addslashes(trim($_POST['tipo']));
		$campos['informacao'] = addslashes(trim($_POST['informacao']));
		$campos['dataInicio'] = implode("-", array_reverse(explode("/", addslashes(trim($_POST['inicio'])))));
		$campos['dataFim'] = implode("-", array_reverse(explode("/", addslashes(trim($_POST['fim'])))));
		
		$campos['horario'] = addslashes(trim(implode("|", $_POST['horario'])));
		$ins = "INSERT INTO fornecedorpromocao SET fornecedorId = " . $forn[0]->id;
		
		foreach ($campos as $k => $c) {
			$ins.= " ," . $k . "='" . $c . "'";
		}
		if (mysql_query($ins)) {
			if (isset($_GET['id'])) {
				$q = "DELETE FROM fornecedorpromocao WHERE id = '". $_GET['id'] ."'";
				mysql_query($q);
			}
		}
	}
	
	$promo = "SELECT * FROM fornecedorpromocao WHERE id = '". @$_GET['id'] ."'";
	$promo = get_sql($promo);
	
	?>
<?php require('fornecedor/includes/head.php'); ?>
<?php require('fornecedor/includes/header.php'); ?>

	
	<div class="container">
		<div class="row">
		
			<div class="col-sm-12 main">	
				<?php
					if (@$finalizacao == 1) {
						?>
						<div class="row" style="padding-top:30px;">
							<div class="col-lg-12 ">
								<div class="alert alert-success">
									Informações atualizadas com sucesso!
								</div>
							</div>
						</div><!--/.row-->
						<?php
					}
				?>
				<div class="row">
					<ol class="breadcrumb">
						<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
						<li class="active">Icons</li>
					</ol>
				</div><!--/.row-->
				
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">
						<a href="#" onclick="window.history.back();" style="font-weight: 300; font-size: 14px; border-radius: 100%; width: 30px; height: 30px; display: inline-block; text-align: center; vertical-align: top; line-height: 30px; background: #FFF; margin-right: 10px;">
								<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						Minhas Promoções</h1>
					</div>
				</div><!--/.row-->
				
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="col-md-12">
									<form id="alterarDados" action="/area-fornecedor/promocoes<?php echo isset($_GET['id']) ? '?id=' . $_GET['id'] : "" ?>" method="post">
										<label>Tipo de Promoção</label>
										<div class="col-md-4">
											<input type="text" name="titulo" class="form-control obrigatorio" placeholder="Título da Promoção" id="titulo" value="<?php echo @$promo[0]->titulo ?>">
										</div>
										<div class="col-md-3">
											<select name="tipo" class="form-control obrigatorio">
												<option value="1" <?php echo @$promo[0]->tipo == 1 ? "selected='true'" : '' ?>>Ofertas</option>
												<option value="2" <?php echo @$promo[0]->tipo == 2 ? "selected='true'" : '' ?>>Cortesias e Presente</option>
												<option value="3" <?php echo @$promo[0]->tipo == 3 ? "selected='true'" : '' ?>>Black Friday</option>
											</select>
										</div>
										<div class="col-md-5">
											<input type="text" name="beneficio" class="form-control obrigatorio" placeholder="Beneficios da Promoção (ex: 30% de desconto)" id="beneficio" value="<?php echo @$promo[0]->beneficio ?>">
										</div>
										<div class="clearfix"></div>
										<label>Período da Promoçao</label>
										<div class="col-md-6">
											<input type="text" name="inicio" class="form-control obrigatorio" placeholder="Data Inicial (Ex: 31/12/2017)" id="inicio" value="<?php @$promo[0]->dataInicio != "" ? implode("/", array_reverse(explode("-", $promo[0]->dataInicio))) : "" ?>">
										</div>
										<div class="col-md-6">
											<input type="text" name="fim" class="form-control obrigatorio" placeholder="Data Final (Ex: 31/12/2017)" id="fim" value="<?php @$promo[0]->dataFim != "" ? implode("/", array_reverse(explode("-", $promo[0]->dataFim))) : "" ?>">
										</div>
										<div class="col-md-12">
											<?php
												if (@$promo[0]->horario != "") {
													$horario = explode("|", $promo[0]->horario);
												} else
													$horario = array();
												
											?>
											<div class="periodo-da-promocao">
												<div class="col-md-4">
													<input type="checkbox" <?php echo in_array("1", $horario) ? 'checked="true"' : '' ?> value="1" name="horario[]" class="form-control obrigatorio" id="periodo-manha">
													<label for="periodo-manha">Manhã</label>
												</div>
												<div class="col-md-4">
													<input type="checkbox" <?php echo in_array("2", $horario) ? 'checked="true"' : '' ?> value="2" name="horario[]" class="form-control obrigatorio" id="periodo-tarde">
													<label for="periodo-tarde">Tarde</label>
												</div>
												<div class="col-md-4">
													<input type="checkbox" <?php echo in_array("3", $horario) ? 'checked="true"' : '' ?> value="3" name="horario[]" class="form-control obrigatorio" id="periodo-noite">
													<label for="periodo-noite">Noite</label>
												</div>
											</div>
										</div>
										<div class="clearfix"></div>
										<label>Informações</label>
										<div class="col-md-12">
											<textarea class="form-control obrigatorio" name="informacao" placeholder="Texto Explicativo"><?php echo @$promo[0]->informacao ?></textarea>
										</div>
										<div class="clearfix"></div>
										<div class="col-md-12">
											<button type="submit" class="btn btn-success pull-right">Salvar Alterações</button>
										</div>
									</form>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

	<?php require('fornecedor/includes/footer.php'); ?>