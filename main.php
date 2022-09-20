<?php
require('./auth.php');
require('./file.php');
echo "Привет, Артём!";
$tips= readTips();
$jsontips = json_encode($tips, JSON_UNESCAPED_UNICODE); 
?>
<nav>
    <button>Создать</button>
    <input type="text" name="search">
    <button>Найти</button>
</nav>
<div>
    <?php
    echo $jsontips;
    ?>
    <table>
    <?php foreach($tips as $k=>$tip) :?>
        <tr>
            <td><?php echo $k+1 ?></td>
            <td><?php echo $tip[0] ?></td>
            <td><a href="/edit.php?id=<?php echo $k ?>">✍</a></td>
            <td><button>🚫</button></td>
        </tr>
    <?php endforeach; ?>
    </table>
</div>
