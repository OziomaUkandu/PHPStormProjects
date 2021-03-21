<?php

use Tudublin\SessionManager;

$sessionManager = new SessionManager();
$isLoggedIn = $sessionManager->isLoggedIn();
$userName = $sessionManager->userNameFromTheSession();


if(empty($pageTitle)){
    $pageTitle = '';
}
if(empty($homePageStyle)) $homePageStyle = '';
if(empty($loginPageStyle)) $loginPageStyle = '';
if(empty($aboutPageStyle)) $aboutPageStyle = '';
if(empty($seasonPageStyle)) $seasonPageStyle = '';
if(empty($contactPageStyle)) $contactPageStyle = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>website</title>
    <style>
        @import "/css/main.css";
        @import "/css/NavBar.css";
    </style>
</head>

<body>
<header>
     <span style="float: right; text-align: right;">
          <?php
          if($isLoggedIn):
              ?>
              You are logged in as: <strong><?= $userName ?></strong>
              <br>
              <a href="index.php?action=logout">Logout</a>
          <?php
          else:
              ?>

              <a class="<?= $loginPageStyle ?>" href="index.php?action=login" id="right">Login</a>
          <?php
          endif;
          ?>
      </span>
</header>
<nav>
    <div class="nav" id="container">

        <a class="<?= $homePageStyle ?>" href="index.php?action=home" id="right">Home</a>
        <a class="<?= $aboutPageStyle ?>" href="index.php?action=about" id="right">about</a>
        <a class="<?= $seasonPageStyle ?>" href="index.php?action=season" id="right">Season</a>
        <a class="<?= $contactPageStyle ?>" href="index.php?action=contact" id="right">Contact Us</a>

    </div>
</nav>
</body>