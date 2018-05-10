<?php
class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=pruebaopta.mysql.database.azure.com;dbname=pruebaopta;charset=utf8', 'jorgeguajan@pruebaopta', '1389Blaster28');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}