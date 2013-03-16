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
                         For exmple for two links:
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