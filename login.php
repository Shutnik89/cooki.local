<?php

session_start();
setcookie('bgcolor', $_POST['red'], time() + 3600);
setcookie('bgcolor', $_POST['green'], time() + 3600);
setcookie('bgcolor', $_POST['blue'], time() + 3600);
//ini_set('session.gc_maxlifetime', 3600);
$connect = new PDO ('mysql:host=localhost; dbname=cooki; charset=utf8','root','');
$login = $connect->query('SELECT * FROM `users`');
if ($_POST['login']) {
    foreach ($login as $log) {
        if ($_POST['login'] == $log['login'] && $_POST['password'] == $log['password']) {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
            header('Location: content.php');
        }
    }
    echo "Not user and passworf";
}
if ($_POST['register']) {
//    session_destroy();
    header('Location: reg.php');
}

//header('Location: login.php');
?>

<style>
    body {
        margin: 200px;
        
    }
    input {
        display: block;
        margin-top: 10px;
    }
</style>
<form action="" method="POST">
    <input type="text" required placeholder="Login" name="login">
    <input type="password" required placeholder="Password" name="password">
    <input type="submit">
    <select name="bgcolor" id="">
        <option value="red"name="red">Красный цвет</option>
        <option value="green"name="green">Зеленый</option>
        <option value="blue"name="blue">Черный</option>
    </select>
</form>
<form action="" method="POST">
    <input type="submit" name="register">На страницу регистрации</form>


