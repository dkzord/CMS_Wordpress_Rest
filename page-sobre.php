<?php 
// Template Name: Sobre
?>
<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-8">
				<img src="<?php the_field('photo_rest'); ?>" alt="<?php the_field('photo_rest_description'); ?>">
			</div>

			<div class="grid-8">
				<?php if(have_rows('content_about')): while(have_rows('content_about')) : the_row(); ?>
					<h2><?php the_sub_field('title_about'); ?></h2>
						<?php the_sub_field('text_about'); ?> 
				<?php endwhile; else : endif; ?>
			</div>
		</section>
	<?php endwhile; else: endif; ?>
<?php get_footer(); ?>