<?php 
require_once("database.php");

class Brands{
    public static function GetData():array
    {
        $query = DB::prepare(
            "SELECT users.name
            FROM users;");
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }
    public static function GetId(&$usersname):int{
        $query = DB::prepare(
            "SELECT users.id FROM users where users.name=:usersname;"
        );
        $query->bindValue(":usersname",$usersname);
        $query->execute();
        return $query->fetchColumn(); 
    }
}
?>