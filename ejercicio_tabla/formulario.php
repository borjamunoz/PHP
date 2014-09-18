<!DOCTYPE html>
<meta charset="utf-8">
<html>
<body>
    <?php
    	$num = $_GET["num"];

  		if (empty($num)) {
			
			echo "No puedes dejarlo vacío";
			
		}else if(is_numeric($_GET["num"])){

			if($num<=0 || strpos($num, '.')!==false){
				echo "no puedes introducir negativos o 0 o decimales";
			}else{

				echo "<table border=1>";
				for ($x=0; $x<$num; $x++){
					echo "<tr>
					<td>aaa</td><td>bbb</td>
					</tr>";
			}
				echo "</table>";
			}

			}else{
				echo "Debes introducir un número";
			}
    ?>
</body>
</html>