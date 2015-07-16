<div class="byline">


    <?php

						$persons = get_field('resource_author');

						?>
						<?php if( $persons ): ?>
                            <div class="blog-author">Authors:
							<?php foreach( $persons as $person ): ?>

									<a href="<?php echo get_permalink( $person->ID ); ?>">
										<?php echo get_the_title( $person->ID ); ?>
									</a>

							<?php endforeach; ?>
                             </div>
						<?php endif; ?>


						<span class="blog-date"><?php the_time('F j Y') ?></span>



</div>
