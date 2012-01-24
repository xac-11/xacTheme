<?php 
	xac_authorisation();
	get_header(); 
?>
		<div id="page">
			<div id="categorypage">
				<?php  
				//if( is_category() ) {
					foreach (get_the_category() as $category ){
						if( strtolower($category->name) == 'private' ) {
							$page_content = get_page_by_title('Private');
							setup_postdata($page_content );
							echo "<div id='categories' title='Kategorien'>" . xac_get_child_cats('private') . "</div>";
							get_template_part( 'content', 'page' );
							
						} else if( strtolower($category->name) == 'public') {
							$page_content = get_page_by_title('Public');
							setup_postdata($page_content );
							echo "<div id='categories' title='Kategorien'>" . xac_get_child_cats('public') . "</div>";
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