<?php
include 'inheritance.php';

use inheritance as inh;

echo "Creating Server\n";

$server = new inh\WebServer();
$server->setServerName("Docker For Training");
echo "Server Name just Created is " , $server->getServerName() , "\n";

?>
