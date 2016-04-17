
                        <?php

                    /*
                    *  Query posts for a relationship value.
                    *  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
                    */
$postid = get_the_ID();

                        $findings = get_posts(array(
                            'post_type' => 'finding',
                            'posts_per_page' => 10,
                            'meta_query' => array(
                                array(
                                    'key' => $key, // name of custom field
                                    'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
                                    'compare' => 'LIKE'
                                )
                            )
                        ));

                        ?>

                        <?php if( $findings ): ?>
<div class="large-12 columns">
    <h3 class="people-title">Findings</h3>
                        <?php foreach( $findings as $finding ): ?>
    <div class="archive-findings clearfix">
        <article id="post-<?php the_ID(); ?>" class="" role="article">

                             <div class="columns">

                             <ul class="findings-authors">

                              <?php $types = get_field('finding_type', $finding->ID );
                                 if( $types ): ?>

							<?php foreach( $types as $type): ?>

										<li class="findings-type"><?php echo $type; ?></li>

							<?php endforeach; ?>

							 <?php $authors = get_field('resource_author', $finding->ID );
                                 if( $authors ): ?>

							<span>Submitted by </span>
							<?php foreach( $authors as $author): ?>

									<li><a href="<?php echo get_permalink( $author->ID ); ?>" title="View <?php echo get_the_title( $author->ID ); ?>'s Profile">
										<?php echo get_the_title( $author->ID ); ?>
									</a></li>

							<?php endforeach; ?>

						<?php endif; ?>

						<?php endif; ?>





                            </ul>

                             <h6><a href="<?php echo get_permalink( $finding->ID ); ?>" title="View <?php echo get_the_title( $finding->ID ); ?>"><?php echo get_the_title( $finding->ID ); ?></a></h6>

                                 </div>
                                  <div class="columns">
                                <?php $projects = get_field('work_project', $finding->ID);
                                 if( $projects ): ?>

							<ul class="findings-authors"><span>Assigned to</span>
							<?php foreach( $projects as $project): ?>

										<li class="findings-project"><a href="<?php echo get_permalink( $project->ID ); ?>" title="View the <?php echo get_the_title($project->ID  ); ?> project page">
										<?php echo get_the_title( $project->ID ); ?>
									</a></li>

							<?php endforeach; ?>

                                     </ul>
						<?php endif; ?>


                           <ul class="findings-downloads">
							<?php if( get_field('file_upload', $finding->ID) ): ?>
                             <li><a href="<?php the_field( 'file_upload', $finding->ID ); ?>" target="_blank" title="Download <?php the_field( 'file_upload' ); ?>">
									Click to download findings	<i class="fi-download"></i>
									</a></li>
                            <?php endif; ?>
                            <?php if( get_field('file_uploadb', $finding->ID) ): ?>
                             <li><a href="<?php the_field( 'file_uploadb', $finding->ID ); ?>" target="_blank" title="Download <?php the_field( 'file_upload' ); ?>">
									Click to download findings	<i class="fi-download"></i>
									</a></li>
                            <?php endif; ?>
                            <?php if( get_field('file_uploadc', $finding->ID) ): ?>
                             <li><a href="<?php the_field( 'file_uploadc', $finding->ID ); ?>" target="_blank" title="Download <?php the_field( 'file_upload' ); ?>">
									Click to download findings	<i class="fi-download"></i>
									</a></li>
                            <?php endif; ?>
                            <?php if( get_field('external_link', $finding->ID) ): ?>
                             <li><a href="<?php the_field( 'external_link', $finding->ID ); ?>" target="_blank" title="This will take you to an external website">
                                 View More Information <i class="fi-info"></i>
									</a></li>
                            <?php endif; ?>



                                     </ul>

                            </div>

                               <div class="large-12 columns">

                            </div>




                        </div>


                        <?php endforeach; ?>

                        <?php endif; ?>
</div>
