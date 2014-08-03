<article class="full memorial <?php print $classes; ?>" id="node-<?php print $node->nid; ?>"<?php print $attributes; ?>§>

	<p class="lead">Passed away <strong><?php print render($content['field_memorial_died_date']); ?></strong></p>
	
	<figure class="article-image">
		<?php print render($content['field_memorial_image']); ?>
	</figure>
	
	<section class="article-content">
		<?php print render($content['field_memorial_body']); ?>
	</section>
	
	<footer class="article-footer">
		<i class="icon-tags"></i> Tags { <?php print render($content['field_memorial_tags']); ?> }
	</footer>

</article>