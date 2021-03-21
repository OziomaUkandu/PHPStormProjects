<?php require_once __DIR__.'/../templates/_header.php';?>

<div class="header">
    <h2>Sign up</h2>
    <hr>
</div>

<div class="middle">
<form method="GET" action="index.php">

    <input type="hidden" name="action" value="processRegistration">

    Username:
    <input type = "text" name="username" required>
    <br>

    Password:
    <input type = "password" name="password" required>
    <br>

    <input type="submit" value="Sign up now">

</form>
    <hr>
    or
    <a href="index.php?action=login">
        login
    </a>
    as a current user
</div>

<?php require_once __DIR__.'/../templates/_footer.php';?>
