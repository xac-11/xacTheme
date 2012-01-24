<?php get_header(); ?>
 		<div id="page">
 			<div id="articles">
				<?php	
					if( have_posts()){
						if( !xac_authorisation_check( true ) ) {	
							query_posts('cat=-' . get_cat_ID('private') );
						}
						
						while( have_posts() ) {
							the_post();	
							get_template_part( 'content', 'excerpt' );
						}
						wp_reset_query();
					}
				?>
			</div><!-- #articles -->
			
			<?php if(function_exists('wp_paginate')) {
			    wp_paginate('range=4&anchor=2&nextpage=Next&previouspage=Previous');
			} ?>
		</div><!-- #page -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>