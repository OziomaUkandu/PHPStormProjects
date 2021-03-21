<html>
<body>
<?php

require_once __DIR__ . '/../config/db.php';
require_once  __DIR__ . '/../vendor/autoload.php';

use Tudublin\Item;

$sql = "SELECT * FROM item;";
$qryResult = mysqli_query($conn, $sql);

$item = new Item();
while($row = mysqli_fetch_assoc($qryResult))
{
    $item->setId($row['id']);
    $item->setTopSize($row['topSize']);
    $item->setBottomSize($row['bottomSize']);
    $item->setShoeSize($row['shoeSize']);
    $item->setAccessorySize($row['accessorySize']);
}


mysqli_close($conn)
?>

<table>

    <tr>

        <th>ID</th>
        <th>Top Size</th>
        <th>Bottom Size</th>
        <th>Shoe Size</th>
        <th>Accessory Size</th>

    </tr>

    <tr>

        <td> <?= $item->getId(); ?> </td>
        <td> <?= $item->getTopSize(); ?> </td>
        <td> <?= $item->getBottomSize(); ?> </td>
        <td> <?= $item->getShoeSize(); ?> </td>
        <td> <?= $item->getAccessorySize(); ?> </td>

    </tr>

</table>
<hr>
<a href="index.php?action=item">Items Page</a>
<a href="index.php?action=season">Seasons Page</a>
<a href="index.php?action=user">User's Page</a>
<a href="index.php?action=favourites">Favourite's Page</a>

</body>
</html>

