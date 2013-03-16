<?php
	/*
     * external_auth_link Plugin
	 * Author : Michaël Nourry
	 */

	function externalauthlink_init()
	{
		global $CONFIG;
		$CONFIG->externalauthlink_config = array(
			'lien_text' => true,
			'lien_url' => true,
			'secret' => true,
			'timeout' => true,
			'groupe' => true,
			'selecteur_css' => true
		);

	}
	
	// Initialise
	register_elgg_event_handler('init','system','externalauthlink_init');
	

?>
