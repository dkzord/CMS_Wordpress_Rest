<?php
// Template Name: Contato
?>

<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="container contato">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-16">
				<a href="<?php the_field('link_map') ?>" target="_blank"><img src="<?php the_field('img_map') ?>" alt="Mapa para o Rest"></a>
			</div>

			<?php if(have_rows('content_contact')): while(have_rows('content_contact')) : the_row(); ?>
			<div class="grid-1-3 contato-item">
				<h2><?php the_sub_field('title_data'); ?></h2>
				<?php the_sub_field('info_data'); ?>
			</div>
			<?php endwhile; else : endif; ?>

		</section>

	<?php endwhile; else: endif; ?>
<?php get_footer(); ?>