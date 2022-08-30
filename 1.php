<?php
if ($_POST["name"] == "Hell_staff" && $_POST["password"] =="Apple123$") {
 echo "Привет, Артём";
} else {
   header('Location: /');
   exit(0);
}
?>