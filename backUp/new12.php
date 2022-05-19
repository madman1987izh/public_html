<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
<hr>
<div>
<form method="post" action="index.php">
<label> ФИО вашего ребенка </label><br>
<input type="text" name="chaild" 
pattern="[а-яА-Я]+" required />
 <br><br>
<label> Номер класса учащегося </label><br>
<input type="text" name=" namber" 
pattern="[0-9.]+" required />
 <br><br>
 <label> Дата </label><br>
<input type="text" name="data" 
pattern="[0-9.]+" required />
 <br><br> 

<button class="button-1" type="submit" name="login" value="login">Заполнить заявление</button> 
</form>
<hr>
</div>
<?php  
$chaild = $_POST['chaild'];
$namber = $_POST['namber'];
$data = $_POST['data'];?>
</html>