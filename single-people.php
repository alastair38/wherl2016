<?php get_header(); ?>



			<div id="content">

				<div id="inner-content" class="clearfix">

				    <div id="people" class="large-12 columns" role="main">
				        <div class="large-12 columns">

                            <div class="large-9 person-details columns">
                            <h1><?php the_title(); ?></h1>

                            <article>
                            <div class="work-details">
                                <ul>
                                    <li id="role"><?php the_field('work_position'); ?></li>

                                </ul>

                          <ul class="">
                            <?php

                            $teams = get_field('academic_group');

                            ?>
                            <?php if( $teams ): ?>
                                <label>Team</label>
                                <?php foreach( $teams as $team ): ?>

                                        <li><a href="<?php echo get_permalink( $team->ID ); ?>">
                                            <?php echo get_the_title( $team->ID ); ?>
                                        </a></li>

                                <?php endforeach; ?>

                            <?php endif; ?>
                            <?php

                            $projects = get_field('work_project');

                            ?>
                            <?php if( $projects ): ?>
                                <label>Project</label>
                                <?php foreach( $projects as $project ): ?>

                                        <li><a href="<?php echo get_permalink( $project->ID ); ?>">
                                            <?php echo get_the_title( $project->ID ); ?>
                                        </a></li>

                                <?php endforeach; ?>

                            <?php endif; ?>
                               <?php if( get_field('address') ): ?>
                                    <label>Address</label>
                                    <li><?php the_field('address'); ?></li>
                                    <?php endif; ?>
                                </ul>
<?php
if ( is_user_logged_in() ) {;?>
                                 <div class="email"><?php edit_post_link('Edit Your Profile'); ?></div>
                               <?php }
                                ?>
                             </div>
                            <div><?php the_field('biography'); ?></div>
                           </article>
                            </div>
                            <div id="contact" class="large-3 small-12 columns clearfix">
                            <?php the_post_thumbnail('full'); ?>


                            <?php if( get_field('email') ): ?>
                                <div class="email"><i class="fi-mail"></i><a href="mailto:<?php the_field('email'); ?>" target="_blank">Email</a></div>
                            <?php endif; ?>
                            <?php if( get_field('twitter') ): ?>
                                <div class="twitter"><i class="fi-social-twitter"></i><a href="<?php the_field('twitter'); ?>" target="_blank">Twitter</a></div>
                            <?php endif; ?>
                            <?php if( get_field('linkedin') ): ?>
                                <div class="linkedin"><i class="fi-social-linkedin"></i><a href="<?php the_field('linkedin'); ?>" target="_blank">LinkedIn</a></div>
                            <?php endif; ?>
                            <?php if( get_field('phone_landline') ): ?>
                                <div class="phone"><i class="fi-telephone"></i><?php the_field('phone_landline'); ?></div>
                            <?php endif; ?>
                            <?php if( get_field('website') ): ?>
                                <div class="web"><i class="fi-web"></i><a href="<?php the_field('website'); ?>" target="_blank">Website</a></div>
                            <?php endif; ?>



                            </div>

                        </div>


<?php get_template_part( 'partials/loop', 'posts' ); ?>


<?php $key = resource_author;?>

<?php get_template_part( 'partials/loop', 'finding' ); ?>




                        </div><!-- end #main -->


				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
