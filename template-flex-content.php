<?php
/* Template Name: Flexible Content */
?>

<?php get_header(); ?>

<div id="content" class="pg-about-content">

 <!-- Title Banner of Page with Big Image -->
   <div id="pg-about-banner-container">
    <div class="row">
	 <div id="pg-about-banner"></div>
    </div> 
   </div>
 <!-- Beginning of Content  -->   
		<div id="title-banner" class="large-centered columns">
		  <h1 class="text-center"><?php the_field('title_banner_text'); ?></h1>							
	    </div>

<?php

// check if the flexible content field has rows of data
if( have_rows('standard_section') ): ?>
<div id="pg-inner-content">
	<?php 

     // loop through the rows of data
    while ( have_rows('standard_section') ) : the_row();

        if( get_row_layout() == 'standard_row' ):

        	// vars
		$title = get_sub_field('section_title');
		$text = get_sub_field('section_text');

       ?>

        	<!-- Content section 1 -->
			<div class="pg-section">
			 <div class="row">
			  <div class="small-12 large-4 columns">
				 <h2><?php echo $title; ?></h2>
			  </div>
			  <div class="small-12 large-8 columns">
				 <?php echo $text; ?>
			  </div>
			 </div>
			</div>

      <?php  elseif( get_row_layout() == 'left_img_row' ): 

      	// vars
		$image = get_sub_field('left_image');
		$text = get_sub_field('section_text');

      ?>

        	<!-- Content section 1 -->
			<div class="pg-section">
			 <div class="row">
			  <div class="small-12 large-4 columns">
				 <div class="pg-testimonial-container">
				<img class="pg-circle-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				 </div>
			  </div>
			  <div class="small-12 large-8 columns">
				 <?php echo $text; ?>
			  </div>
			 </div>
			</div>

      <?php  endif;

    endwhile;

else :

    // no layouts found
?>
</div> <!-- end #pg-inner-content -->
<?php endif; ?>

</div> <!-- end #content -->


<?php get_footer(); ?>


