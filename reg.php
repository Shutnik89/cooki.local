<?php

$connect = new PDO('mysql:host=localhost; dbname=cooki; charset=utf8','root','');
?>
<?php
if ($_POST['login'] && $_POST['password']) {
    $usName = $_POST['login'];
    $usPass = $_POST['password'];
    $connect->query("INSERT INTO `users` (`login`, `password`) VALUES ('$usName', '$usPass')");

}
//header('Location: login.php');

//var_dump($_POST);

if ($_POST['forReg']) {
//    session_destroy();
    header('Location: login.php');
}

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

Зарегесетрируйтес на сайте
<form action="" method="POST">
    <input type="text" required placeholder="Login" name="login">
    <input type="password" required placeholder="Password" name="password">
    <input type="submit">

<!--    <select name="bgcolor" id="">-->
<!--        <option value="red">Красный цвет</option>-->
<!--        <option value="green">Зеленый</option>-->
<!--        <option value="blue">Черный</option>-->
<!--    </select>-->
</form>
<form action="" method="POST"><input type="submit" name="forReg" value="для зареганныз"></form>