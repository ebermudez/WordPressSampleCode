<!-- 
	WordPress Sample Code
	Edgardo Bermúdez
	
	Single type file. It shows what to render in a single post of type "successful case".
-->
<?php get_header(); ?>

	<div id="Titulo">
		<h2 id="tituloInterno">CASOS DE &Eacute;XITO</h2>
	</div>
	<div class="line-separator-inner">
	</div>	
	<div id="Contenido-Ind">
		<div id="wrapper" class="clearfix">
			<div id="twocols"> 
				<div id="maincol3">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>					
						<h3 style="cursor: help" class="titulaje"><?php the_title(); ?></h3>	
						<p class="textoCentral"></p>		
						<div class="contenedorCasosInd">
							<div id="">
								<h3></h3>
							</div> 
							
							<table>
							<tr>
								<td id="Box4">
								<h2><?= objetivo_titulo($post) ?></h2>
								<p><?= objetivo_contenido($post) ?></p>
								</td>
								<td id="Box5">
								<h2><?= resultados_titulo($post) ?></h2>
								<p><?= resultados_contenido($post) ?></p>
								</td>
							</tr>
							<tr>
								<td id="Box4">
								<h2><?= solucion_titulo($post) ?></h2>
								<p><?= solucion_contenido($post) ?></p>
								</td>
								<td id="Box5">
								<h2></h2>
								<p><?php echo the_content(); ?></p>
								</td>						
							</tr>
							</table>
							<hr class="clear" />
							
							
						</div>
					<?php endwhile; endif; ?>					
				</div>
				<div id="rightcol"> 
					<div id="mobmediaTwitter" style="text-align: left;">

					</div>
					<div class="navbox">
						<ul class="nav">
							<?php
							$plugin_dir_path = dirname(__FILE__);
							$category_link = get_category_link(9);
							?>
							<li><a href="<?php echo esc_url( $category_link ); ?>">Otros casos</a></li>
							<?php
							$category_link = get_category_link(15);
							?>
							
                            <?php
							$category_link = get_category_link(21);
							?>
							<li><a href="<?php echo esc_url( $category_link ); ?>">Glosario</a></li>
							<li><a href="<?php echo bloginfo('wpurl'); ?>/wp-content/descargas/MediaKitWeb.php" title="Media Kit Download">MediaKit</a></li>
						</ul>
					</div>
					
				</div>
			</div> 
		</div>
	</div>
	
	
<?php get_footer(); ?>