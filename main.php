<?php
echo "Привет, Артём!";
$tips= [
 ["Занятия на понедельник","История, Химия,"], ["Занятия на вторник","История, Химия,"], ["Занятия на среду","История, Химия,"]
]
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
            <td><?php echo $k ?></td>
            <td><?php echo $tip[0] ?></td>
            <td><a href="?edit=<?php echo $k ?>">✍</a></td>
            <td><button>🚫</button></td>
        </tr>
    <?php endforeach; ?>
    </table>
</div>
