<?php
include_once('Config/SimpleAutoload.php');

use Users\Admin;
use Users\SubAdmin;
use Users\Guest;
use Users\UserFactory;

$oneElement = new UserFactory();

$finalyOneElement = $oneElement->create($_POST['type']);
$finalyOneElement->hello();

?>