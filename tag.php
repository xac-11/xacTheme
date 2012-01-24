<?php get_header(); ?>
 		<div id="page">
 			<div id="articles">
				<?php	
					if( have_posts()){
						while( have_posts() ) {
							the_post();	
							get_template_part( 'content', 'excerpt' );
						}
					}
				?>
			</div><!-- #articles -->
		</div><!-- #page -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>