
    <article id="post-<?php the_ID(); ?>" class="columns" role="article">



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



        <?php echo '<a href="' . get_permalink( $finding->ID ) . '" class="button"> View Details </a>'; ?>

          </article> <!-- end article -->
