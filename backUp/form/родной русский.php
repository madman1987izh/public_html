<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css\style.css">
</head>
<body>

<div class = "forma">
<hr>
<form method="post" action="переменные.php" >
<label>Как зовут ребёнка?</label><br>
<input type="text" name="student" required />
<br><br>
<label>Как вас зовут?</label><br>
<input type="text" name="parent" required />
<br><br>
<label>Какой класс?</label><br>
<input type="text" name="class"  required />

<br><br>
<button type="submit" name="login" value="login">Заполнить заявление</button>
</form>
</div>
<?php 
$student = $_POST['student'];
$parent = $_POST['parent'];
$date = date("m.d.y");
$class= $_POST['class'];
?>
Директору МБОУ СОШ №34<br>
Ивашечкину Константину Леонидовичу<br>
Родителя (законного представителя)<br>

<?php 
echo $parent;	
?><br>
<center> Заявление. </center><br><br>
Прошу разрешить моему ребёнку <?php echo $student;?> учащемуся <?php echo $class;?> класса МБОУ СОШ №34 изучать 
<br><br>
"Родной (русский) язык"
<br><br>
<div class = "right">
Дата:<br>
<?php echo $date;?>
<br><br>
Подпись:<br>
________________/<?php echo $parent;?>
</div>
<br><br>
<div class = "forma">
<a class ="print-doc" href="javascript:(print());"> Распечатать</a>
 </div> 
</body>
</html>