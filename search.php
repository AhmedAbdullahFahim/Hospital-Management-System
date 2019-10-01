<!DOCTYPE html>
<html>
	<head> </head>
	<body>
        <!-- requiring the DB connection file -->
		<?php
			require_once"pdo.php";
		?>
        <!-- Searching for a patient by his/her ID -->
		<form method="post">
			<h1> ID Search </h1>
			<table>
				<tr>
					<td>
						ID
					</td>
					<td>
						<input type="text" name="sid" value="">
					</td>
				</tr>
			</table>
			<input type="submit" value="SEARCH" name="subid">
		</form>
        <!-- Displaying the info of the patient we searched for -->
		<?php
        //Making sure the user pressed the (search) button
			if(isset($_POST['subid']))
			{
            //Preparing the query
				$s = $conn->query("SELECT * FROM patient");
            //Getting the result of the query in an array
                while($row = $s->fetch(PDO::FETCH_ASSOC))
				{
					if($row['ID'] == $_POST['sid'])
					{
                        echo "<table border=1>";
                            echo "<tr>";
                                echo "<th>";
				                    echo "Name";
			                     echo "</th>";
			                     echo "<th>";
				                    echo "ID";
			                     echo "</th>";
			                     echo "<th>";
				                    echo "EntryDate";
			                     echo "</th>";
			                     echo "<th>";
				                    echo "Phys.Name";
			                     echo "</th>";
			                     echo "<th>";
				                    echo "LastVisit";
			                     echo "</th>";
		                      echo "</tr>";
						      echo "<tr><td align='center'>";
						          echo $row['PName'];
						      echo "</td> <td align='center'>";
						          echo $row['ID'];
						      echo "</td> <td align='center'>";
						          echo $row['EntryDate'];
						      echo "</td> <td align='center'>";
						          echo $row['PhysicianName'];
						      echo "</td> <td align='center'>";
						          echo $row['LastVisit'];
						      echo "</td> </tr>";
					}
				}
			}
        ?>
	</table>
	</body>
</html>
