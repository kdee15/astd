<article class="grid-item event-item article-event" id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	
	<a class="link-event" href="<?php print $node_url; ?>">

		<div class="span-event">
			
			<div class="wrapper">
			
				<div class="event-top-block <?php print render($content['field_css_class']); ?>">

					<h2><?php print render($content['field_event_date']); ?></h2>
					<h4><?php print render($content['field_event_type']); ?></h4>
					<h3><?php print $title = substr($title,0,20).'...'; ?></h3>

				</div>

				<div class="event-bottom-block">

					<p><?php print render($content['field_gist']); ?></p>
					<p><?php print render($content['field_speaker']); ?></p>
					<p><?php print render($content['field_event_date']); ?></p>
					<p><?php print render($content['field_venue']); ?></p>
					<p><?php print render($content['field_event_region']); ?></p>
					<p><?php print render($content['field_event_date']); ?></p>
					<p>read more ...</p>

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

						<?php print render($content['field_introduction']); ?>

					</p>
					
				</div>

			</div>

		</div>
	</a>
	
</article>