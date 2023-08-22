<!DOCTYPE html>
<html>
<head>
    <title>Processed Text</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["inputText"])) {
            $inputText = $_POST["inputText"];
            $textLength = strlen($inputText);
            $outputText = substr($inputText, 0, $textLength / 2);

            echo "<p><strong>Original Text:</strong></p>";
            echo "<p>$inputText</p>";

            echo "<p><strong>Processed Text (Initial 50%):</strong></p>";
            echo "<p>$outputText</p>";
        } else {
            echo "<p>No input text provided.</p>";
        }
    }
    ?>
    <br>
    <a href="Set1-2.html">Go back</a>
</body>
</html>