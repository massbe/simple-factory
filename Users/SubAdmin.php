<?php
namespace Users;


class SubAdmin implements User
{
    public function hello()
    {
        echo "SubAdmin, hi";
    }
}