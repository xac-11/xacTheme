<article>
	<?php the_title('<h1>', '</h1>');?>
	<div class="date_wrapper">
		<div class="date">
			<div class="day"><?php the_time('j' ) ?></div>
			<div class="month"><?php the_time('M' ) ?></div>
			<div class="year"><?php the_time('Y' ) ?></div>
		</div>
	</div>
	<div class="content_wrapper">
		<div class="content"><?php the_content();?></div>
		<div class="meta">
			<div class="categories" title="Kategorien">
				<span class="ui-icon ui-icon-folder-open"></span><span class="metaellist"><?php echo xac_get_post_categories( $post->ID ); ?></span>
			</div>
			<div class="tags" title="Tags">
				<span class="ui-icon ui-icon-tag"></span><span class="metaellist"><?php the_tags('', ', ', '');?></span>
			</div>
			<?php //the_tags('<div class="tags">', ', ', '</div>'); ?>
			<div class="comments" title="Kommentare">
				<span class="ui-icon ui-icon-comment"></span>
				<span class="metaellist">
					<a href="<?php comments_link(); ?>"><?php  comments_number('keine Kommentare', '1 Kommentar', '% Kommentare') ?></a>
				</span>
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->