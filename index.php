<?php
use Users\Admin;
use Users\SubAdmin;
use Users\Guest;

class SimpleFactory
{
    const ADMIN_VALUE = 1;
    const SUBADMIN_VALUE = 2;
    const GUEST_VALUE = 3;

    public function create($type)
    {
        switch ($type)
        {
            case self::ADMIN_VALUE: return new Admin(); break;
            case self::SUBADMIN_VALUE: return new SubAdmin(); break;
            case self::GUEST_VALUE: return new Guest(); break;
        }
    }
}

$oneElement = new SimpleFactory();

spl_autoload_register(function ($class)
{
    $class = str_replace('\\', '/', $class);
    include_once ($class . ".php");
});

$finalyOneElement = $oneElement->create($_POST['type']);
$finalyOneElement->hello();

?>