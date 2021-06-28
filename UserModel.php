<?php


namespace sajjaddarre76\phpmvc;


use sajjaddarre76\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;

}