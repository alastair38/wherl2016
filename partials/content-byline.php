<div class="byline">


    <?php

						$persons = get_field('resource_author');

						?>
						<?php if( $persons ): ?>

							<?php foreach( $persons as $person ): ?>
							<div class="blog-author">
									by <a href="<?php echo get_permalink( $person->ID ); ?>">
										<?php echo get_the_title( $person->ID ); ?>
									</a>
                            </div>
							<?php endforeach; ?>

						<?php endif; ?>


						<span class="blog-date"><?php the_time('F j Y') ?></span>



</div>
