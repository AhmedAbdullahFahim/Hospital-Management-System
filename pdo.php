<?php
    
    // ===> Connecting php to the database <=== //
	$conn = new PDO('mysql:host=localhost;port=3306;dbname=hospital', 'Ahmed', '123456');
    
    // ===> Preparing the insert button to insert the information into the database <=== //
//making sure the user pressed the (Add Patient) button
    if(isset($_POST['reg']))
	{
        // ===> Preparing INSERT queries <=== // 
//patient table
        $ins = $conn->prepare("INSERT INTO patient(PName, ID, EntryDate, PhysicianName, LastVisit) 
        VALUES (:name, :id, :ed, :pn, :lv)");
//medical history table		
        $med = $conn->prepare("INSERT INTO medicalhistory(ID, DisName, DisDate, NoMed) 
        VALUES(:did, :dname, :date, :nomed)");
//giving the names we just created the actual database column names
        $ins->bindParam(':name', $_POST['pname']);
		$ins->bindParam(':id', $_POST['pid']);
		$ins->bindParam(':ed', $_POST['ped']);
		$ins->bindParam(':pn', $_POST['phname']);
		$ins->bindParam(':lv', $_POST['lv']);
		$med->bindParam(':did', $_POST['pid']);
		$med->bindParam(':dname', $_POST['dname']);
		$med->bindParam(':date', $_POST['dd']);
		$med->bindParam(':nomed', $_POST['nom']);
		
        // ===> Executing the INSERT queries <=== // 
        $ins->execute();
		$med->execute();
	}
?>
