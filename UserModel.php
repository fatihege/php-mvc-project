<?php


namespace App\Core;


use App\Core\DB\DBModel;

abstract class UserModel extends DBModel
{
    abstract public function getDisplayName(): string;
}