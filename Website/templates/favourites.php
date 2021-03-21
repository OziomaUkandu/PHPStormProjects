<html>
<body>
<?php

require_once __DIR__ . '/../config/db.php';
require_once  __DIR__ . '/../vendor/autoload.php';

use Tudublin\Favourites;

$sql = "SELECT * FROM favourites;";
$qryResult = mysqli_query($conn, $sql);

$favourites = new favourites();
while($row = mysqli_fetch_assoc($qryResult))
{
    $favourites->setId ( $row['id'] );
    $favourites->setName ( $row['name'] );
    $favourites->setUserId ( $row['userId'] );
    $favourites->setCityId ( $row['cityId'] );
    $favourites->setSeasonId ( $row['seasonId'] );
}

mysqli_close($conn)
?>

<table>

    <tr>

        <th>ID</th>
        <th>Name</th>
        <th>UserId</th>
        <th>CityId</th>
        <th>SeasonId</th>

    </tr>

    <tr>

        <td> <?= $favourites->getId(); ?> </td>
        <td> <?= $favourites->getName(); ?> </td>
        <td> <?= $favourites->getUserId(); ?> </td>
        <td> <?= $favourites->getCityId(); ?> </td>
        td> <?= $favourites->getSeasonId(); ?> </td>


    </tr>

</table>
<hr>
<a href="index.php?action=item">Items Page</a>
<a href="index.php?action=season">Seasons Page</a>
<a href="index.php?action=user">User's Page</a>
<a href="index.php?action=favourites">Favourite's Page</a>

</body>
</html>

