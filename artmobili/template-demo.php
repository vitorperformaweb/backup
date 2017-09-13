<?php /* Template Name: Home */ get_header(); ?>
	<section id="carrossel" class="preto">
		
		<div class="listaItem">
			<?php
				if( have_rows('item_do_carrossel') ): while ( have_rows('item_do_carrossel') ) : the_row();
			?>
		        <div class="item">
		        	<div class="over"></div>
		        	<img src='<?php the_sub_field('imagem_principal'); ?>'>
		        	<h2>
		        		<?php the_sub_field('nome_do_ambiente'); ?>
		        	</h2>
		        </div>
					    
	        <?php
			    endwhile; else : endif;
			?>
		</div>
		
	</section>
	<section id="empresa" class="cinza">
		<div class="container">
			<h2 class="section-title">Empresa</h2>
			<div class="col-xs-12 col-md-4">
				<h3>Conceito</h3>
				<p><?php the_field('conceito'); ?></p>
			</div>
			<div class="col-xs-12 col-md-4">
				<h3>Indústria</h3>
				<p><?php the_field('industria'); ?></p>
			</div>
			<div class="col-xs-12 col-md-4">
				<h3>Sentido</h3>
				<p><?php the_field('sentido'); ?></p>
			</div>
		</div>
	</section>
	<section id='ambientes' class="preto">
		<div class="container">
			<h2 class="section-title">Ambientes</h2>
			<div class="galeria">
				<div class="listaImagens">
					<div class="row">
						<div class="col-md-6">
							<?php
								$repeater = get_field('lista_de_fotos_cozinhas',182);
								$first_img = $repeater[0]['imagem'];
								if( have_rows('lista_de_fotos_cozinhas',182) ){	    
							?>
									<div class="imagem altura-2" style="background-image: url(<?php echo $first_img;?>)">
										<div class="nome-ambiente">
											Cozinhas
										</div>
										<div class="lista-de-imagens">
											<?php while ( have_rows('lista_de_fotos_cozinhas',182) ) : the_row(); ?>
												    	<div class="itens">
															<img src="<?php the_sub_field('imagem'); ?>">
														</div>
											<?php endwhile; ?>	        
										</div>
									</div>
							<?php 
								}
							?>
						</div>
						<div class="col-md-3">
							<?php
								$repeater2 = get_field('lista_de_fotos_servicos',182);
								$first_img2 = $repeater2[0]['imagem'];
								if( have_rows('lista_de_fotos_servicos',182) ){	    
							?>
									<div class="imagem altura-2" style="background-image: url(<?php echo $first_img2;?>)">
										<div class="nome-ambiente">
											Área de Serviço
										</div>
										<div class="lista-de-imagens">
											<?php while ( have_rows('lista_de_fotos_servicos',182) ) : the_row(); ?>
												    	<div class="itens">
															<img src="<?php the_sub_field('imagem'); ?>">
														</div>
											<?php endwhile; ?>	        
										</div>
									</div>
							<?php 
								}
							?>
						</div>
						<div class="col-md-3">
							<?php
								$repeater3 = get_field('lista_de_fotos_banheiros',182);
								$first_img3 = $repeater3[0]['imagem'];
								if( have_rows('lista_de_fotos_banheiros',182) ){	    
							?>
									<div class="imagem altura-1" style="background-image: url(<?php echo $first_img3;?>)">
										<div class="nome-ambiente">
											Banheiros
										</div>
										<div class="lista-de-imagens">
											<?php while ( have_rows('lista_de_fotos_banheiros',182) ) : the_row(); ?>
												    	<div class="itens">
															<img src="<?php the_sub_field('imagem'); ?>">
														</div>
											<?php endwhile; ?>	        
										</div>
									</div>
							<?php 
								}
							?>

							<?php
								$repeater4 = get_field('lista_de_fotos_lavabos',182);
								$first_img4 = $repeater4[0]['imagem'];
								if( have_rows('lista_de_fotos_lavabos',182) ){	    
							?>
									<div class="imagem altura-1" style="background-image: url(<?php echo $first_img4;?>)">
										<div class="nome-ambiente">
											Lavabos
										</div>
										<div class="lista-de-imagens">
											<?php while ( have_rows('lista_de_fotos_lavabos',182) ) : the_row(); ?>
												    	<div class="itens">
															<img src="<?php the_sub_field('imagem'); ?>">
														</div>
											<?php endwhile; ?>	        
										</div>
									</div>
							<?php 
								}
							?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<?php
								$repeater5 = get_field('lista_de_fotos_dormitorios',182);
								$first_img5 = $repeater5[0]['imagem'];
								if( have_rows('lista_de_fotos_dormitorios',182) ){	    
							?>
									<div class="imagem altura-2" style="background-image: url(<?php echo $first_img5;?>)">
										<div class="nome-ambiente">
											Dormitórios
										</div>
										<div class="lista-de-imagens">
											<?php while ( have_rows('lista_de_fotos_dormitorios',182) ) : the_row(); ?>
												    	<div class="itens">
															<img src="<?php the_sub_field('imagem'); ?>">
														</div>
											<?php endwhile; ?>	        
										</div>
									</div>
							<?php 
								}
							?>
						</div>
						<div class="col-md-6">
							<?php
								$repeater6 = get_field('lista_de_fotos_offices',182);
								$first_img6 = $repeater6[0]['imagem'];
								if( have_rows('lista_de_fotos_offices',182) ){	    
							?>
									<div class="imagem altura-2" style="background-image: url(<?php echo $first_img6;?>)">
										<div class="nome-ambiente">
											Offices
										</div>
										<div class="lista-de-imagens">
											<?php while ( have_rows('lista_de_fotos_offices',182) ) : the_row(); ?>
												    	<div class="itens">
															<img src="<?php the_sub_field('imagem'); ?>">
														</div>
											<?php endwhile; ?>	        
										</div>
									</div>
							<?php 
								}
							?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-9">
							<?php
								$repeater7 = get_field('lista_de_fotos_home',182);
								$first_img7 = $repeater7[0]['imagem'];
								if( have_rows('lista_de_fotos_home',182) ){	    
							?>
									<div class="imagem altura-2" style="background-image: url(<?php echo $first_img7;?>)">
										<div class="nome-ambiente">
											Home Theaters
										</div>
										<div class="lista-de-imagens">
											<?php while ( have_rows('lista_de_fotos_home',182) ) : the_row(); ?>
												    	<div class="itens">
															<img src="<?php the_sub_field('imagem'); ?>">
														</div>
											<?php endwhile; ?>	        
										</div>
									</div>
							<?php 
								}
							?>
						</div>
						<div class="col-md-3">
							<?php
								$repeater8 = get_field('lista_de_fotos_gourmet',182);
								$first_img8 = $repeater8[0]['imagem'];
								if( have_rows('lista_de_fotos_gourmet',182) ){	    
							?>
									<div class="imagem altura-1" style="background-image: url(<?php echo $first_img8;?>)">
										<div class="nome-ambiente">
											Áreas Gourmet
										</div>
										<div class="lista-de-imagens">
											<?php while ( have_rows('lista_de_fotos_gourmet',182) ) : the_row(); ?>
												    	<div class="itens">
															<img src="<?php the_sub_field('imagem'); ?>">
														</div>
											<?php endwhile; ?>	        
										</div>
									</div>
							<?php 
								}
							?>
							<?php
								$repeater9 = get_field('lista_de_fotos_jantar',182);
								$first_img9 = $repeater9[0]['imagem'];
								if( have_rows('lista_de_fotos_jantar',182) ){	    
							?>
									<div class="imagem altura-1" style="background-image: url(<?php echo $first_img9;?>)">
										<div class="nome-ambiente">
											Sala de Jantar
										</div>
										<div class="lista-de-imagens">
											<?php while ( have_rows('lista_de_fotos_jantar',182) ) : the_row(); ?>
												    	<div class="itens">
															<img src="<?php the_sub_field('imagem'); ?>">
														</div>
											<?php endwhile; ?>	        
										</div>
									</div>
							<?php 
								}
							?>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<section id='dicas' class="cinza">
		<div class="container">
			<h2 class="section-title">Dicas</h2>
			<div class="dicas">
				<?php
					if( have_rows('dicas_cadastradas') ): while ( have_rows('dicas_cadastradas') ) : the_row();
				?>
			        <div class="dica col-md-4">
			        	<img src='<?php the_sub_field('imagem_da_dica'); ?>'>
			        	<div class="info">
				        	<h2>
				        		<?php the_sub_field('titulo_da_dica'); ?>
				        	</h2>
				        	<div class="resumo">
				        		<?php the_sub_field('resumo_da_dica'); ?>
				        	</div>
				        	<div class="textoCompleto">
				        		<?php the_sub_field('dica_completa'); ?>
				        	</div>
				        	<a href="#">
				        		Continue Lendo
				        	</a>
			        	</div>
			        </div>
						    
		        <?php
				    endwhile; else : endif;
				?>
			</div>
		</div>
	</section>
	<section id="depoimentos" class="preto">
		<div class="container">
			<h2 class="section-title">Depoimentos</h2>
			<div class="depoimentos">
				<?php
					if( have_rows('lista_de_depoimentos',245) ): while ( have_rows('lista_de_depoimentos',245) ) : the_row();
				?>
			        <div class="depoimento">
			        	
			        	<div class="cliente-depoimento">
			        		"<?php the_sub_field('depoimento_do_cliente');?>"
			        	</div>
			        	<div class="text-depoimento">
			        		<?php the_sub_field('nome_do_cliente');?>
			        	</div>
			        </div>
						    
		        <?php
				    endwhile; else : endif;
				?>
			</div>
		</div>
	</section>
	<section id="contato" class="cinza">
		<div class="container">
			<h2 class="section-title">Contato</h2>
			<div class="col-md-6 info">
				<h3>LIGUE E SOLICITE UM ORÇAMENTO </h3>
				<p><i class="fa fa-phone" aria-hidden="true"></i> <?php the_field('telefone',8); ?></p>
				<p><i class="fa fa-home" aria-hidden="true"></i> Av. Pedro Américo, 438 - Vila Homero Thon, Santo André - SP</p>
				
				<p><i class="fa fa-envelope" aria-hidden="true"></i> <?php the_field('email',8); ?></p>
				<div class="social">
					<a href="<?php the_field('facebook',8); ?>" target="_blank">
						<i class="fa fa-facebook-square" aria-hidden="true"></i>
					</a>
					<a href="<?php the_field('instagram',8); ?>" target="_blank">
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="col-md-6 formulario">
				<?php echo do_shortcode( '[contact-form-7 id="52" title="Contato"]' ); ?>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="verMapa"><i class="fa fa-map-marker" aria-hidden="true"></i> Ver o mapa</div>
		<div class="mapa" id="mapa">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.3076104136217!2d-46.510514085020205!3d-23.66495498463154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce69d0425a8c8b%3A0xd96a5b62b78d9c7!2sAv.+Pedro+Am%C3%A9rico%2C+438+-+Vila+Homero+Thon%2C+Santo+Andr%C3%A9+-+SP%2C+09110-560!5e0!3m2!1spt-BR!2sbr!4v1462606401637" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

	</section>
<?php get_footer(); ?>
