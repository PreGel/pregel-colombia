<?php get_header(); ?>

<div id="content">
	<div id="pg-featured-article-banner" class="large-12">
		<?php
		$args = array(
			'post_type' => 'article_type',
			'article_cat'=> 'Featured Article News Page');

		$my_query = new WP_Query( $args );
		if( $my_query->have_posts() ) {
			while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<div class="grid-container">
				<div class="grid-x">
					<article class="">
						<!-- custom thumbnail size 600px wide -->
						<div class="cell" id="featured-article-title-container">
							<div class="large-10 large-centered cell" id="fatured-article-title-inner-container">	
								<div id="featured-image-banner-container">
									<section id="featured-image-banner" itemprop="articleBody">
										<?php the_post_thumbnail('full'); ?>
									</section>
								</div>
								<h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
								<h5 class="alt"><?php echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5>
								<?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?>
								<a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Leer más</a>
							</div>
						</div>
					</article>
					<?php endwhile;
					wp_reset_query(); 
				}
					/*else {
						 get_sidebar();
						}*/
						?>
					</div>
				</div> <!-- end container -->
			</div> <!-- end banner -->

			<div id="pg-news-container" class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="large-12 cell">
						<h1>Noticias</h1>
					</div>
					<div class="large-8 cell">
						<p>Cuando PreGel tiene algo novedoso que compartir, queremos que usted sea el primero en enterarse. Refiérase a esta página para mantenerse informado acerca del lanzamiento de nuevos productos, eventos de la industria, información que le ayudará con su negocio y mucho más. Lo invitamos a que explore nuestra colección de material informativo y educativo en un esfuerzo por mantenerlo al día.</p>
					</div>
					<div class="sidebar large-4 medium-5 small-12 cell end" role="complementary">

					</div>
				</div>
			</div> <!-- end container -->

			<div class="grid-container">		
				<div id="news-grid-feed" class="grid-x grid-margin-x">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive-grid-news' ); ?>
				<?php endwhile; ?>	
				<?php joints_page_navi(); ?>
			<?php else : ?>
			<?php get_template_part( 'parts/content', 'missing' ); ?>
		<?php endif; ?>
	</div> <!-- end #news-grid-feed -->
</div><!-- end grid-container -->

</div> <!-- end #content-->

<?php get_footer(); ?>