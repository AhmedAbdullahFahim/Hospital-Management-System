<!DOCTYPE html>
<html>
	<head> </head>
	<body>
        <!-- requiring the DB connection file -->
		<?php
			require_once"pdo.php";
		?>
        <!-- Filling the patient's form -->
		<h1> Add a New Patient </h1>
		<form method="post">
			<table border="1">
				<tr>
					<td>
				        Name
					</td>
					<td>
						<input type="text" name="pname" value="">
					</td>
				</tr>
				<tr>
					<td>
				        ID
					</td>
					<td>
						<input type="text" name="pid" value="">
					</td>
				</tr>
				<tr>
					<td>
						Entry Date
					</td>
					<td>
						<input type="text" name="ped" value="">
					</td>
				</tr>
				<tr>
					<td>
						Physician Name
					</td>
					<td>
						<input type="text" name="phname" value="">
					</td>
				</tr>
				<tr>
					<td>
						Last Visit
					</td>
					<td>
						<input type="text" name="lv" value="">
					</td>
				</tr>
                <!-- Patient's Medical History -->
				<tr>
					<th colspan="2">
						Medical History
					</th>
				</tr>
				<tr>
					<td>
						Disease Name
					</td>
					<td>
						<input type="text" name="dname" value="">
					</td>
				</tr>
				<tr>
					<td>
						#Pre. Medicines
					</td>
					<td>
						<input type="text" name="nom" value="">
					</td>
				</tr>
				<tr>
					<td>
						Disease Date
					</td>
					<td>
						<input type="text" name="dd" value="">
					</td>
				</tr>
			</table>
			<input type="submit" name="reg" value="Add Patient">
		</form>
	</body>
</html>