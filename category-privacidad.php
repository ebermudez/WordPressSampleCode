<!-- 
	WordPress Sample Code
	Edgardo Bermúdez
	
	Category file created to modify how a privacy template must be shown.
-->

<?php get_header(); ?>
	<div id="Titulo">
		<h2 id="tituloInterno">Privacy Policy</h2>
	</div>
	<div class="line-separator-inner">
	</div>
	<div id="Contenido">
		<div id="BlogPosts">
		<!-- This div is repeated for every post -->	

		<?php global $post;
	
			$args = array( 'numberposts'=>1, 'orderby'=> 'post_date', 'order'=> 'DESC', 'category'=>24);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>


			<div class="post">
				<div class="postPreviewImg">
					<div class="postImage">
					<?php 
						if ( has_post_thumbnail() ) { // it checks if the post has a Post Thumbnail assigned to it.
 	 						the_post_thumbnail(array(90,90));
						} 

						else{
						?>
							<img src="<?php bloginfo('template_url'); ?>/img/im_news.jpg" width="90" height="90"/>
						<?php 
						}
						?>
					</div>

				</div>
				<div class="postPreviewContent">
				<a href="<?php the_permalink(); ?>" class="postHref">
					<h3 class="postPreviewTitulo"> <?php the_title(); ?></h3>
				</a>
					<div class="postPreviewTexto">
					<?php the_excerpt();  ?>
					
					</div>
					
				</div>
			</div>
			
		<?php endforeach; ?>	
		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>		
		</div>
	</div>
	


<?php get_footer(); ?>