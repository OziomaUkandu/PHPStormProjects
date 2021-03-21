<?php
require_once __DIR__ . '/../templates/_header.php';
?>

<html>
<body>

<table>
    <tr>
        <th>Season</th>
        <th>Name</th>
    </tr>
    <?php
    foreach ($seasons as $season):
        ?>
        <tr>
            <td><?= $season->getId(); ?></td>
            <td><?= $season->getName(); ?></td>
        </tr>
    <?php
    endforeach;
    ?>
</table>
<hr>
<a href="index.php?action=item">Items Page</a>
<a href="index.php?action=season">Seasons Page</a>
<a href="index.php?action=user">User's Page</a>
<a href="index.php?action=favourites">Favourite's Page</a>

</body>
</html>
