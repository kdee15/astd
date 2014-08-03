<article class="full news <?php print $classes; ?>" id="node-<?php print $node->nid; ?>"<?php print $attributes; ?>§>

	<p class="lead"><i class="icon-time"></i> <?php if ($submitted) { 
	         echo date( "F j, Y",$node->created);  
	   } ?> <i class="icon-tag"></i> <?php print render($content['field_blog_article_topics']); ?></p>
	
	<figure class="article-image">
		<?php print render($content['field_news_image']); ?>
	</figure>
	
	<section class="article-content">
		<?php print render($content['field_news_body']); ?>
	</section>
	
	<footer class="article-footer">
		<i class="icon-tags"></i> Tags { <?php print render($content['field_news_tags']); ?> }
	</footer>

</article>