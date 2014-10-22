<article class="grid-item event-item article-event" id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	
	<a class="link-event" href="<?php print $node_url; ?>">

		<div class="span-event">
			
			<div class="wrapper">
			
				<div class="event-top-block <?php print render($content['field_css_class']); ?>">

					<h2>
                        <?php echo $content['field_conference_date']['#items'][0]['value']?>
                    </h2>
                    
					<h4><?php print render($content['field_conference_type']); ?></h4>
					<h3><?php print ($title); ?></h3>
                    <h5><?php print render($content['field_speaker']); ?></h5>

				</div>

				<div class="event-bottom-block">

					<p><?php print render($content['field_venue']); ?></p>
                    <p>
                        
                        <?php echo $content['field_conference_date']['#items'][0]['value']?> 
                        
                    </p>
					<span class="read-more">read more ...</span>

				</div>
				
			</div>

			<div class="span-event-hover">

				<div class="wrapper">

					<figure class="figure-event">

						<span class="span-image">

							<?php print render($content['field_event_logo']); ?>

						</span>

					</figure>

					<p>

						<?php print render($content['field_conf_intro']); ?>
						<?php print render($content['field_introduction']); ?>

					</p>
					
				</div>

			</div>

		</div>
	</a>
	
</article>