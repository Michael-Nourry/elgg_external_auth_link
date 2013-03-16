<?php
	/*
     * 
     * external_auth_link Plugin
	 * Author : Michaël Nourry
     * ############################################################################
     * # Copyright 2012-2013 Nourry Michaël                                       #
     * #                                                                          #
     * # michael.nourry@crdp.ac-versailles.fr                                     #
     * #                                                                          #
     * # https://github.com/Michael-Nourry                                        #
     * #                                                                          #
     * # Licence GPL3                                                             #
     * #                                                                          #
     * #  This file is part of <<external_auth_link>>.                            #
     * #                                                                          #
     * #     <<external_auth_link>> is free software:                             #
     * #     you can redistribute it and/or modify                                #
     * #     it under the terms of the GNU General Public License as published by #
     * #     the Free Software Foundation, either version 3 of the License, or    #
     * #     (at your option) any later version.                                  #
     * #                                                                          #
     * #     <<external_auth_link>> is distributed in the hope that               #
     * #     it will be useful,                                                   #
     * #     but WITHOUT ANY WARRANTY; without even the implied warranty of       #
     * #     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the        #
     * #     GNU General Public License for more details.                         #
     * #                                                                          #
     * #     You should have received a copy of the GNU General Public License    #
     * #     along with <<external_auth_link>>.                                   #
     * #     If not, see <http://www.gnu.org/licenses/>.                          #
     * ############################################################################
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
