<!DOCTYPE html>
<html>
	<head> </head>
	<body>
        <!-- requiring the DB connection file -->
		<?php
			require_once"pdo.php";
		?>
        <!-- Getting a patient's medical history by his/her ID -->
		<form method="post">
			<h1> Display Medical History </h1>
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
        <!-- Displaying the medical history of the patient we searched for -->
		<?php
        //Making sure the user pressed the (search) button
			if(isset($_POST['subid']))
            {
            //Preparing the query
				$s = $conn->query("SELECT * FROM medicalhistory");
            //Getting the result of the query in an array
				while($row = $s->fetch(PDO::FETCH_ASSOC))
				{
					if($row['ID'] == $_POST['sid'])
					{
                        echo "<table border=1>";
                            echo "<tr>";
                                echo "<th>";
				                    echo "ID";
                                echo "</th>";
                                echo "<th>";
				                    echo "Disease Name";
                                echo "</th>";
                                echo "<th>";
				                    echo "Disease Date";
                                echo "</th>";
                                echo "<th>";
				                    echo "#Pre. Medicines";
                                echo "</th>";
                                echo "</tr>";
						          echo "<tr><td align='center'>";
                                        echo $row['ID'];
						          echo "</td> <td align='center'>";
                                        echo $row['DisName'];
                                  echo "</td> <td align='center'>";                  
                                        echo $row['DisDate'];
						          echo "</td> <td align='center'>";
						                echo $row['NoMed'];
						          echo "</td> </tr>";
					}
				}
			}
		?>
	</table>
	</body>
</html>