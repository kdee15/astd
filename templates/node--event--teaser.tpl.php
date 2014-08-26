<article class="grid-item event-item article-event <?php print render($content['field_css_class']); ?>" id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

	<h2><?php print render($content['field_event_date']); ?></h2>
	
	<span class="span-event">
								
		<div class="wrapper">

			<h4><?php print render($content['field_event_type']); ?></h4>
			<h3><?php print $title = substr($title,0,20).'...'; ?></h3>
			<p>

				<?php print render($content['field_event_date']); ?><br>
				<?php print render($content['field_venue']); ?><br>
				<?php print render($content['field_event_region']); ?><br>

			</p>

		</div>

		<div class="span-event-hover">

			<div class="wrapper">

				<figure class="figure-event">

					<span class="span-image">

						<?php print render($content['field_event_logo']); ?>

					</span>

				</figure>

				<p>

					<?php print render($content['field_description']); ?>

				</p>
				
				<a class="button more" href="<?php print $node_url; ?>">MORE</a>

			</div>

		</div>

	</span>

</article>

