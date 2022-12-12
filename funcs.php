<?php 
const conn = 'mysql:host=localhost;dbname=mebel';
const user = 'root';
const pass = '2647';

function GetData($arr){
    $db = new PDO(conn,user,pass); 
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
     $array = array('fitems'=>$arr['fitems'],'forder'=>$arr['forder']);
    $query = "SELECT orders.print,orders.n_deal , users.name
    ,orders.items,orders.weight 
    FROM orders 
    INNER JOIN users on orders.id_buyer=users.id 
    WHERE orders.items like CONCAT('%',:fitems,'%')
    AND orders.n_deal like CONCAT('%',:forder,'%')
    ";
    
    if(!empty($arr['fweight']) & is_numeric($arr['fweight'])){
        $query.="AND orders.weight >= :fweight ";
        $array+=[':fweight'=>$arr['fweight']];}
        
    
    if(!empty($arr['fbuyer'])){
    $query.="AND orders.id_buyer=(SELECT id from users where name=:fbuyer)";
    $array+=[':fbuyer'=>$arr['fbuyer']];}
    
    $query.=" order by orders.n_deal";       
    $exec = $db->prepare($query);
    try{
    $exec->execute($array);}
    catch(Exception $ex){
        error_log($ex->getMessage());
        exit();
    } 
    $res = $exec->fetchAll();
    $db=null;
    return $res;
    }
 

function GetBuyers(){
 $db = new PDO(conn,user,pass); 
 try{
    $res = $db->query("SELECT name from users");
    $db = null;
    return $res;
   }
    catch(Exception $ex){
        error_log($ex->getMessage());
        exit();
    }
}
?>