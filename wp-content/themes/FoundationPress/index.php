<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


<div class="row">
		<div class="gBox">
			Image 1
		</div>
		<div class="gBox">
			Image 2
		</div>
		<div class="gBox">
			Image 3
		</div>
		<div class="gBox">
			Image 4
		</div>
		<div class="gBox">
			Image 5
		</div>
	</div>
	<div class="gBox">
		Image 6
	</div>
	<div class="gBox">
		Image 7
	</div>
	<div class="gBox">
		Image 8
	</div>
	<div class="gBox">
		Image 9
	</div>
	<div class="gBox">
		Image 10
	</div>
	<div class="gBox">
		Image 11
	</div>
	<div class="gBox">
		Image 12
	</div>
	<div class="gBox">
		Image 13
	</div>
	<div class="gBox">
		Image 14
	</div>
	<div class="gBox">
		Image 15
	</div>
</div>



<div id="page" role="main">
	<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>

	</article>
	<?php get_sidebar(); ?>


<?php get_footer();
