<?php
/*
Template Name: Blog
*/
?>


<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="clearfix">

				    <div id="main" class="large-12 medium-12 columns clearfix" role="main">

        <header class="article-header">
		<h1 class="page-title"><?php wp_title(''); ?></h1>

	</header> <!-- end article header -->



<?php
$page_id  = get_queried_object_id();
$content = get_post_field('post_content', $page_id);
echo '<p>' . $content . '</p>';?>
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					    	<?php get_template_part( 'partials/loop', 'archive' ); ?>

					    <?php endwhile; ?>

					        <?php if (function_exists('joints_page_navi')) { ?>
					            <?php joints_page_navi(); ?>
					        <?php } else { ?>

					            <nav class="wp-prev-next">
					                <ul class="clearfix">
					        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "jointstheme")) ?></li>
					        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "jointstheme")) ?></li>
					                </ul>
					            </nav>
					        <?php } ?>

					    <?php else : ?>



					    <?php endif; ?>

				    </div> <!-- end #main -->



				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
