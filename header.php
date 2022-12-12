<?php require_once ($root."classes/user.php");
session_start();
$usermenu = User::GetUserMenu($root);
session_write_close();?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="head-img">
        <a href="#">
          <img src="<?=$root?>ЛОГОТИП.svg" alt="pic1">
          <span>МЕБЕЛЬ ОТ ПРОИЗВОДИТЕЛЯ</span></a>
        </div>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        

          <img src="<?=$root?>russia.jpg" class="img-thumbnail" alt="russia"  style="width: 35px" >
          <img src="<?=$root?>england.jpg" class="img-thumbnail" alt="ensland"  style="width: 35px" >
          <img src="<?=$root?>germany.jpg" class="img-thumbnail" alt="germany"  style="width: 35px" >
          <img src="<?=$root?>poland.jpg" class="img-thumbnail" alt="poland"  style="width: 35px" >
          <img src="<?=$root?>china.jpg" class="img-thumbnail" alt="china"  style="width: 35px" >

          <div class="form-floating">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <label for="floatingSelect">Works with selects</label>
          </div>
 
<div id="user-login">
    <div>
      <image  src="<?=$root?>./login-icon.png"/>
      <?=$usermenu?>
    </div>
    <a href="tel:+78442603782">8 844 260-37-82</a>
</div>
<div id="order-call">
  <span>Заказать звонок</span>
</div>
    </nav>
    