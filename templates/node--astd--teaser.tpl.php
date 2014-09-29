<article class="event-astd article-astd" id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	
    <section class="grid-item astd-title">
    
        <h3><?php print $title; ?></h3>
    
    </section>
    <section class="grid-item astd-detail">
    
        <?php print render($content['field_event_date']); ?>
        <?php print render($content['field_venue']); ?>
    
    </section>

</article>