<?php


get_header(); ?>



			<div id="content">

				<div id="inner-content" class="clearfix">

				    <div id="single-project" class="large-12 columns first clearfix" role="main">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


				<div class="large-8 columns">
				<h1 class=""><?php the_title(); ?></h1>
				<?php the_content();?>

				<?php endwhile; else : ?>



                <?php endif; ?>

				</div>
                <div id="project-team" class="large-4 columns">
                        <?php

                    /*
                    *  Query posts for a relationship value.
                    *  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
                    */
$postid = get_the_ID();

                        $persons = get_posts(array(
                            'post_type' => 'people',
                            'posts_per_page' => 10,
                            'orderby'    => 'date',
	                        'order'      => 'ASC',
                            'meta_query' => array(
                                array(
                                    'key' => 'work_project', // name of custom field
                                    'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
                                    'compare' => 'LIKE'
                                )
                            )
                        ));

                        ?>

                        <?php if( $persons ): ?>
                        <h3 class="people-title">Team Members</h3>
                        <?php foreach( $persons as $person ): ?>
                        <div class="large-12 columns project-members clearfix">


                            <?php $permalink = get_permalink($person->ID);?>
                           <?php echo get_the_post_thumbnail( $person->ID ); ?>
                             <a href="<?php echo $permalink;?>"><?php echo get_the_title( $person->ID ); ?></a>



                        </div>


                        <?php endforeach; ?>

                        <?php endif; ?>

                        <?php wp_reset_postdata();?>



                        </div>

 <div id="related-findings" class="large-12 columns">
<?php $key = work_project;?>

<?php get_template_part( 'partials/loop', 'finding' ); ?>

</div>

                        </div><!-- end #main -->


				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
