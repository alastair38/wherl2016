<?php
/*
Template Name: Main People Landing Page
*/
?>


        <?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="clearfix">

				    <div id="main-people" class="large-12 medium-12 columns" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					    <header class="article-header">
		<h1 class="page-title"><?php echo get_the_title() . " - Academic Teams"; ?></h1>
	</header> <!-- end article header -->





					    <?php endwhile; else : ?>


					    <?php endif; ?>


       <?php

   $args = array('post_type' => 'team', 'orderby'    => 'date',  'order'      => 'ASC', 'post__not_in' => array( 49, 51 ));
   $teams = new WP_Query($args);

   if($teams->have_posts()) :
      while($teams->have_posts()) :
         $teams->the_post();
?>


          <div class="large-4 medium-6 small-12 columns end">
          <a href="<?php the_permalink();?>"><div class="people">
              <h5><?php the_title(); ?></h5>
         <div class="people-ac-logo post-<?php the_id(); ?>"><?php the_post_thumbnail('full'); ?></div>
              </div></a>
         </div>

<?php
      endwhile;

   endif;

wp_reset_query();
?>
<div class="large-4 medium-6 small-12 columns end">
    <div id="project-adviser" class="people">
    <h5>Project Adviser</h5>
    <?php the_content();?></div>
</div>


   <header class="article-header">
		<h1 class="large-12 columns page-title"><?php echo get_the_title() . " - Project Partners"; ?></h1>
	</header>

      <?php

   $args = array('post_type' => 'team', 'orderby'    => 'date',  'order'      => 'ASC', 'post__in' => array( 49, 51 ));
   $partners = new WP_Query($args);

   if($partners->have_posts()) :
      while($partners->have_posts()) :
         $partners->the_post();
?>


          <div class="large-4 medium-6 small-12 columns end">
          <a href="<?php the_permalink();?>"><div class="people">
              <h5><?php the_title(); ?></h5>
         <div class="people-logo post-<?php the_id(); ?>"><?php the_post_thumbnail('full'); ?></div>
              </div></a>
         </div>

<?php
      endwhile;

   endif;
?>



  </div> <!-- end #main -->

				</div> <!-- end #inner-content -->



			</div> <!-- end #content -->

<?php get_footer(); ?>
