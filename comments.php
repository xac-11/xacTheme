<div id="comments">
	<?php 
	if ( have_comments() ){
		wp_list_comments( array( 
				'reply_text' => 'antworten', 
				'type' => 'comment',
				'callback' => 'xac_comment_callback'
		));
	}
	?>

	<?php
	$fields =  array(
		'author' => '<p class="comment-form-author">' . 
						'<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
	            		'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />' . 
	            	'</p>',
		'email'  => '<p class="comment-form-email">' . 
						'<label for="email">' . __( 'E-Mail' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
	            		'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />' .
	            		' wird nicht veröffentlicht' . 
	            	'</p>'
	);

		$args = array(
			'id_form' => 'commentform',
		    'id_submit' => 'submit',
		    'title_reply' => __( '' ),
		    'title_reply_to' => __( '' ),
		    'cancel_reply_link' => __( 'Cancel reply' ),
		    'label_submit' => __( 'Kommentar abschicken' ),
		    'comment_notes_before' => __(''),
		    'comment_notes_after' => __( '' ),
		    'logged_in_as' => '',
		   
			'comment_field' => '<p class="comment-form-comment">' . 
									'<textarea id="comment" name="comment" cols="45" rows="12" tabindex="4" aria-required="true"></textarea>' . 
							'</p>'
		    
	
		);
	
	      comment_form($args);
		  
		  /*
		   * 
		   * 		'comment_field' => '<p class="comment-form-comment">' . 
									'<textarea id="comment" name="comment" cols="45" rows="12" tabindex="4" aria-required="true"></textarea>' . 
								'</p>'
		   */
	
	?>

<!-- 
	
	<?php if ('open' == $post->comment_status) : ?>
		<div id="respond">
			<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
				You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php">logged in</a> to post a comment.
			<?php else : ?>
				
				<form action="<?php  esc_url(get_bloginfo('url')) ?>/wp-comments-post.php" method="post" id="commentform">
					<?php if ( !$user_ID ) : ?>
					<label for="username">username</label><input type="text" name="username" value="" id="username"/><br />
					<label for="email">e-mail</label><input type="text" name="email" value="" id="email"/> <br />
					<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
					

					<? endif; ?>
				</form>
			<?php endif; ?>
		</div>

	<?php endif; ?>

-->
	
	
<!--	
	<div id="respond">
		<form action="<?php  esc_url(get_bloginfo('url')) ?>/wp-comments-post.php" method="post" id="commentform">
			<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>				
			<p class="form-submit">
				<input name="submit" type="submit" id="submit" value="Post Comment">
				<input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" id="comment_post_ID">
				<input type="hidden" name="comment_parent" id="comment_parent" value="0">
			</p>
			<input type="hidden" id="_wp_unfiltered_html_comment" name="_wp_unfiltered_html_comment" value="d81a85efdc">
		</form>
	</div>
-->

</div><!-- #comments -->