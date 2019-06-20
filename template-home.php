<?php
/*
Template Name: HOME
*/
?>
<?php get_header(); ?>
	
	<div id="content">
		<div id="intro">
			<?php masterslider("pg-home"); ?>
		</div>
		<div id="product-bar">
			<div class="row expanded">
				<a href="https://productos.pregelcolombia.com/pgco/productos/gelato-sorbetto.html"><div class="large-3 small-12 columns link gelato"><h3>Gelato</h3></div></a>
				<a href="https://productos.pregelcolombia.com/pgco/productos/helado-suave.html"><div class="large-3 small-12 columns link froyo"><h3 id="soft-serve">Helado Suave</h3></div></a>
				<a href="https://productos.pregelcolombia.com/pgco/productos/pasteleria-confeteria.html"><div class="large-3 small-12 columns link pastry"><h3>Pastelería <span>y</span><br>Confitería</h3></div></a>
				<a href="https://productos.pregelcolombia.com/pgco/productos/bebidas.html"><div class="large-3 small-12 columns link bev"><h3>Bebidas</h3></div></a>
			</div>
		</div>

		<!-- home widget grid -->



		<!-- IE does not support calc ?? - was using calc for full responsive homepage grid to offset title in overlay -->
		<!-- <style>
			@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
             /* IE10+ CSS here */
		    .pg-text-overlay .widgettitle {
			  	/*transform: translateY(-140%) !important;*/
			  	transform: translateY(140%) !important;
			  	/*transform: translateY(calc(-100% - 10px)) !important;*/
				}
			.pg-caption:hover .pg-text-overlay {
				 transform: translateY(20%); 
				}
		    } 
		</style> -->


		<div class="row expanded large-collapse">
			<div class="large-4 medium-12 columns">

				<div id="homeGridOne" class="homeGrid">

					<?php
					// $args = array(
					// 	'post_type' => 'article_type',
					// 	'article_cat'=> 'Featured Home Grid One');

					$args = array(
						'post_type' => 'article_type',
						'meta_key' => 'home_feature_position',
						'meta_value' => 'home_feature_one'
						);

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					  


					<div class="widget_sp_image">
						  <!-- test static headers -->
					<h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<!-- note-flipping these around for top-down effect, reverse for bottom-up effect - put h4 title back here for bottom-up slide effect -->

						        
						        <!-- <h5 class="alt"><?php //echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5> -->
						        <p class="homegrid-article-text"><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>

						      


					    </article>
					</div>
					  

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid1');
					}
					?>


				</div> <!-- end homeGrid -->

			    </div> <!-- end column -->

			<div class="large-4 medium-12 columns">

				<div id="homeGridTwo" class="homeGrid">

				<?php
					// $args = array(
					// 	'post_type' => 'article_type',
					// 	'article_cat'=> 'Featured Home Grid Two');

					$args = array(
						'post_type' => 'article_type',
						'meta_key' => 'home_feature_position',
						'meta_value' => 'home_feature_two'
						);

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<div class="widget_sp_image">
						 <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<div class="pg-text-overlay">
					    			<!-- note-flipping these around for top-down effect, reverse for bottom-up effect - put h4 title back here for bottom-up slide effect -->
						        
						        <!-- <h5 class="alt"><?php //echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5> -->
						        <p class="homegrid-article-text"><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
						       
						        </div>


					    </article>
					</div>


					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid2');
					}
					?>

				</div>  <!-- end homeGrid -->

			</div> <!-- end column -->
			<div class="large-4 medium-12 columns">

			<div id="homeGridThree" class="homeGrid">

				<?php
					/*$args = array(
						'post_type' => 'article_type',
						'article_cat'=> 'Featured Home Grid Three');*/

					$args = array(
						'post_type' => 'article_type',
						'meta_key' => 'home_feature_position',
						'meta_value' => 'home_feature_three'
						);

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					 <div class="widget_sp_image">
					 	 <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<div class="pg-text-overlay">
					    			<!-- note-flipping these around for top-down effect, reverse for bottom-up effect - put h4 title back here for bottom-up slide effect -->
						        
						        <!-- <h5 class="alt"><?php //echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5> -->
						        <p class="homegrid-article-text"><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
						       
						        </div>


					    </article>
					</div>

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid3');
					}
					?>

				</div>  <!-- end homeGrid -->

			</div> <!-- end column -->


			  <!-- end column -->

		</div> <!-- end row -->
		<!-- end home widget grid -->
		<?php 

						$image = get_field('bottom_banner');
						$link = get_field('bottom_banner_link');

						if( !empty($image) ): ?>
						<div id="home-bottom-banner" class="alt-background-light-blue">
							<div class="row">
								<div class="small-12 columns ">
									 <a href="<?php echo $link ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
								</div>
							</div>
						</div>

		<?php endif; ?>
	  <!-- <div id="gelato-shop" class="row expanded large-collapse">
	  	<div id="gelato-shop-img" class="large-6 columns"></div>
	  	<div id="gelato-shop-text" class="large-6 columns">
	  		
	  	</div>
	  </div> -->
	</div> <!-- end #content -->

<?php get_footer(); ?>