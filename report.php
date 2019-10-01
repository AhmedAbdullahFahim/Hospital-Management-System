<!DOCTYPE html>
<html>
	<head> </head>
	<body>
        <!-- requiring the DB connection file -->
		<?php
			require_once"pdo.php";
        ?>
        <!-- Getting a report of the patients that are visiting a certain physician today -->
		<form method="post">
			<h1> Physician's Patients </h1>
			<table>
				<tr>
					<td>
						Physician's Name
					</td>
					<td>
						<input type="text" name="pname" value="">
					</td>
				</tr>
			</table>
			<input type="submit" value="SEARCH" name="subphys">
		</form>
		<?php
        //Giving a variable today's date 
            $today = date("Y-m-d");
        // Displaying the data of the patients who are visiting the doctor today
    //Making sure the user pressed the (search) button
            if(isset($_POST['subphys']))
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
            //Preparing the query
				$s = $conn->query("SELECT * FROM patient");
            //Getting the result of the query in an array
                while($row = $s->fetch(PDO::FETCH_ASSOC))
				{
                //if the searched doctor actually has any appointments TODAY
					if($row['PhysicianName'] == $_POST['pname'] && $row['EntryDate'] == $today)
					{
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