<article class="grid-item board-item article-board <?php print render($content['field_css_class']); ?>" id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	
	<figure class="figure-board">

		<?php print render($content['field_member_photo']); ?>

	</figure>
	
	<h4><?php print $title = substr($title,0,20).'...'; ?></h4>
	<p><?php print render($content['field_description']); ?></p>
	
	<a class="button more" href="<?php print $node_url; ?>">MORE</a>

</article>