<?php

class Database{
    public static function connect() {
        $db = new mysqli('db','root','root_password','tienda_master');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}