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

	$french= array(
		'external_auth_link:settings' => "Détails des options :<ul>
                    <li>Texte du lien : Ce qui s'affiche dans la barre</li>
                    <li>URL : Site de destination (http://www.monsite.com/upload?) au final le lien sera : URL.n=name&m=email&k=token</li>
                    <li>Secret : Le secret partagé pour le cryptage</li>
                    <li>TimeOut : Durée, en seconde, de la validité du token</li>
                    <li>Groupe : Groupe ayant le lien dans la bar</li>
                    <li>Sélecteur CSS : Pour pouvoir placer le lien</li>
                    <li><b>Pour avoir plusieurs liens il suffit de séparer les sites par un \";\" dans chaque champs
                        (saut de ligne possible). Par exemple pour deux liens :
                        <br />- Texte du lien : textlien1;textlien2
                        <br />- URL : http://lien1/;http://lien2/
                        <br />- Secret : secret1;secret2
                        <br />- TimeOut : 10;30
                        <br />- Groupe : groupe1;groupe2
                        <br />- Sélecteur CSS : #elgg_topbar_container_left;#tutu
                    </b></li>
                    
                    </ul>",
		'external_auth_link:lien_text' => "Texte du lien : ",
		'external_auth_link:lien_url' => "URL : ",
		'external_auth_link:secret' => "Secret : ",
		'external_auth_link:timeout' => "TimeOut : ",
		'external_auth_link:groupe' => "Groupe : ",
		'external_auth_link:selecteur_css' => "Sélecteur CSS : ",
	);
	add_translation("fr",$french);
?>