<?php
/* Template Name: Repeating Rows */
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


<?php if( have_rows('section_row') ): ?>
	<div id="inner-about-content">

	<?php while( have_rows('section_row') ): the_row(); 

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
			
		
    <?php endwhile; ?>

 </div> <!-- end #pg-inner-content -->
<?php  endif; ?>
</div> <!-- end #pg-about-content -->

<?php get_footer(); ?>