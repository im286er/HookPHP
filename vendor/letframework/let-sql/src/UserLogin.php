<?php
namespace Let\Sql;

class UserLogin
{

    const SQL_TABLE_LOGIN_USER = 'SELECT * FROM `hp_user` WHERE `user` = ? AND `pass` = ? AND `status` = 1 LIMIT 1';
}