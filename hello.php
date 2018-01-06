<html>
<head>
</head>
<body>
<?php
	$x = 5;
	$y = 10;
	
	function myTest(){
		for ($c=1;$c<7;$c++){
			
			echo "<h".$c.">
			Hello World
			</h".$c.">";

		}
		echo "<br/>";
		$arr=array("Volvo","BMW","Toyota");
		foreach($arr as $value){
			echo " " .$value. "<br/>";
		}
	}
	
	myTest();
?>
</body>
</html>	