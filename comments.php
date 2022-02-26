<div id="comments" class="container">
	
	<div class="comments-header">
		<h6 class="text-end">
			<?php 
				if(!have_comments()) {
					echo "아직 댓글이 없습니다.";
				} else {
					echo "댓글(".get_comments_number().")";
				}
			?>
		</h6>
	</div>

	<div class="comments-body">
		<?php
			wp_list_comments(
				array(
					'avatar_size' => 60, 
					'style' => 'div'
				)
			);
		?>
	</div>

	<!-- 코멘트 Form 부분 -->
	<div class="comments-inner">

		<?php 
			if(comments_open()) {
				comment_form(
					array(
						'class_form' => '',
						'title_reply_before' => '<h6 id="reply-title" class="comment-reply-title">',
						'title_reply_after'  => '</h6>',
					)
					);
			}
		?>
	</div>




</div>