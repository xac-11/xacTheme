<?php 
	xac_authorisation();
	get_header(); 
?>
		<div id="page">
			<div id="pagecontent">
				<?php  
				//if( is_category() ) {
					foreach (get_the_category() as $category ){
						if( $category->name == 'private' ) {
							$page_content = get_page_by_title('private');
							setup_postdata($page_content );
							get_template_part( 'content', 'page' );
						} else if( $category->name == 'public') {
							$page_content = get_page_by_title('public');
							setup_postdata($page_content );
							get_template_part( 'content', 'page' );
						}
					}
				//}
				?>
			</div>
				
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
			
			<?php if(function_exists('wp_paginate')) {
			    wp_paginate('range=4&anchor=2&nextpage=Next&previouspage=Previous');
			} ?>

		</div><!-- #page -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>