<?php
require('./auth.php');
require('./file.php');
$tips= require('./tips.php');
$tips= readTips();
$id = $_GET['id'];
if ($id!="" && isset ($_POST["title"])) {
    $tips[$id][0]= ($_POST["title"]);
    $tips[$id][1]= ($_POST["body"]);
    saveTips ($tips);
    header('Location: /main.php');
    exit;
}
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