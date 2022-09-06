<?php
require('./auth.php');
echo "Привет, Артём!";
$tips= require('./tips.php');
?>
<nav>
    <button>Создать</button>
    <input type="text" name="search">
    <button>Найти</button>
</nav>
<div>
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
