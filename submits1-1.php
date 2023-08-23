<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverserd</title>
</head>
<body>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
 if(isset($_POST['submit'])){
    $username = $_POST['username'];
    if($username = "admin")
    {
        $reversedUsername = strrev($username);
        echo "<p> Welcome $reversedUsername </p>"; 
    }
    else{
        echo "<p> Invalid User</p>";
    }
}
}

?>
</body>
</html>
