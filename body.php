
<div class="container">
<div id="search-box">
<form action=''> 
    <div>  
        <p class="label">Номер заказа:</p>
        <input type=text id="forder" name="forder" placeholder="Номер заказа">
</div>
<div>
<p>Покупатель:</p>
<select id="fbuyer" name="fbuyer"><option></option>
<?php
  require_once('funcs.php');
  $res = GetBuyers();
  foreach($res as $row)
  echo "<option>$row[0]</option>";
?>
</select>
</div>
<div>
<p>Содержит в товарах:</p>
<input type="text" id="fitems" name="fitems">
</div>
<div>
<p>Вес:</p>
<input type="text" id="fweight" name="fweight"><br>
</div>
<div>
<button id="reset" type="reset" >Очистить фильтр</button>
<button id="send" type="sumbit">Поиск</button>
</div>
</form>
</div>
<div>
<div id='item-header'>
    <p>Чек</p>
    <p>Номер заказа</p>
    <p>Покупатель</p>
    <p>Товары</p>
    <p>Вес</p>
</div>
<div id="item-list"> 
<?php
require_once ('funcs.php');
$res = GetData($_GET);
foreach($res as $row){ 
    echo "<div>";
    echo "<div id=img><img src='./chcks/$row[0]'/></div>";
    echo "<p>$row[1]</p>";
    echo "<p>$row[2]</p>";
    echo "<p class='desc-box'>$row[3]</p>";
    echo "<p>$row[4]КГ</p>";
    echo "</div>";
 }
 ?>
</div>
</div>
</div> 
</div>