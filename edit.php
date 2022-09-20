<?php
require('./auth.php');
$tips= require('./tips.php');
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
    <body>
        <form  method="POST">
            <div>
            <input type="text" name="title" value="<?php echo $tips[$id][0]; ?>">
            </div>
            <div>
            <textarea name="body"><?php echo $tips[$id][1]; ?></textarea>
            </div>
            <div>
            <input type="submit" value="Сохранить">
            </div>
        </form>
    </body>
</html>