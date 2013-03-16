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

	$english= array(
		'external_auth_link:settings' => "Details of options :<ul>
                    <li>Link text: This is displayed in the bar</li>
                    <li>URL : Destination site (http://www.monsite.com/upload?) Will eventually link : URL.n=name&m=email&k=token</li>
                    <li>Secret : The shared secret for encryption</li>
                    <li>TimeOut : Time, in seconds, the validity of the token</li>
                    <li>Group : Group with the link in the bar</li>
                    <li>CSS Selector: To place the link</li>
                    <li><b>For more links simply separate sites by \";\" in each field
                        (newline possible). For example for two links:
                        <br />- Link text: textlien1;textlien2
                        <br />- URL : http://lien1/;http://lien2/
                        <br />- Secret : secret1;secret2
                        <br />- TimeOut : 10;30
                        <br />- Group : groupe1;groupe2
                        <br />- CSS Selector:: #elgg_topbar_container_left;#tutu
                    </b></li>
                    
                    </ul>",
		'external_auth_link:lien_text' => "Link text: ",
		'external_auth_link:lien_url' => "URL : ",
		'external_auth_link:secret' => "Secret : ",
		'external_auth_link:timeout' => "TimeOut : ",
		'external_auth_link:groupe' => "Group : ",
		'external_auth_link:selecteur_css' => "CSS Selector: ",
	);
	add_translation("en",$english);
?>