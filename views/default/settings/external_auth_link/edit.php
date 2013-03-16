<p>
	<?php echo elgg_echo('external_auth_link:settings'); ?>
	<ul><li><?php echo elgg_echo('external_auth_link:lien_text'); ?> <textarea name="params[lien_text]"><?php echo $vars['entity']->lien_text; ?></textarea></li>
	<li><?php echo elgg_echo('external_auth_link:lien_url'); ?> <textarea name="params[lien_url]"><?php echo $vars['entity']->lien_url; ?></textarea> </li>
	<li><?php echo elgg_echo('external_auth_link:secret'); ?> <textarea name="params[secret]"><?php echo $vars['entity']->secret; ?></textarea> </li>
	<li><?php echo elgg_echo('external_auth_link:timeout'); ?> <textarea name="params[timeout]"><?php echo $vars['entity']->timeout; ?></textarea> </li>
	<li><?php echo elgg_echo('external_auth_link:groupe'); ?> <textarea name="params[groupe]"><?php echo $vars['entity']->groupe; ?></textarea> </li>
	<li><?php echo elgg_echo('external_auth_link:selecteur_css'); ?> <textarea name="params[selecteur_css]"><?php echo $vars['entity']->selecteur_css; ?></textarea> </li>
	</ul>
	
</p>
