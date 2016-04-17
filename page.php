<?php
/*
Template Name: Home
*/
?>


        <?php get_header(); ?>

			<div id="content">

				<div id="home-inner-content" class="clearfix">

				    <div id="main" class="large-12 medium-12 columns" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



<div class='slider'>
     <div class='slide' >
        <div class='slidecontent'>
            <div class="caption one"><img src="<?php the_field('logo_image'); ?>"></div>
        </div>

    </div>
    <div class='slide'>
        <div class='slidecontent'>
             <div class="caption two"><?php the_field('slide_one'); ?></div>
        </div>
    </div>
    <div class='slide'>
        <div class='slidecontent'>
             <div class="caption three"><?php the_field('slide_two'); ?></div>
             <div class="funders"><img class="funder-one" src="<?php the_field('funder_one'); ?>"><img class="funder-two" src="<?php the_field('funder_two'); ?>"></div>
        </div>
    </div>
</div>



					    <?php endwhile; else : ?>


					    <?php endif; ?>

    				</div> <!-- end #main -->


<!-- this loop gets the children of the current page, but not grandchildren-->


                	<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'exclude' => '24', 'sort_order' => 'desc', 'parent' => $post->ID ) );

	foreach( $mypages as $page ) {
		$content = $page->post_excerpt;

		$content = apply_filters( 'the_content', $content );
	?>
		<div class="large-3 columns">
		<div class="home-links <?php echo $page->post_name; ?>">
		<h5><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h5>
		<?php $content; ?></div>
		</div>
	<?php
	}
?>



<?php


                        $findings = get_posts(array(
                            'post_type' => 'finding',
                            'posts_per_page' => 3
                        ));

                        ?>

                        <?php if( $findings ): ?>
                       <div class="large-12 latest columns clearfix">
                       <h5>Latest Findings</h5>
                        <?php foreach( $findings as $finding ): ?>


                         <div class="large-4 columns end">
                             <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Findings' ) ) ); ?>"> <div class="latest-finding"><h6><?php echo get_the_title( $finding->ID ); ?></h6></div></a>
                       </div>

<?php endforeach; ?>

	<?php endif; ?>

	</div>
<div class="large-12 latest columns clearfix">
<?php


                        $blogs = get_posts(array(
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        ));

                        ?>

                        <?php if( $blogs ): ?>
                        <h5>Latest Blog Posts</h5>
                        <?php foreach( $blogs as $blog ): ?>

                        <div class="large-4 columns end">
                            <a href="<?php echo get_the_permalink( $blog->ID ); ?>"><div class="latest-blog">
                            <?php if ( has_post_thumbnail($blog->ID) ) {
echo get_the_post_thumbnail($blog->ID, 'full' );
} else { ?>
<img src="<?php echo get_template_directory_uri(); ?>/library/images/featured.png" alt="<?php the_title(); ?>" />
<?php } ?>
                            <h6><?php echo get_the_title( $blog->ID ); ?></h6></div></a>
                       </div>

<?php endforeach; ?>



						<?php endif; ?>
					</div>
<div class="large-12 latest columns clearfix">
<?php


                        $newsitems = get_posts(array(
                            'post_type' => array('news', 'events'),
                            'posts_per_page' => 3
                        ));

                        ?>

                        <?php if( $newsitems ): ?>
                        <h5>Latest News + Events</h5>
                        <?php foreach( $newsitems as $newsitem ): ?>

                        <div class="large-4 columns end">
                            <a href="<?php echo get_the_permalink( $newsitem->ID ); ?>"><div class="latest-news">

                            <?php if( get_field('event_start', $newsitem->ID) ){
                            $date = DateTime::createFromFormat('Ymd', get_field('event_start', $newsitem->ID));
                            echo 'Event - ' . $date->format('d F Y');
                            }
                            else {
                                echo 'News';
                            }
                            ?>

                            <h6><?php echo get_the_title( $newsitem->ID ); ?></h6>

                            </div></a>
                       </div>

<?php endforeach; ?>



                           </div>

						<?php endif; ?>


				</div> <!-- end #inner-content -->


	<div class="large-12 tweeting columns">




    <h5>WHERL Tweets</h5>
    <p><a class="twitter-follow-button"
  href="https://twitter.com/WHERLage"
  data-show-count="false"
  data-lang="en">
Follow @WHERLage
</a></p>
	    <a class="twitter-timeline" href="https://twitter.com/WHERLage" data-widget-id="614470817083191296" data-chrome="nofooter noheader transparent noborders" data-show-replies="false" data-tweet-limit="10">Tweets by @WHERLage</a>


	</div>

			</div> <!-- end #content -->

<?php get_footer(); ?>
