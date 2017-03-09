<?php
	$pictures = array('uc-adv1.png','uc-adv2.png','uc-adv3.png','uc-adv4.png','uc-form1.png','uc-form2.png','uc-form3.png','uc-form4.png','uc-form5.png','uc-data.png','uc-data2.png');
	shuffle($pictures);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bob's Auto Parts</title>
</head>
<body>

<h1>Bob's Auto Parts</h1>
<div align="center">
	<table width="100%">
		<tr>
			<?php 
				for($i = 0; $i<3;$i++){
					echo "<td align=\"center\"><img width=\"100\" height=\"100\" src=\"images/";
					echo $pictures[$i];
					echo "\"/></td>";
				}
			 ?>
		</tr>
	</table>

</div>
</body>
</html>