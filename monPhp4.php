<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
	for ($i=1; $i<=100; $i++){
		if ($i%3==0 && $i%5==0) {
			echo "Fizzbuzz"; }
			elseif ($i==0) {
				echo "buzz"; }
				elseif ($i%3==0) {
					echo "Fizz"; }
					else  {
						echo "$i"; }
					}
					?>

				</body>
				</html>
