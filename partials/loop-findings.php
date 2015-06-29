
                        <?php

                    /*
                    *  Query posts for a relationship value.
                    *  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
                    */
$postid = get_the_ID();

                        $user_findings = get_posts(array(
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

                        <?php if( $user_findings ): ?>


                        <div class="large-12 columns clearfix">
                           <hr>
                            <h3 class="people-title">Findings</h3>
                            <?php foreach( $user_findings as $user_finding): ?>
                            <div class="large-6 columns">
                            <?php $permalink = get_permalink($user_finding->ID);?>
                            <?php $content = get_post_field('post_excerpt', $user_finding->ID);?>
                             <h3><?php echo get_the_title( $user_finding->ID ); ?></h3>

                            <p><?php echo $content;?></p>



                        <?php endforeach; ?>

                        <?php endif; ?>

                              </div>
                                                <div class="large-2 columns">
                        <?php $types = get_field('finding_type', $user_finding->ID );
                                 if( $types ): ?>


							<?php foreach( $types as $type): ?>


										<?php echo $type; ?>


							<?php endforeach; ?>
                       <?php endif; ?>
</div>
                        </div>

                        <?php wp_reset_postdata();?>
