<html>
<head>
	<title>PHP</title>
	<style>
		.para{
		    text-align: center;
    background-color: #e5c0c0;
    border: 4px solid brown;
    padding: 33px;
    margin: 235px auto;
    margin-top: 311px;
    width: 120px;
}
	</style>
</head>
<body class="para">
<?php
		if(isset($_POST['submit']))
		{
			$number=$_POST['number'];
			if($number % 2 == 0)
			{
				echo "<p>$number is even.</p>";
			}
			else
			{
				echo "<p>$number is odd.</p>";
			}
		}
		
	?>
</body>
</html>