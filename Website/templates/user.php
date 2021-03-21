<html>
<body>
<?php

require_once __DIR__ . '/../config/db.php';
require_once  __DIR__ . '/../vendor/autoload.php';

use Tudublin\User;

$sql = "SELECT * FROM user;";
$qryResult = mysqli_query($conn, $sql);

$user = new User();
while($row = mysqli_fetch_assoc($qryResult))
{
    $user->setId ( $row['idUser'] );
    $user->setName ( $row['UserName'] );
    $user->setCustId ( $row['CustId'] );
    $user->setAdminId ( $row['AdminId'] );
}

mysqli_close($conn)
?>

<table>

    <tr>

        <th>Id</th>
        <th>Name</th>
        <th>Customer Id</th>
        <th>Admin Id</th>.

    </tr>

    <tr>

        <td> <?= $user->getId(); ?> </td>
        <td> <?= $user->getName(); ?> </td>
        <td> <?= $user->getCustId(); ?> </td>
        <td> <?= $user->getAdminId(); ?> </td>
    </tr>


</table>

<hr>
<a href="index.php?action=item">Items Page</a>
<a href="index.php?action=season">Seasons Page</a>
<a href="index.php?action=user">User's Page</a>
<a href="index.php?action=favourites">Favourite's Page</a>

</body>
</html>