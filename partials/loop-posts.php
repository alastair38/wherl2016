
                        <?php

                    /*
                    *  Query posts for a relationship value.
                    *  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
                    */
$postid = get_the_ID();

                        $blog_posts = get_posts(array(
                            'post_type' => 'post',
                            'posts_per_page' => 10,
                            'meta_query' => array(
                                array(
                                    'key' => 'resource_author', // name of custom field
                                    'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
                                    'compare' => 'LIKE'
                                )
                            )
                        ));

                        ?>

                        <?php if( $blog_posts ): ?>


                        <div class="large-12 columns clearfix">
                           <hr>

                            <h3 class="people-title">Blog Posts</h3>
                            <?php foreach( $blog_posts as $blog_post): ?>

                           <div class="blog-article large-9 medium-8 columns">
                            <?php $permalink = get_permalink($blog_post->ID);?>
                            <?php $content = get_post_field('post_content', $blog_post->ID);?>
                             <h3><a href="<?php echo $permalink;?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo get_the_title( $blog_post->ID ); ?></a></h3>

<span class="blog-byline">

	<?php the_time('F j Y') ?></span>

    <section class="blog-content clearfix" itemprop="articleBody">
		<?php echo wp_trim_words($content, 55, '<a href="'. $permalink .'"> ...Read More &raquo;</a>'); ?>
	</section> <!-- end article section -->



                            </div>
                            <div class="archive-thumbnail large-3 medium-4 columns end">
        <?php if ( has_post_thumbnail($blog_post->ID) ) {
echo get_the_post_thumbnail($blog_post->ID, 'full' );
} else { ?>
<img src="<?php echo get_template_directory_uri(); ?>/library/images/featured.png" alt="<?php the_title(); ?>" />
<?php } ?>

    </div>



                        <?php endforeach; ?>
              </div>
                        <?php endif; ?>

                        <?php wp_reset_postdata();?>
