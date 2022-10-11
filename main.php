<?php
require('./auth.php');
require('./file.php');
echo "Привет, Артём!";
$tips= readTips();
?>
<nav>
    <button><a href="/edit.php?id=<?php echo $id=(count($tips)) ?>">✍</a></button>
    <input type="text" name="search">
    <button>Найти</button>
</nav>
<div>
    <script>
        function ask (id) {
            if (confirm('Ты точно хочешь удалить заметку?')) {
             console.log('работает')
             location.assign("/delete.php?id="+id)
            }
        }
     </script>
    <table>
    <?php foreach($tips as $k=>$tip) :?>
        <tr>
            <td><?php echo $k+1 ?></td>
            <td><?php echo $tip[0] ?></td>
            <td><?php echo $tip[1] ?></td>
            <td><a href="/edit.php?id=<?php echo $k ?>">✍</a></td>
            <td><button onclick="ask(<?php echo $k ?>)">🚫</button></td>
        </tr>
    <?php endforeach; ?>
    </table>
</div>
