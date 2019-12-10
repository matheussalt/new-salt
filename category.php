<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>
			<h1><?php printf( __( 'Arquivos da categoria: %s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h1>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<div class="paginas">
				<?php if(function_exists('wp_paginate')) { wp_paginate(); } else { twentythirteen_paging_nav(); } ?>                 
            </div> 

		<?php else : ?>
			Nada encontrado nessa categoria...
		<?php endif; ?>
        
<?php get_footer(); ?>
