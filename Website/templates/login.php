<?php require_once __DIR__.'/../templates/_header.php';?>
<?php
if(!empty($errorMessage)):
    ?>
    <div style="background-color: pink">
        <?= $errorMessage ?>
    </div>
<?php
endif;
?>
<div class="header">
    <h2>login</h2>
    <hr>
</div>
<div class="center">
<form method="GET" action="index.php">


    <input type="hidden" name="action" value="processLogin">

    Username:
    <input type ="text" name="username">

    <br>
    Password:
    <input type = "password" name="password"  >

    <br>
    <input type="submit" value="LOGIN">

</form>

<hr>
or
<a href="index.php?action=register">
    register
</a>
as a new user

</div>
<?php require_once __DIR__.'/../templates/_footer.php';?>
