
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


                        <div id="related_findings" class="large-12 columns clearfix">
                            <h4>Presented Findings</h4>
                            <?php foreach( $user_findings as $user_finding): ?>

                            <?php $permalink = get_permalink($user_finding->ID);
                            $authors = get_field('resource_author', $user_finding->ID );
                            ?>
                            <?php $content = get_post_field('post_content', $user_finding->ID);?>
                                <h5><a href="<?php echo $permalink; ?>" title="Go to <?php echo get_the_title( $user_finding->ID ); ?>"><?php echo get_the_title( $user_finding->ID ); ?></a></h5>
                            <ul class="findings-authors">
                            <li>Authors: </li>
                            <?php foreach( $authors as $author):
                            echo '<li><a href="' . get_permalink( $author->ID ) . '">' . get_the_title( $author->ID ).'</a></li>' . ', ';?>
                            <?php endforeach; ?>
                            </ul>
                        <?php endforeach; ?>

                        <?php endif; ?>

<!-- Get the child categories of Finding that the post is assigned to eg: Presentations, Policy Output, Publications -->


<!-- Get the authors assigned to the finding -->


  <hr>
                        </div>

                        <?php wp_reset_postdata();?>
