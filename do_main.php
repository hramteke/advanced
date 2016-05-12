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

$payment = function($windowPC){
	echo "Using Closure to buy the PC\n";
	$windowPC->priceForPC(1000);
	$windowPC->payment();
};

$payment($windowPC);

$assemblePC = function() {
	echo "Creating a new linum machine-----------------\n";
	$linuxPC = new inh\PC();
	$linuxPC->setOperatingSystem("Linux");
	echo "The new assembled PC is : " , $linuxPC->getOperatingSystem() , "\n";
};

$assemblePC();

?>
