<html>
<body>
<?php

require_once __DIR__ . '/../config/db.php';
require_once  __DIR__ . '/../vendor/autoload.php';

use Tudublin\City;

$sql = "SELECT * FROM city;";
$qryResult = mysqli_query($conn, $sql);

$city1 = new City();
while($row = mysqli_fetch_assoc($qryResult))
{
    $city1->setId ( $row['id'] );
    $city1->setName ( $row['name'] );
}

mysqli_close($conn)
?>

<table>

    <tr>

        <th>ID</th>
        <th>Name</th>
    </tr>

    <tr>

        <td> <?= $city1->getId(); ?> </td>
        <td> <?= $city1->getName(); ?> </td>

    </tr>

</table>
<hr>
<a href="index.php?action=item">Items Page</a>
<a href="index.php?action=season">Seasons Page</a>
<a href="index.php?action=user">User's Page</a>
<a href="index.php?action=favourites">Favourite's Page</a>

</body>
</html>

