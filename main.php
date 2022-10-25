<?php
require('./auth.php');
require('./file.php');
echo "Привет, Артём!";
$tips= readTips();
$search= $_GET["search"];
?>
<nav>
    <button><a href="/edit.php?id=<?php echo $id=(count($tips)) ?>">📝</a></button>
    <form method="GET"><input type="text" name="search"><button type="submit">Найти</button></form>
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
        <?php echo $search; if (mb_stripos($tip[0], $search) !== false): ?>
        <tr>
            <td><?php echo $k+1 ?></td>
            <td><?php echo $tip[0] ?></td>
            <td><?php echo $tip[1] ?></td>
            <td><a href="/edit.php?id=<?php echo $k ?>">✍</a></td>
            <td><button onclick="ask(<?php echo $k ?>)">❌</button></td>
        </tr>
        <?php endif; ?>
    <?php endforeach; ?>
    </table>
</div>
