<?php
	

	xac_authorisation();
	get_header(); 
?>
<div id="page">
				<div id="pagecontent">
				<?php  
				if( is_single() ) {
					if( in_category( get_cat_ID('private'), get_the_ID() )  ) {
					 	$page_content = get_page_by_title('private');
						setup_postdata($page_content );
						get_template_part( 'content', 'page' );
					} else if( in_category( get_cat_ID('public'), get_the_ID() )  ) {
						$page_content = get_page_by_title('public');
						setup_postdata($page_content );
						get_template_part( 'content', 'page' );
					}
				}
				?>
			</div>
			
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content-single', 'single' ); ?>
		<?php comments_template( '', true ); ?>
	<?php endwhile; // end of the loop. ?>
</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>