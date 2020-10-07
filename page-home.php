<?php 
    //Template Name: Menu da Semana
?>

<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="container">
			<h2 class="subtitulo"><?php the_title(); ?></h2>
			
			<?php if(have_rows('category_menu')): while(have_rows('category_menu')) : the_row(); ?>
			<div class="menu-prato grid-8">
				<h2><?php the_sub_field('category_name'); ?></h2>
				<ul>

					<?php if(have_rows('category_plate')): while(have_rows('category_plate')) : the_row(); ?>
					<li>
						<span><sup>R$</sup><?php the_sub_field('category_price'); ?></span>
						<div>
							<h3><?php the_sub_field('name_plate'); ?></h3>
							<?php the_sub_field('description_plate') ?>
						</div>
					</li>
					<?php endwhile; else : endif; ?>

				</ul>
			</div>
			<?php endwhile; else : endif; ?>

		</section>
	
	<?php endwhile; else: endif; ?>
<?php get_footer(); ?>