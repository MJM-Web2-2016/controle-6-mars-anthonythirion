<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="visuel-listing column">
	<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			<div class="entry-content">
				<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
				<?php
		if ( has_post_thumbnail() ) {
		  the_post_thumbnail();
		}
		?>
		</div>
		<footer>
			<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
		</footer>
	</div>
</div>
