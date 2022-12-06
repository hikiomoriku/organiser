<?php
require('./auth.php');
require('./file.php');
echo "HALLO!";
$tips= readTips();
$search= $_GET["search"];
$count= 0;
?>
<!Doctype html>
<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body> 
<nav class="navigation">
    <button class="gh ghg"><a href="/edit.php?id=<?php echo $id=(count($tips)) ?>">📝</a></button>
    <form method="GET"><input type="text" value="<?php echo htmlspecialchars ($search)?>" name="search"><button class="gh ghg" type="submit">Найти</button></form>
    <form method="GET"><input type="hidden" name="search"><button class="gh ghg" type="submit">Назад</button></form>
</nav>
<div>
    <script>
        function ask (id) {
            if (confirm('Ты точно хочешь удалить заметку?')) {
             location.assign("/delete.php?id="+id)
            }
        }
     </script>
    <table>
    <?php foreach($tips as $k=>$tip) :?>
        <?php if (!$search || ($tip[0] && $search && mb_stripos($tip[0], $search)!== false)): ?>
            <?php $count++; ?>
        <tr>
            <td><?php echo $k+1 ?></td>
            <td><?php echo $tip[0] ?></td>
            <td><?php echo $tip[1] ?></td>
            <td><a href="/edit.php?id=<?php echo $k ?>">✍</a></td>
            <td><button onclick="ask(<?php echo $k ?>)">❌</button></td>
        </tr>
        <?php endif ?>
        <?php endforeach; ?>
    </table>
    <?php if ($count=== 0): ?>
        <div>Ничего нет!</div>
    <?php else: ?>
        <div><?php echo $count?> результата(ов)</div>
    <?php endif ?>
</div>
    </body>
    </html>