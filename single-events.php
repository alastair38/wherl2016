<?php get_header(); ?>



			<div id="content">

				<div id="inner-content" class="clearfix">

				    <div id="people" class="large-12 columns" role="main">
				        <div class="large-12 columns">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>









                            <div class="large-8 columns">
                            <article>
                            <h1 class="event-title"><?php the_title(); ?></h1>
                             <?php edit_post_link('Edit this content', '<p>', '</p>'); ?>
                             <?php the_content();?>

                             <ul class="findings-downloads">
							 <?php if( get_field('file_upload') ): ?>
                             <h5><strong>Accompanying Files</strong></h5>
                             <li><a href="<?php the_field( 'file_upload' ); ?>" target="_blank" title="Download <?php the_field( 'file_upload' ); ?>">
										Click to download event details <i class="fi-download"></i>
									</a></li>
                            <?php endif; ?>

                            <?php if( get_field('file_uploadb') ): ?>
                             <li><a href="<?php the_field( 'file_uploadb' ); ?>" target="_blank" title="Download <?php the_field( 'file_upload' ); ?>">
										Click to download event details <i class="fi-download"></i>
									</a></li>
                            <?php endif; ?>

                            <?php if( get_field('file_uploadc') ): ?>
                             <li><a href="<?php the_field( 'file_uploadc' ); ?>" target="_blank" title="Download <?php the_field( 'file_upload' ); ?>">
										Click to download event details <i class="fi-download"></i>
									</a></li>
                            <?php endif; ?>

                            <?php if( get_field('external_link') ): ?>
                             <li><a href="<?php the_field( 'external_link' ); ?>" target="_blank" title="This will take you to an external website">
										Follow this link for more information <i class="fi-info"></i>
									</a></li>
                            <?php endif; ?>

                            </ul>

				<?php endwhile; else : ?>

                <?php endif; ?>


		<?php get_template_part( 'partials/content', 'share' ); ?>

                              <?php $key = finding_event;?>
                                 <?php get_template_part( 'partials/loop', 'findings' ); ?>
                                  </article>
                            </div>
                            <div id="contact" class="large-4 small-12 columns clearfix">

                            <div class="contact-list">Event Details
</div>

                            <div class="map">


                            <?php

$location = get_field('event_map');

                             ?>


                                <a href="http://maps.google.co.uk/maps/place/<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>/@<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>,15z" target="_blank" title="View map full screen" class="show-for-large-only"><img src="https://maps.googleapis.com/maps/api/staticmap?zoom=13&size=600x300&scale=2&maptype=roadmap
          &markers=color:green%7C<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>"></a>

                             <a href="geo:<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>;u=35" class="hide-for-large-only"><img src="https://maps.googleapis.com/maps/api/staticmap?zoom=15&size=600x300&scale=2&maptype=roadmap
          &markers=color:green%7C<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>"></a>


                             </div>
                             <div class="event_details">
                              <?php $date = DateTime::createFromFormat('Ymd', get_field('event_start'));
echo '<i class="fi-calendar" title="Event Date"></i> ' . $date->format('d F Y'); ?>
                           <?php if( get_field('event_finish') ): ?>
                            <?php $date = DateTime::createFromFormat('Ymd', get_field('event_finish'));
echo ' - ' . $date->format('d F Y'); ?>
                             <?php endif; ?>

                             <?php if( get_field('event_address') ): ?>
                                    <p><i class="fi-marker" title="Event Location"> </i><?php the_field('event_address'); ?></p>
                                    <?php endif; ?>
                            <?php if( get_field('event_time') ){
        echo '<p><i class="fi-clock" title="Event Time"></i> ' . get_field('event_time') . '</p>';
} else {
    echo '<p></p>';
}
?>
</div>
                            </div>

                        </div>

                    </div><!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
