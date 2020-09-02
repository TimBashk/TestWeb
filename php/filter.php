<?
include_once 'Classes/pdo_connect_db.php';

    
	$connect = new pdo_connect_db("localhost","root","root","test");
	$connect->connect_pdo();
	
	$field = $_POST['field'];//здесь проверить
	$condition = $_POST['condition'];//на существование
	$value = $_POST['value'];//переменных
	$query_str = "";
	
	if(($field == "name" && $condition !='содержит'||$field != "name" && $condition =='содержит')){
		echo 'Некорректный параметр фильтра. Обновите страницу и попробуйте еще раз!';
	}else{
	$field = "`".$field."`";
	$flag_like = false;//для работы с LIKE
	switch($condition){
		case 'равно':
		$condition = '=';
		break;
		case 'больше':
		$condition = '>';
		break;
		case 'меньше':
		$condition = '<';
		break;
		case 'содержит':
		$flag_like = true;
		break;
	}
	
	if($flag_like){
		$query_str = "SELECT * FROM `test_tab` WHERE $field LIKE ?";
		$value = "%$value%";
	}else{
		$query_str = "SELECT * FROM `test_tab` WHERE $field $condition ?";
	}

	$query = $connect->PDO->prepare($query_str);
	//$query = $connect->PDO->prepare("SELECT * FROM `test_tab` WHERE `name` LIKE '%Гамбург%'");
	$query->execute(array("$value"));

	while($row = $query->fetch()){
			echo "<tr> <td>".$row['date']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['count']."</td>";
			echo "<td>".$row['distance']."</td> </tr>";
			
	    }
	$connect->close_connect_pdo();
	unset($connect);
	}
?>