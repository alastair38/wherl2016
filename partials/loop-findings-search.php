
<div class="large-6 medium-6 columns clearfix end">

     <div class="archive-findings columns">
    <article id="post-<?php the_ID(); ?>" class="columns" role="article">



<header>
 <h3><?php echo '<a href="' . get_permalink( $finding->ID ) . '">' . get_the_title( $finding->ID ) . '</a>'; ?></h3>
 <?php if( get_field('findings_date') ): ?>
                            <p><?php $date = DateTime::createFromFormat('Ymd', get_field('findings_date'));
echo 'Posted on ' . $date->format('d F Y') . ' in '; ?>
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


</header>

 <!-- check to see whether the post is categorised as a 'finding'. If so, output findings fields -->

<?php // if (has_term( 'finding', 'findings_categories' )) {?>

 <div id="details" class="columns" style="background: whitesmoke;" >
     <h3>Quick Overview</h3>
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




						<?php // endif; ?>

  </ul>

<!-- Get the projects assigned to the finding -->

                             <?php $projects = get_field('findings_project');
                                 if( $projects ): ?>

             <ul class="findings-authors"><h5>Wherl Project</h5>


                 <?php
                            $projectstr = '';
                            foreach( $projects as $project):
                            $projectstr .= '<li><a href="' . get_permalink( $project ) . '">' . get_the_title( $project ).'</a></li>' . ', ';


                           endforeach;
      ?>

      <?php echo rtrim($projectstr, ', '); ?>




                  <?php endif; ?>

                                     </ul>

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

<?php if( get_field('conference_name') ): ?>
              <?php $date = DateTime::createFromFormat('Ymd', get_field('findings_date'));
                    $date = ' (' . $date->format('d F Y') . ')'; ?>
             <p><em>This finding was presented at the <strong><?php echo get_field('conference_name') .  $date ;?></strong></em></p>
                            <?php endif; ?>


                            </div>



    </article> <!-- end article -->
        <?php echo '<a href="' . get_permalink( $finding->ID ) . '" class="details"> View Details </a>'; ?>
</div>

</div>
