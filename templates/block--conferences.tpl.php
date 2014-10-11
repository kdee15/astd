<?php

/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: An ID for the block, unique within each module.
 * - $block->region: The block region embedding the current block.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user
 *     module is responsible for handling the default user navigation block. In
 *     that case the class would be 'block-user'.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $block_html_id: A valid HTML ID and guaranteed unique.
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>


<article class="grid-item event-item article-event" id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	
	<a class="link-event" href="<?php print $node_url; ?>">

		<div class="span-event">
			
			<div class="wrapper">
			
				<div class="event-top-block <?php print render($content['field_css_class']); ?>">

					<h2>
                        <?php print render($content['field_conference_date']); ?>
                        <?php print render($content['field_event_rsvp']); ?>
						
                    </h2>
                    <p>HUH!!!???!?!?!?!?</p>
					<h4><?php print render($content['field_event_type']); ?></h4>
					<h3><?php print $title = substr($title,0,20).'...'; ?></h3>

				</div>

				<div class="event-bottom-block">

					<p><?php print render($content['field_gist']); ?></p>
					<p><?php print render($content['field_speaker']); ?></p>
					<p><?php print render($content['field_venue']); ?></p>
					<p><?php print render($content['field_event_region']); ?></p>
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

						<?php print render($content['field_conf_intro']); ?>
						<?php print render($content['field_introduction']); ?>

					</p>
					
				</div>

			</div>

		</div>
	</a>
	
</article>
