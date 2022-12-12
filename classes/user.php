<?php 

class User {
static function IsLogged () {
    return isset($_SESSION['username']);
}

static function GetUserName(){
    if(User::IsLogged())
        return  $_SESSION['username'];
    else return "Гость";
}

static function GetUserMenu($root){
    if(isset($root))
        if(User::IsLogged())
            return '<a>'.User::GetUserName().'</a>
                    <a href='.$root.'login/exit.php>Выход</a>';
        else return  
            '<a href='.$root.'login/login.php>Войти</a>
            <a href='.$root.'login/reg.php>Регистрация</a>';
}
}

?>