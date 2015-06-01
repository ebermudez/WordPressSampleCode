<!-- 
	WordPress Sample Code
	Edgardo Bermúdez
	
	Index.php: It renders the homepage
-->
<?php get_header(); ?>

<div id="mobCentral">
	<div id="CompanyName-11">
					
		<div id="slider2">
			<?php global $post;
			$args = array( 'numberposts'=>5, 'orderby'=> 'rand', 'order'=> 'DESC', 'category'=>3);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					?><a href="<?php the_permalink(); ?>"><?php 	the_post_thumbnail(); ?></a>  <?php 
				} 
				else {
					?> <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/slider1.png" alt="" height="350" width="920" /></a> <?php 	
				}						
			endforeach; ?>			
		</div>
	</div>	
		<div id="CompanyName-13">
			<div id="boton" class="css3button">
				<p id="callToAction"><a href="#">Cont&aacute;ctanos</a></p>
			</div>
		</div>
		<div id="anuncios">	
			<div id="contactHoverButton" >
				<a href="<?php $category_link = get_category_link(22); echo esc_url( $category_link ); ?>">
								<img title="Si deseas contactarnos y obtener una respuesta inmediata sobre tu caso, escr&iacute;benos."
								src="<?php bloginfo('template_url'); ?>/imagenes/contactoPlus.png" alt="" height="30" width="41"/>
				</a>
			</div>
			<div id="CompanyName-14">
				<p>	<?php 
						global $post;
						$post_id = 17;
						$post = get_post($post_id);
						echo $post->post_content;
					
					?>
				</p>	
			</div>
			<div id="CompanyName-15">	
			</div>
			<div id="datos-mob">
				<div id="CompanyName-16">
					<h3 id="impresiones">-</h3>	
					<span>Impresiones</span>
				</div>
				<div id="CompanyName-17">
					<h3 id="suscriptores">-</h3>	
					<span>Suscriptores</span>
				</div>
			</div>
		</div>		
		<div id="subpages">
			<div id="CompanyName-21">
				<?php 
				$cat_name = get_cat_name(5);
				$category = get_category(5);
				$cat_desc = $category->description;
				$category_link = get_category_link(5);
				?>
				<h3><a href="<?php echo esc_url( $category_link ); ?>"><?php echo $cat_name;?></a></h3>
				<a href="<?php echo esc_url( $category_link ); ?>"><p><?php echo $cat_desc;?></p></a>
			</div>
			<div id="CompanyName-22">
				<?php 
				$cat_name = get_cat_name(6);
				$category = get_category(6);
				$cat_desc = $category->description;
				$category_link = get_category_link(6);
				?>
				<h3><a href="<?php echo esc_url( $category_link ); ?>"><?php echo $cat_name;?></a></h3>
				<a href="<?php echo esc_url( $category_link ); ?>"><p><?php echo $cat_desc;?></p></a>
			</div>
			<div id="CompanyName-23">
				<?php 
				$cat_name = get_cat_name(7);
				$category = get_category(7);
				$cat_desc = $category->description;
				$category_link = get_category_link(7);
				?>
				<h3><a href="<?php echo esc_url( $category_link ); ?>"><?php echo $cat_name;?></a></h3>
				<a href="<?php echo esc_url( $category_link ); ?>"><p><?php echo $cat_desc;?></p></a>
			</div>
			<div id="CompanyName-18">
			
				<?php 
				$cat_name = get_cat_name(8);
				$category = get_category(8);
				$cat_desc = $category->description;
				$category_link = get_category_link(8);
				?>
				<h3><a href="<?php echo esc_url( $category_link ); ?>"><?php echo $cat_name;?></a></h3>
				<a href="<?php echo esc_url( $category_link ); ?>"><p><?php echo $cat_desc;?></p></a>
			</div>
		</div>
		<div id="subpages2">
			<div id="CompanyName-27">
				<?php 
				$cat_name = get_cat_name(9);
				$category = get_category(9);
				$cat_desc = $category->description;
				$category_link = get_category_link(9);
				?>
				<h3><a href="<?php echo esc_url( $category_link ); ?>"><?php echo $cat_name;?></a></h3>
				<p class="category_description"><?php echo $cat_desc;?></p>
				<?php global $post;
				$args = array( 'numberposts'=>5, 'orderby'=> 'post_date', 'order'=> 'DESC', 'post_type' => 'succases');
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) :	setup_postdata($post); ?>
					<a href="<?= get_permalink() ?>"><p class="homeSuccess"><?= the_title() ?></p></a><br/>
				<?php endforeach; 
				wp_reset_query();
				?>	
			</div>
			<div id="CompanyName-28">
				<div id="twitterTitle">
				<h3><a href="https://twitter.com/#!/companytwitter" target="_blank">Twitter</a></h3>
				<a href="https://twitter.com/#!/companytwitter" target="_blank"><img class="twitterImagen" alt="twitter" src="<?php bloginfo('template_url'); ?>/imagenes/t50.png"/></a>
				</div>
				<?php 
				$cat_name = get_cat_name(10);
				$category = get_category(10);
				$cat_desc = $category->description;
				$category_link = get_category_link(10);
				?>				
				<div id="companyTwitter" style="text-align: left;"></div>
				<link rel="stylesheet" type="text/css" 
					href=<?=get_bloginfo('template_directory') . "/twitter/jquery.jtweetsanywhere-1.3.1.css"?> />	
				<script type="text/javascript" 
					src=<?=get_bloginfo('template_directory') . "/twitter/jquery.jtweetsanywhere-1.3.1.min.js"?>>
				</script>	
				<script type="text/javascript" 
					src=<?=get_bloginfo('template_directory') . "/twitter/jtweetsanywhere-es-1.3.1.js"?>>
				</script>		
				<script type="text/javascript">
					$('#companyTwitter').jTweetsAnywhere({
						username: 'companytwitter',
						count: 10,
						locale: 'es',
					showTweetFeed: {
						showProfileImages: true,
						showUserScreenNames: true,
						paging: {
							mode: 'endless-scroll'
						}
					},
					onDataRequestHandler: function(stats) {
						if (stats.dataRequestCount < 11) {
							return true;
						}
						else {
				//            alert("To avoid struggling with Twitter's rate limit, we stop loading data after 10 API calls.");
						}
					}
				});
				</script>		
			</div>
			<div id="CompanyName-29">
				<?php 
				$cat_name = get_cat_name(17);
				$category_link = get_category_link(12);
				?>
				<h3><a href="<?php echo esc_url( $category_link ); ?>"><?php echo $cat_name;?></a></h3>
				<p class="category_description">Novedades en la empresa</p>
				<?php global $post;
				$args = array( 'numberposts'=>5, 'orderby'=> 'post_date', 'order'=> 'DESC', 'category'=>17);
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) :	setup_postdata($post); ?>
				<a href="<?= get_permalink() ?>"><p class="homeSuccess"><?= the_title() ?></p></a><br/>
				<?php endforeach; 
				wp_reset_query();
				?>
			</div>
		</div>
		
		<div id="clientelaHome">

			<div id="menu-outer-clients">
				<div class="table-clients">
					<ul id="horizontal-list-clients">
					<?php global $post;
					$args = array( 'numberposts'=>10, 'orderby'=> 'post_date', 'order'=> 'DESC', 'post_type' => 'clientes');
					$myposts = get_posts( $args );
					$contador = 1;
					foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<li>

						<?php if(has_post_thumbnail()):   //if there's a defined thumbnail
							$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' , false );
						?>
						<img src="<?php echo $pimagen[0] ?>" alt="<?php the_title(); ?>" width="<?php echo $pimagen[1]; ?>" height="<?php echo $pimagen[2]; ?>" />
						<?php endif; ?>
						</li>
						<?php $contador = $contador + 1; ?>
					<?php endforeach; 
					wp_reset_query();
					?>
					</ul>
				</div>
			</div>
			
		</div>
		
	</div>
	<script type="text/javascript">
	<!--
	google_ad_client = "ca-pub-1234sample";
	/* Footer */
	google_ad_slot = "1234567";
	google_ad_width = 728;
	google_ad_height = 90;
	//-->
	</script>
	<script type="text/javascript"
	src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>
<?php get_footer(); ?>