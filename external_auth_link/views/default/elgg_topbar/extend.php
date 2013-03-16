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


$secret = preg_replace("/(\r\n|\n|\r)/", "",get_plugin_setting('secret', 'external_auth_link'));
$lien = preg_replace("/(\r\n|\n|\r)/", "",get_plugin_setting('lien_url', 'external_auth_link'));
$interval = preg_replace("/(\r\n|\n|\r)/", "",get_plugin_setting('timeout', 'external_auth_link'));
$groupe = preg_replace("/(\r\n|\n|\r)/", "",get_plugin_setting('groupe', 'external_auth_link'));
$lien_text = preg_replace("/(\r\n|\n|\r)/", "",get_plugin_setting('lien_text', 'external_auth_link'));
$selecteur_css = preg_replace("/(\r\n|\n|\r)/", "",get_plugin_setting('selecteur_css', 'external_auth_link'));

$secret_tab=  explode(";", $secret);
$lien_tab=  explode(";", $lien);
$interval_tab=  explode(";", $interval);
$groupe_tab=  explode(";", $groupe);
$lien_text_tab=  explode(";", $lien_text);
$selecteur_css_tab=  explode(";", $selecteur_css);

$mygroups_number = 999;
$mygroups_list = get_entities_from_relationship('member', $_SESSION['user']->getGUID(), false, "group", "", 0, "", $mygroups_number, 0, false, 0);
if ($mygroups_list) {
    $unique_lien=array();
    foreach ($mygroups_list as $mygroup_list) {
      
        foreach ($groupe_tab as $key => $groupe) {
            if ($mygroup_list->name == $groupe) {
                $lien_auth=  md5($lien_tab[$key]);
                if(!in_array($lien_auth, $unique_lien))
                {
                    $unique_lien[]=$lien_auth;
                    ?>
                    <script  type="text/javascript">
                        $("<?php echo $selecteur_css_tab[$key]; ?>").append('<div class="toolbarlinks"><a id="<?php echo $lien_auth ?>" href="#" class="pagelinks"><?php echo $lien_text_tab[$key]; ?></a></div>');

                        function ajax_lien_auth<?php echo $lien_auth ?>() {
                            $.post("<?php echo $vars['url'] ?>mod/external_auth_link/views/default/elgg_topbar/lien_auth.php",
                                    {data: "<?php echo $vars['user']['name'] . $vars['user']['email'] . $secret_tab[$key] ?>"},
                            function(data) {
                                $("#<?php echo $lien_auth ?>").attr("href", "<?php echo $lien_tab[$key] . "n=" . $vars['user']['name'] . "&m=" . $vars['user']['email'] . "&k=" ?>"+data);
                            }
                            );

                        }
                        ajax_lien_auth<?php echo $lien_auth ?>();
                        setInterval(function() {
                            ajax_lien_auth<?php echo $lien_auth ?>();
                        },<?php echo $interval_tab[$key] * 1000 ?>);
                    </script>
                    <?php
                }
                    
            }
        }
    }
}
?>