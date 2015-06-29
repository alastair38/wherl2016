
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
                                    'key' => 'academic_group', // name of custom field
                                    'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
                                    'compare' => 'LIKE'
                                )
                            )
                        ));

                        ?>

                        <?php if( $persons ): ?>
                        <h3 class="people-title">Team Members</h3>
                        <?php foreach( $persons as $person ): ?>
                        <div class="large-4 medium-6 small-12 columns end clearfix">

                            <div class="people-details">
                            <?php $permalink = get_permalink($person->ID);?>
                             <h3><a href="<?php echo $permalink;?>"><?php echo get_the_title( $person->ID ); ?></a></h3>
                            <?php echo get_the_post_thumbnail( $person->ID ); ?>
                            <p><?php echo the_field('work_position', $person->ID); ?></p>
                            </div>

                        </div>


                        <?php endforeach; ?>

                        <?php endif; ?>

                        <?php wp_reset_postdata();?>
