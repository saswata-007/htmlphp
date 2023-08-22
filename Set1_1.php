<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</form>
<?php

if(isset($POST['submit'])){
    $username = $POST['username'];
    if($username === "admin")
    {
        $reversedUsername = strrev($username);
        echo "<p> Welcome " . $reversedUsername . "</p>"; 
    }
    else{
        echo "<p> Invalid User</p>";
    }
}

?>
</body>
</html>