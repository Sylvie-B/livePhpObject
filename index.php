<?php

require './classes/User.php';
require './classes/computer.php';

$user = new User('John Doe', 'password très fort');

$computerOne = new computer('appel', 'intel', '1Go', 'linux', 'green');
$computerOne->setMouse(true);
$computerOne->setKeyboard(true);
$computerOne->start();
$computerOne->sleep();
$computerOne->shutdown();
echo "memory : ".$computerOne->getMemory()."<br>";
$computerOne->setOwner($user);

$computerTwo = new computer('huwai', 'Integrated', 'AMD Rysen', 'Zindozs', 'Gris');
$computerTwo->setMouse(true);
$computerTwo->start();
$computerTwo->sleep();
$computerTwo->shutdown();
echo "memory : ".$computerTwo->getMemory()."<br>";
$computerTwo->setOwner($user);

echo $computerOne->getOwner();
echo $computerTwo->getOwner();
