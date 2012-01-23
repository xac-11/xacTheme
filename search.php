<?php get_header(); ?>

<div id="page">
			<div id="articles">
				<?php
					if( have_posts()){
						while( have_posts() ) {
							the_post();	
							get_template_part( 'content', 'excerpt' );
						}
					} else {
						echo "nothing found";
					}
				?>
			</div><!-- #articles -->
		</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>