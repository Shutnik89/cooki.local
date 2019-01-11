<?php
session_start();
if (!$_SESSION['login'] || !$_SESSION['password']) {
    header('Location: login.php');
    die();
}

if ($_POST['unlogin']) {
    session_destroy();
    header('Location: login.php');
}



?>

<h1>Сайт только для авторизрованнзый пользователей</h1>

<?php echo "Hello " .$_SESSION['login'] . "<br>";  ?>
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/22/Pictor_A_composite.jpg/220px-Pictor_A_composite.jpg" alt="Image">
<form action="" method="POST">
    <input style="margin-top: 10px" type="submit" name="unlogin" value="На страницу авторизации">
</form>