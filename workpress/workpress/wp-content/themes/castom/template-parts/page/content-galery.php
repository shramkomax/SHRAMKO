<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-content">
		<?php

		$params = array(
			
			'post_type'       => 'galery', // тип постов	
		);
		

		$query = new WP_Query( $params ); ?>

		<?php if ( $query->have_posts() ) : ?>

			<!-- пагинация -->

			<!-- цикл -->
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<p><?php the_excerpt(); ?></p>
				<p><?php the_content(); ?></p>
				<p>Ссылка на автора <?php the_field('name'); ?></p>
				<p><a href="<?php the_field('link'); ?>"><?php the_field('link'); ?></a></p>
			<?php endwhile; ?>
			<!-- конец цикла -->

			<!-- пагинация -->

			<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php esc_html_e( 'Нет постов по вашим критериям.' ); ?></p>
		<?php endif; ?>


	</div>
</article>
