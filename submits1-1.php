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