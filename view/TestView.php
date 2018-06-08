<!DOCTYPE html>
<html>
<head>
	<title>Emily Liu</title>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<p>123456789011<p>
	<?php 
		if($result) {
			while($row = $result->fetch_array()){
				echo $row['school'] . "\t" . $row['place_name'] . "\n";
			}

		} else { 
			echo "empty";
		}
	?>

</body>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>