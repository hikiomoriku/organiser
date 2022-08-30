<?php
if ($_POST["name"] == "Hell_staff" && $_POST["password"] =="Apple123$") {
  require("./main.php");
} else {
   header('Location: /');
   exit(0);
}
?>