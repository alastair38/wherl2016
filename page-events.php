<?php
/*
Template Name: Events
*/
?>


<?php get_header(); ?>

			<div class="events" id="content">

				<div id="inner-content" class="clearfix">

				    <div id="main" class="large-12 medium-12 columns clearfix" role="main">

        <header class="article-header">
		<h1 class="page-title"><?php wp_title(''); ?></h1>
	</header> <!-- end article header -->
		<?php
    global $wp_query, $paged;

    if( get_query_var('paged') ) {
        $paged = get_query_var('paged');
    }else if ( get_query_var('page') ) {
        $paged = get_query_var('page');
    }else{
        $paged = 1;
    }

    $wp_query = null;
    $args = array(
        'post_type' => 'finding',
        'findings_categories' => 'event',
        'orderby'    => 'meta_value_num',
	    'order'      => 'DESC',
        'meta_key'  => 'event_start',
        'posts_per_page' => 9,
        'paged' => $paged
    );
    $wp_query = new WP_Query();
    $wp_query->query( $args );

    while ($wp_query->have_posts()) : $wp_query->the_post();?>

					    	<?php get_template_part( 'partials/loop', 'events' ); ?>

					    <?php endwhile; ?>


					            <?php joints_page_navi(); ?>


					            <nav class="wp-prev-next">
					                <ul class="clearfix">
					        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "jointstheme")) ?></li>
					        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "jointstheme")) ?></li>
					                </ul>
					            </nav>




				    </div> <!-- end #main -->



				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
