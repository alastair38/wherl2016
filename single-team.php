<?php

get_header(); ?>



			<div id="content">

				<div id="inner-content" class="clearfix">

				    <div id="single-team" class="large-12 columns first clearfix" role="main">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h1 class="peopletitle"><?php the_title(); ?></h1>

				<?php the_post_thumbnail('full', array( 'class' => 'team-logo' )); ?>

				<p id="team-excerpt"><?php the_excerpt();?></p>

				<?php endwhile; else : ?>



                <?php endif; ?>

				  <ul class="team-projects">
                            <?php

                            $projects = get_field('work_project');

                            ?>
                            <?php if( $projects ): ?>
                                <h4>Projects</h4>
                                <?php foreach( $projects as $project ): ?>

                                        <li class=""><a href="<?php echo get_permalink( $project->ID ); ?>">
                                            <?php echo get_the_title( $project->ID ); ?>
                                        </a></li>

                                <?php endforeach; ?>

                            <?php endif; ?>
                                </ul>


<?php get_template_part( 'partials/loop', 'people' ); ?>





                        </div><!-- end #main -->


				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
