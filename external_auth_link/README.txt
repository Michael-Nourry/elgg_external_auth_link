############################################################################
# Copyright 2012-2013 Nourry Michaël                                       #
#                                                                          #
# michael.nourry@crdp.ac-versailles.fr                                     #
#                                                                          #
# https://github.com/Michael-Nourry                                        #
#                                                                          #
# Licence GPL3                                                             #
#                                                                          #
#  This file is part of <<external_auth_link>>.                            #
#                                                                          #
#     <<external_auth_link>> is free software:                             #
#     you can redistribute it and/or modify                                #
#     it under the terms of the GNU General Public License as published by #
#     the Free Software Foundation, either version 3 of the License, or    #
#     (at your option) any later version.                                  #
#                                                                          #
#     <<external_auth_link>> is distributed in the hope that               #
#     it will be useful,                                                   #
#     but WITHOUT ANY WARRANTY; without even the implied warranty of       #
#     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the        #
#     GNU General Public License for more details.                         #
#                                                                          #
#     You should have received a copy of the GNU General Public License    #
#     along with <<external_auth_link>>.                                   #
#     If not, see <http://www.gnu.org/licenses/>.                          #
############################################################################


Author: Michaël Nourry
Post a link to a site (http://www.monsite.com/) with value http://www.monsite.com/n=name&m=mail&k=token
valid for a fixed time limit (TimeOut).
The link is changed (AJAX) with the timing set by TimeOut

Details of the options:

     Link text: This is displayed in the bar or elsewhere
     URL: site destination (http://www.monsite.com/upload?) Will eventually link: URL.n = name & email & m = k = token
     Secret: The shared secret for encryption
     TimeOut: The time, in seconds, the validity of the token
     Group: Group with the link in the bar
     CSS Selector: To place the link

For more links simply separate sites by ";" in each field
                         (newline possible).
                         For example for two links:
                        - Link text: textlien1; textlien2
                         - URL: http://lien1/; http://lien2/
                         - Secret: secret1; secret2
                         - TimeOut: 10;30
                         - Group: group1;group2
                         - CSS Selector: #elgg_topbar_container_left;#tutu



NOTE:
To check the token:
function verifyToken($token, $data, $salt, $life)
{

    $time = time();

    if ($token == sha1($data . $salt . $time))
        return true;

    for ($offset = 1; $offset <= $life; $offset++)
        if ($token == sha1($data . $salt . ($time - $offset)))
            return true;
   
    return false;
}

if(verifyToken($token, $name.$email, $secret, $timeout))
{
    echo "OK";
}else{
    echo "KO";
}