<?php
/**
 * Created by PhpStorm.
 * User: massbe
 * Date: 28.11.17
 * Time: 10:53
 */

namespace Users;


class UserFactory
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