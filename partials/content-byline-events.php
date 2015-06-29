

    <div class="date"><span>Date</span>
        <?php $date = DateTime::createFromFormat('Ymd', get_field('event_start'));
echo $date->format('d F Y'); ?>



   <?php if( get_field('event_address') ): ?>
                                   <span>Location</span>
                                    <?php the_field('event_address'); ?>
                                    <?php endif; ?>

    </div>
