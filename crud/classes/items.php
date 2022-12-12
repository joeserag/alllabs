<?php 
require_once ("database.php");
class Items{
    public static function GetData():array{
        $query = DB::prepare(
            "SELECT orders.n_deal, orders.print , users.name
            ,orders.items,orders.weight 
            FROM orders 
            INNER JOIN users on orders.id_buyer=users.id 
            ORDER BY orders.n_deal"
        );
        $query->execute();
        $res = $query->fetchAll();
        return $res;
    }
    public static function AddElement(&$filename, &$user_id, $items, $weight):bool{
        $date = date_create();
        $order_n = date_timestamp_get($date);
       $query = DB::prepare("INSERT INTO orders Values( :img, :order_n, :buyerid, :items, :weight);");
       $query->bindValue(":buyerid",$user_id);
       $query->bindValue(":items",$items);
       $query->bindValue(":img",$filename);
       $query->bindValue(":weight",$weight); 
       $query->bindValue(':order_n',$order_n);

       return $query->execute();
    }

    public static function DeleteItem($id):bool{
        $query = DB::prepare("DELETE FROM orders WHERE orders.n_deal=:id;");
        $query->bindValue(":id",$id);
        return $query->execute();
    }

    public static function UpdateItem(&$id,$userid,$items,$weight,$img_path=null){
        $str = "UPDATE orders 
                    SET  orders.id_buyer=:userid, orders.items=:items, orders.weight=:weight ";
        if($img_path!=null){
            $str.=", orders.print=:img_path ";
        }
        $str.="WHERE orders.n_deal=:id";
        $query = DB::prepare($str);
        $query->bindValue(":weight",$weight);
        $query->bindValue(":userid",$userid);
        $query->bindValue(":items",$items);
        $query->bindValue(":id",$id);
        if($img_path!=null) 
            $query->bindValue(":img_path",$img_path); 
        return $query->execute();
    }

    public static function GetImageName(&$id){
        $query = DB::prepare("SELECT orders.print from orders WHERE n_deal=:id");
        $query->bindValue(":id",$id);
        if($query->execute())
            return $query->fetchColumn();
    }
}
?>