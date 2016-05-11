<?php

include 'inheritance.php';

echo "Creating a -----------MAC---------\n";
echo "Number of Mac books: " , Mac::getMacCount(), "\n";
$mac = new Mac();
echo "Number of Mac books: " , Mac::getMacCount() , "\n";
$mac->getName();
$mac->getSystemDetails();
$mac->upgradeMacOS(5.0);
echo "Number of Mac books: " , Mac::getMacCount(), "\n";
$mac = new Mac();
echo "Number of Mac books: " , Mac::getMacCount() , "\n";

echo "Creating a ------------WebServer----------\n";
$websphere = new WebServer();
$websphere->setServerName("WebSphere 9");
echo "The server we just created has protected name: ", $websphere->getServerName() , "\n";
?>
