<article class="grid-item board-item article-board <?php print render($content['field_css_class']); ?>" id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	
	<div class="wrapper">
	
		<figure class="figure-board">

			<?php print render($content['field_member_photo']); ?>

		</figure>

		<h5><?php print $title; ?></h5>
		<p><?php print render($content['field_description']); ?></p>

		<a class="button more" href="<?php print $node_url; ?>">MORE</a>
		
	</div>

</article>