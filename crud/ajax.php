
<?php  
require_once ('./classes/items.php'); 
require_once ('./classes/brands.php');
require_once ('./funcs.php');

if(!empty($_GET['table_items'])){
    $res = Items::GetData();
    $brands = Brands::GetData(); 
    foreach($res as $row){
        echo "<div>";
        echo "<p class='id'>$row[0]</p>";
        echo "<div id=img>
            <input type='file' accept='image/*' class='hidden'></input>
            <img src='../chcks/$row[1]'/></div>";
        echo "<p class='selecter' data-val='".$row[2]."'>$row[2]</p>";
        echo "<textarea readonly class='desc-box' readonly data-val='".$row[3]."'>$row[3]</textarea>";
        echo "<textarea class='price' readonly data-val='".$row[4]."'>$row[4]</textarea>";
        echo "<div class='controlbtns'>
            <p class='editbtn' onclick='EditClick()'></p>
            <p class='confirmbtn hidden' onclick='ConfirmClick()' data-del=''></p>
            <p class='rmbtn' onclick='DeleteClick()'></p>
            <p class='cancelbtn hidden' onclick='CancelClick()'></p></div>";
        echo "</div>";
    }
    die();
} 

if(!empty($_GET['get_brands'])){ 
    echo '<select id="brands">';
        $res = Brands::GetData();
        foreach($res as $row)
            echo "<option>$row[0]</option>";
    echo '</select>'; 
    }

if(!empty($_POST['additem'])){
    if(!empty($_POST['brand'])&&!empty($_POST['desc'])&&!empty($_POST['price'])&&!empty($_FILES['img'])){
        $brand_id = Brands::GetId($_POST['brand']);
        $fullfilename = GenerateImgName($_FILES['img']);
        if(Items::AddElement($fullfilename,$brand_id,htmlspecialchars($_POST['desc']),
        htmlspecialchars($_POST['price'])))
            SaveImg($fullfilename,$_FILES['img']); 
    }
    die();
}

if(!empty($_POST['delete'])){
    if(!empty($_POST['id'])&&!empty($_POST['img'])){
            if(Items::DeleteItem($_POST['id'])){
                unlink($_POST['img']);
            }
        die();
    }
}

if(!empty($_POST['updatetable'])){
    if(!empty($_POST['id'])&&!empty($_POST['brand'])&&!empty($_POST['desc'])&&!empty($_POST['price']))
        {
            $brandid = Brands::GetId($_POST['brand']);  
            if(!empty($_FILES['img'])){
                $fullfilename = GenerateImgName($_FILES['img']);
                $oldimg = Items::GetImageName($_POST['id']);
                error_log("Image is not empty");
                if(Items::UpdateItem($_POST['id'],$brandid,
                htmlspecialchars($_POST['desc']),htmlspecialchars($_POST['price']),$fullfilename)){
                    SaveImg($fullfilename,$_FILES['img']);
                    unlink('../chcks/'.$oldimg);
                }
                else echo "Произошла ошибка на стороне серверва.";
            }
            else{ 
                if(!Items::UpdateItem($_POST['id'],$brandid,htmlspecialchars($_POST['desc'])
                ,htmlspecialchars($_POST['price']))) 
                    echo 'Произошла ошибка на стороне сервера';
            }
        }
    die();
}

 ?>