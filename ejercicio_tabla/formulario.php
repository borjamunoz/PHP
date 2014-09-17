<html>
<body>

    <?php
  		if (empty($_GET["num"])) {
		    echo "No puedes dejarlo vacío";
		}else if(is_numeric($_GET["num"])){
	    	if($num<=0){
	    		echo "no puedes introducir negativos o 0";
	    	}
	    	$num = $_GET["num"]; 
	    	echo "<table border=1>";
				for ($x=0; $x<$num; $x++){
		  			echo "<tr>
		  					<td>aaa</td><td>bbb</td>
		  				 </tr>";
		  		}
	  		echo "</table>";
		}else{
			echo "Debes introducir un número";
		} 
    ?>

</body>
</html>