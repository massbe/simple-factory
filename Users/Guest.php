<?php
namespace Users;


class Guest implements User
{
    public function hello()
    {
        echo "Guest, hi";
    }
}