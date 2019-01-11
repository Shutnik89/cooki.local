<?php
if($_POST['first']){
setcookie('first', $_POST['first'], time() + 3600);
setcookie('second', $_POST['second'], time() + 3600);
header('Location: index.php');
}

?>


<form action="" method="POST">
      <input type="text" name="first" required>
      <input type="text" name="second" required>
      <button>Отправить </button>
</form>

<?php var_dump($_COOKIE);