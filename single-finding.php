<?php get_header(); ?>



			<div id="content">

				<div id="inner-content" class="clearfix">

				    <div id="people" class="large-12 columns" role="main">
				        <div class="large-12 columns">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>









                            <div class="large-7 medium-9 small-12 columns">
                            <article>
                            <h1 class="event-title"><?php the_title(); ?></h1>
                            <?php edit_post_link('Edit this content', '<p>', '</p>'); ?>

                            <?php if( get_field('findings_date') ): ?>
                            <p><?php $date = DateTime::createFromFormat('Ymd', get_field('findings_date'));
echo '<i class="fi-calendar" title="Event Date"></i> ' . $date->format('d F Y'); ?>
                             <?php endif; ?>
<?php
                                                         global $post;
$category_id = get_term_by('slug', 'finding', 'findings_categories');

$terms = get_the_terms($post->ID, 'findings_categories');
if ($terms) {
foreach ($terms as $term) {
    if($term->parent === $category_id->term_id) {
        echo '<a href="' . get_term_link($term, 'findings_categories') . '">' . $term->name . '</a>, ';
    }
}
echo '</p>';
};?>
                             <?php the_content();?>

                             <ul class="findings-downloads">
							 <?php if( get_field('file_upload') ): ?>
                             <h5><strong>Accompanying Files</strong></h5>
                             <li><a href="<?php the_field( 'file_upload' ); ?>" target="_blank" title="Download <?php the_field( 'file_upload' ); ?>">
										Click to download presentation details <i class="fi-download"></i>
									</a></li>
                            <?php endif; ?>

                            <?php if( get_field('file_uploadb') ): ?>
                             <li><a href="<?php the_field( 'file_uploadb' ); ?>" target="_blank" title="Download <?php the_field( 'file_upload' ); ?>">
										Click to download presentation details <i class="fi-download"></i>
									</a></li>
                            <?php endif; ?>

                            <?php if( get_field('file_uploadc') ): ?>
                             <li><a href="<?php the_field( 'file_uploadc' ); ?>" target="_blank" title="Download <?php the_field( 'file_upload' ); ?>">
										Click to download presentation details <i class="fi-download"></i>
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
                                </article>
 <div class="map">
                            <?php

$location = get_field('event_map');
if ($location['lng']){
                             ?>

                                <a href="http://maps.google.co.uk/maps/place/<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>/@<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>,15z" target="_blank" title="View map full screen" class="show-for-large-only"><img src="https://maps.googleapis.com/maps/api/staticmap?zoom=13&size=600x300&scale=2&maptype=roadmap
          &markers=color:green%7C<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>"></a>

                             <a href="geo:<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>;u=35" class="hide-for-large-only"><img src="https://maps.googleapis.com/maps/api/staticmap?zoom=15&size=600x300&scale=2&maptype=roadmap
          &markers=color:green%7C<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>"></a>

<?php } ?>
     </div>

                            </div>
                            <div id="details" class="large-5 medium-3 small-12 columns clearfix">
<h5 class="contact-list">Further Information
</h5>


                             <ul class="findings-authors">

<!-- Get the child categories of Finding that the post is assigned to eg: Presentations, Policy Output, Publications -->


<!-- Get the authors assigned to the finding -->

                            <?php $authors = get_field('resource_author' ); ?>

							<h5>Authors</h5>


							<?php
                            $authorstr = '';
                            foreach( $authors as $author):
                            $authorstr .= '<li><a href="' . get_permalink( $author->ID ) . '">' . get_the_title( $author->ID ).'</a></li>' . ', ';


                           endforeach;
      ?>

      <?php echo rtrim($authorstr, ', '); ?>


  </ul>

        <?php if( get_field('additional_authors') ): ?>
                             <p>[Additional Authors: <?php the_field( 'additional_authors' ); ?>]</p>
                            <?php endif; ?>

<hr>
<!-- Get the projects assigned to the finding -->

                             <?php $projects = get_field('work_project');
                                 if( $projects ): ?>

             <ul class="findings-authors"><h5>Wherl Project</h5>


                 <?php
                            $projectstr = '';
                            foreach( $projects as $project):
                            $projectstr .= '<li><a href="' . get_permalink( $project ) . '">' . get_the_title( $project ).'</a></li>' . ', ';


                           endforeach;
      ?>

      <?php echo rtrim($projectstr, ', '); ?>


         </ul>
                            <hr>

                  <?php endif; ?>


               <?php if (has_term( 'policy-outputs', 'findings_categories' )) {
                            echo '<div id="policyDetails"><h5>Publication Details</h5>';
                            if( get_field('date_of_publication') ) {
                            $pubDate = DateTime::createFromFormat('Ymd', get_field('date_of_publication'));
                            echo '<p>Published on ' . $pubDate->format('d F Y') ;
                            }
                            $published = get_field('published_by');
                            $publishedLoc = ' (' . get_field('place_of_publication') . ')';
                            if( $published ) {
                            echo ' by ' . $published . $publishedLoc . '</p>';
                            }
                            echo '</div><hr>';
                                 }?>

            <?php if (has_term( 'publications', 'findings_categories' )) {
                            echo '<div id="pubDetails"><h5>Publication Details</h5><span>';
                            $journal = get_field('journal_name');
                            if( $journal ) {
                            echo '<em> ' . $journal . '</em>.';
                            }
                            $volume = get_field('volume');
                            if( $volume ) {
                            echo ' Volume ' . $volume . '.';
                            }
                            $issue = get_field('issue');
                            if( $issue ) {
                            echo ' Issue ' . $issue . '.';
                            }
                            $pgnos = get_field('page_numbers');
                            if( $pgnos ) {
                            echo ' pp' . $pgnos . '.';
                            }
                            $doi = get_field('doi');
                            if( $doi ) {
                            echo ' DOI: ' . $doi . '.';
                            }
                            $isbn = get_field('isbn');
                            if( $isbn ) {
                            echo '<p> ISBN: ' . $isbn . '.</p>';
                            }
                            echo '</span>';
                            $publisher = get_field('publisher');
                            if( $publisher ) {
                            echo '<span>Published by ' . $publisher;
                            }
                            $year = get_field('year');
                            if( $year ) {
                            echo ' (' . $year . ')</span>' ;
                            }
                             $link = get_field('publication_link');
                            if( $link ) {
                            echo '<span><a href="' . $link . '" id="moreInfo">More Info</a></span>';
                            }
                            $bookTitle = get_field('book_title');
                            if( $bookTitle ) {
                            echo '<span>in <em>' . $bookTitle . '</em></span>';
                            }
                            $editors = get_field('editors');
                            if( $editors ) {
                            echo '<p>Editors: ' . $editors . '</p>';
                            }
                           echo '</div><hr>';
                                 }?>


                             <?php $events = get_field('finding_event');
                            $date = DateTime::createFromFormat('Ymd', get_field('findings_date'));
                    $date = ' (' . $date->format('d F Y') . ')';
                                 if( $events ): ?>

             <ul class="findings-authors"><h5>Presented At</h5>


                 <?php
                            foreach( $events as $event):
                            echo '<li><a href="' . get_permalink( $event ) . '">' . get_the_title( $event ).'</a>' . $date . '</li>';


                           endforeach;
      ?>



         </ul>
                                <?php endif; ?>


                            </div>

                        </div>

                    </div><!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
