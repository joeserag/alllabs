<?php $root="./";?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>joe</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/page.css" rel="stylesheet">
    <link href="css/search.css" rel="stylesheet">

</head>
<body>
    <script src="js/bootstrap.bundle.min.js"></script>
<?php require_once ('header.php');?>

<div id="main-body">
  <div class="col-4 p-2 left-menu" >
      <div class="p-3 mb-2 bg-primary text-white">КАТАЛОГ</div>
      <div class="p-3 mb-2 bg-primary text-white">Акции</div>
      <div class="p-3 mb-2 bg-primary text-white">Новинки</div>
      <div class="p-3 mb-2 bg-primary text-white">Мебель для гостиных</div>
      <div class="p-3 mb-2 bg-primary text-white">Мебель для спальни</div>
      <div class="p-3 mb-2 bg-primary text-white">Мебель для детской</div>
      <div class="p-3 mb-2 bg-primary text-white">Мебель для прихожей</div>
      <div class="p-3 mb-2 bg-primary text-white">Мягкая мебель</div>
      <div class="p-3 mb-2 bg-primary text-white">Матрасы</div>
      <div class="p-3 mb-2 bg-primary text-white">Мебель на заказ</div>
      <div class="p-3 mb-2 bg-primary text-white">Зеркала</div>
      <div class="p-3 mb-2 bg-primary text-white">Столы</div>
      <div class="p-3 mb-2 bg-primary text-white">Комоды</div>
      <div class="p-3 mb-2 bg-primary text-white">Кровати</div>
      <div class="p-3 mb-2 bg-primary text-white">Шкафы</div>
      <div class="p-3 mb-2 bg-primary text-white">Тумбы</div>
      
  </div>
  <div id="body-part">
      <ul id="navbar-nav">
        <li>
          О НАС
        </li>
        <li >
         ПАРТНЕРСТВО
        </li>
        <li>
         ДОСТАВКА И СБОРКА 
        </li>
        <li>
          НОВОСТИ
        </li>
        <li>ВАКАНСИИ</li>
        <li>КОНТАКТЫ</li>
        <li id="cart">КОРЗИНА</li>
      </ul>
      <div id="item-nav">
        <a>Главная</a><span>></span>
        <span class="last-clicked">Поиск</span>
       </div>

       <?php require_once('body.php');?>     
</div>

  </div>
</div>

</div>
  
</div>
<div id = "foot">
	<div class="container"> <!-- e8e8e8 -->
  <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
    <div class="col mb-3">
      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      </a>
      <img width="256" src = "pic1.jpg">
      <p class="text-muted">&copy; 2022</p>
    </div>

    <div class="col mb-3">

    </div>

    <div class="col mb-3">
      <h5>Контакты</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">8 844 260-37-82</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"> ул.Курчатова, 20</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Карта сайта</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><br></a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><h5>Информация</h5></a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><br></a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Информация

          О нас</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Новости</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Доставка и сборка</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Возврат продукции</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Оформление заказа</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Отзывы</a></li>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>Партнёрам</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Партнерство</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Присоединяйтесь к нам в соцсетях:</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><br></a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><h5>Каталог</h5></a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><br></a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Мебель для гостиных</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Мебель для спальни</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Мебель для прихожей</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Мебель для детской</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Мягкая мебель</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Обеденные столы</a></li>
      </ul>
    </div>
    
        <div id = "gg" class="col mb-3">
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"> </a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"> </a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><h5> </h5></a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><br></a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Матрасы</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Зеркала</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Комоды</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Кровати</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Шкафы</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Изготовление мебели</a></li>
      </ul>
    </div>
    
  </footer>
</div>
  </body>
 
  
  

  
  
   
        
   


</html>
