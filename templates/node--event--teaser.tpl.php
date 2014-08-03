<article class="teaser post" id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

	<div class="teaser-wrapper">
    
        <figure class="article-image">
            <?php print render($content['field_event_image']); ?>
        </figure>
    
        <div class="article-content">
            <h3<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title = substr($title,0,20).'...'; ?></a></h3>
    
            <small><?php print render($content['field_event_dates']); ?></small>
            
            <?php print render($content['field_event_description']); ?>
            
            <a class="button more" href="<?php print $node_url; ?>">MORE</a>
        
        </div>    
    
    </div>

</article>