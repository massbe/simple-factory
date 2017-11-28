<?php
include_once('Config/SimpleAutoload.php');

use Users\Admin;
use Users\SubAdmin;
use Users\Guest;
use Users\UserFactory;

try{
    $oneElement = new UserFactory();
    $finalyOneElement = $oneElement->create($_POST['type']);
}catch (Exception $e){
    echo "Что-то пошло не так. Ошибка вида: \n". $e->getMessage();
}

$finalyOneElement->hello();
?>