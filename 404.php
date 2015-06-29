    <?php get_header(); ?>

			<div id="content" class="single-blog">

				<div id="inner-content" class=" row clearfix">


					 <div id="single-latest" class="large-12 small-12 columns columns" role="aside">

      <img src="http://localhost/wherl/wp-content/uploads/2014/09/inline-Wherl-Logo.png">
      <p>This maybe isn't what you were expecting. Never mind, welcome to the Wherl website and could we suggest some of our latest content (eyes down).</p>

      <?php


                        $blogs = get_posts(array(
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        ));

                        ?>

                        <?php if( $blogs ): ?>

                       <h4>Latest Blog Posts</h4>
                        <?php foreach( $blogs as $blog ): ?>


                         <div>
                             <h6><a href="<?php echo get_the_permalink( $blog->ID ); ?>"><?php echo get_the_title( $blog->ID ); ?></a></h6>
                       </div>

<?php endforeach; ?>

	<?php endif; ?>
      <?php


                        $findings = get_posts(array(
                            'post_type' => 'finding',
                            'posts_per_page' => 3
                        ));

                        ?>

                        <?php if( $findings ): ?>
                        <hr>
                       <h4>Latest Findings</h4>
                        <?php foreach( $findings as $finding ): ?>


                         <div>
                             <h6><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Findings' ) ) ); ?>"><?php echo get_the_title( $finding->ID ); ?></a></h6>
                       </div>

<?php endforeach; ?>

	<?php endif; ?>

	<?php


                        $newsitems = get_posts(array(
                            'post_type' => 'news',
                            'posts_per_page' => 3
                        ));

                        ?>

                        <?php if( $newsitems ): ?>
                        <hr>
                        <h4>Latest News</h4>
                        <?php foreach( $newsitems as $newsitem ): ?>

                        <div>
                            <h6><a href="<?php echo get_the_permalink( $newsitem->ID ); ?>"><?php echo get_the_title( $newsitem->ID ); ?></a></h6>
                       </div>

<?php endforeach; ?>





						<?php endif; ?>

       <?php


                        $events = get_posts(array(
                            'post_type' => 'events',
                            'posts_per_page' => 3
                        ));

                        ?>

                        <?php if( $events ): ?>
                        <hr>
                        <h4>Latest Events</h4>
                        <?php foreach( $events as $event ): ?>

                        <div>
                            <h6><a href="<?php echo get_the_permalink( $event->ID ); ?>"><?php echo get_the_title( $event->ID ); ?></a></h6>
                       </div>

<?php endforeach; ?>





						<?php endif; ?>


    </div>


				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
