<!DOCTYPE html>
<html>
<head>
	<title>Emily Liu</title>

</head>
<body>
	<p>1234567890<p>
	<?php 
		if($result) {
			while($row = $result->fetch_array()){
				echo $row['school'] . "\n" . $row['place_name'] . "\n";
			}

		} else { 
			echo "empty";
		}
	?>

</body>
</html>