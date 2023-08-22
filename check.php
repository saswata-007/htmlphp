<!DOCTYPE html>
<html>
<head>
    <title>Odd or Even Checker</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])) {
        $number = $_POST['number'];
        if($number % 2 == 0) {
            echo "<p>$number is even.</p>";
        } else {
            echo "<p>$number is odd.</p>";
        }
    }
    ?>
</body>
</html>
