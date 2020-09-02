<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="">
    <title>Test site</title>    
    <link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/functions.js"></script>
</head>
<body>

    
	<div class="pagination">
		<ol id="numbers"></ol>
	</div>
	<table id="my-table">
	<thead>
		<tr>
			<th>Дата</th>
			<th>Название</th>
			<th>Количество</th>
			<th>Расстояние</th>
		</tr>
	</thead>
	<tbody>
	 
	</tbody>
</table>
		
</br>
<span>Выберите поле:</span>
<select id="field">
	<option value="name">название</option>
	<option value="count">количество</option>
	<option value="distance">расстояние</option>
</select>

<span>Выберите условие:</span>
<select id="condition">
	<option>равно</option>
	<option>содержит</option>
	<option>больше</option>
	<option>меньше</option>
</select>

<span>Введите значение:</span>
<input id="cond_val" type="text" name="filter_txt" value="">	
<button id="btn">Применить</button>
<span id="p"></span>	
<script>

$(function() {
	$.ajax({
		  type: 'post',
		  url: 'php/functions.php',
		  success: function(data){
			$('#my-table tbody').html(data);
			tablePag();
		  }
		});

	$("#btn").click(function(){
		$.ajax({
		  type: 'post',
		  url: 'php/filter.php',
		  data: {field:$("#field option:selected").val(),condition: $("#condition option:selected").text(),value:$("#cond_val").val()},
		  success: function(data){
			$('#my-table tbody').html(data);
			tablePag();
		  }
		});
	});
	
});

	

</script>

</body>
</html>