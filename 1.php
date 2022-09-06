<?php
if ($_POST["name"] == "Hell_staff" && $_POST["password"] =="Apple123$") {
  setcookie('xxx', 'Hell_staff', time() + 3600);
  header('Location: /main.php');
} else {
  setcookie('xxx', '', time() - 360000);
   header('Location: /');
   exit(0);
}
?>