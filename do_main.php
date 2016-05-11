<?php
include 'inheritance.php';

use inheritance as inh;

echo "Creating Server\n";

$server = new inh\WebServer();
$server->setServerName("Docker For Training");
echo "Server Name just Created is " , $server->getServerName() , "\n";

echo "\n\nCreating -----------WindowsPC------------\n";

$windowPC = new inh\WindowPC();
$windowPC->setOperatingSystem("Microsoft Window XP");
echo "Window PC Name: ", $windowPC->getOperatingSystem() , "\n";
$windowPC->payment();

?>
