<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
<hr>
<div>
<form method="post" action="form/заявление_от_родителей_на_факультатив.php">
<label> ФИО представителя ребенка </label><br>
<input type="text" name="parent " 
 required />
 <br><br>
 <label> ФИО ребенка </label><br>
<input type="text" name="student" 
 required />
 <br><br>
<label> Класса учащегося </label><br>
<input type="text" name="class" 
 required />
 <br><br>

 <br><br> 

 <br><br>
<button class="button-1" type="submit" name="login" value="login">Заполнить заявление</button> 
</form>

</div>
<?php  
$parent = $_POST['parent'];
$student = $_POST['student'];
$class = $_POST['class'];
?>
</body>
</html>