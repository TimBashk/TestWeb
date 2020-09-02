<?
include_once 'Classes/pdo_connect_db.php';

    
	$connect = new pdo_connect_db("localhost","root","root","test");
	$connect->connect_pdo();
	
	$query = $connect->PDO->prepare("SELECT * FROM `test_tab` ");
	$query->execute();

	while($row = $query->fetch()){
			echo "<tr> <td>".$row['date']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['count']."</td>";
			echo "<td>".$row['distance']."</td> </tr>";
			
	    }
	$connect->close_connect_pdo();
	unset($connect);

?>