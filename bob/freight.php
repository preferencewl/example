<!DOCTYPE html>
<html>
<head>
	<title>Bob运费表</title>
</head>
<body>
	<table border="0" cellpadding="3">
		<tr>
			<td bgcolor="#cccccc" align="center">Distance</td>
			<td bgcolor="#cccccc" align="center">Cost</td>
		</tr>
		<?php
			$distance = 50;
			while($distance <= 250){
				echo "<tr>
						<td align=\"right\">$distance</td>
						<td align=\"right\">" . ($distance/10) . "</td>"
					 . "</tr>\n";

				$distance += 50;
			}
		?>
	</table>
</body>
</html>
