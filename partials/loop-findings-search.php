

    <article id="post-<?php the_ID(); ?>" class="" role="article">



<header>
 <h3><?php echo '<a href="' . get_permalink( $finding->ID ) . '">' . get_the_title( $finding->ID ) . '</a>'; ?></h3>

 <?php $events = get_field('finding_event');
                           $date = DateTime::createFromFormat('Ymd', get_field('findings_date'));
                   $date = ' (' . $date->format('d F Y') . ')';
                                if( $events ): ?>


                <?php
                           foreach( $events as $event):
                           echo '<p><em>This finding was presented at <a href="' . get_permalink( $event ) . '">' . get_the_title( $event ).'</a>' . $date . '</em></p>';


                          endforeach;
     ?>


                               <?php endif; ?>

<?php echo get_the_term_list( $post->ID, 'findings_categories', ' ', ', ', '' ); ?>
</header>

 <!-- check to see whether the post is categorised as a 'finding'. If so, output findings fields -->

<?php // if (has_term( 'finding', 'findings_categories' )) {?>

<div id="details" class="columns" >
  <!-- <ul class="findings-authors">

<!-- Get the child categories of Finding that the post is assigned to eg: Presentations, Policy Output, Publications
 Get the authors assigned to the finding

                            <?php $authors = get_field('resource_author' ); ?>

							<h5>Authors</h5>


							<?php
                            $authorstr = '';
                            foreach( $authors as $author):
                            $authorstr .= '<li><a href="' . get_permalink( $author->ID ) . '">' . get_the_title( $author->ID ).'</a></li>' . ', ';


                           endforeach;
      ?>

      <?php echo rtrim($authorstr, ', '); ?>




						<?php // endif; ?>

  </ul> -->

<!-- Get the projects assigned to the finding -->

                             <!-- <?php $projects = get_field('work_project');
                                 if( $projects ): ?>

             <ul class="findings-authors"><h5>Wherl Project</h5>


                 <?php
                            $projectstr = '';
                            foreach( $projects as $project):
                            $projectstr .= '<li><a href="' . get_permalink( $project->ID ) . '">' . get_the_title( $project->ID ).'</a></li>' . ', ';


                           endforeach;
      ?>

      <?php echo rtrim($projectstr, ', '); ?>




                  <?php endif; ?>

                                     </ul> -->

<?php // }?>

<!-- end of finding term conditional tag -->


             <?php if (has_term( 'policy-outputs', 'findings_categories' )) {
                            echo '<h5>Publication Details</h5>';
                            if( get_field('date_of_publication') ) {
                            $pubDate = DateTime::createFromFormat('Ymd', get_field('date_of_publication'));
                            echo '<p>Published on ' . $pubDate->format('d F Y') ;
                            }
                            $published = get_field('published_by');
                            $publishedLoc = ' (' . get_field('place_of_publication') . ')';
                            if( $published ) {
                            echo ' by ' . $published . $publishedLoc . '</p>';
                            }
                                 }?>
             <?php if (has_term( 'publications', 'findings_categories' )) {
                            echo '<h5>Publication Details</h5>';
                            $journal = get_field('journal_name');
                            if( $journal ) {
                            echo '<span><em> ' . $journal . '</em>.</span>';
                            }
                            $volume = get_field('volume');
                            if( $volume ) {
                            echo '<span> Volume ' . $volume . '.</span>';
                            }
                            $issue = get_field('issue');
                            if( $issue ) {
                            echo '<span> Issue ' . $issue . '.</span>';
                            }
                            $pgnos = get_field('page_numbers');
                            if( $pgnos ) {
                            echo '<span> pp' . $pgnos . '.</span>';
                            }
                            $doi = get_field('doi');
                            if( $doi ) {
                            echo '<span> DOI: ' . $doi . '.</span>';
                            }
                            $isbn = get_field('isbn');
                            if( $isbn ) {
                            echo '<p> ISBN: ' . $isbn . '.</p>';
                            }

                                 }?>




                            </div>


        <?php echo '<a href="' . get_permalink( $finding->ID ) . '" class="button"> View Details </a>'; ?>

          </article> <!-- end article -->
