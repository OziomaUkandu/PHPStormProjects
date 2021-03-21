<?php require_once __DIR__.'/../templates/_header.php';?>

    <body>
<div class="header">
<?php

if($isLoggedIn):
    ?>
    <h3 id="review">you are now successfully logged in.
        click <a href="index.php?action=review">here</a> to check out the private</h3>

<?php
endif;
?>
    <h2>Welcome to Fashion Capital Lookbook</h2>


    <a href="index.php?action=item">Items Page</a>
    <a href="index.php?action=city1">City Page</a>
    <a href="index.php?action=season">Seasons Page</a>
    <a href="index.php?action=user">User's Page</a>
    <a href="index.php?action=favourites">Favourite's Page</a>

<?php require_once __DIR__.'/../templates/_footer.php';?>