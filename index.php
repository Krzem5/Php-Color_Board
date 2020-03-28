<?php
echo "<body style=\"width:100%;height:100%\">";
for ($i=0;$i<7;$i++){
	for ($j=0;$j<7;$j++){
		$c="green";
		switch (($i+$j*7)%4){
			case 0:
				$c="black";
				break;
			case 1:
				$c="red";
				break;
			case 2:
				$c="white";
				break;
			case 3:
				$c="yellow";
				break;
		}
		echo "<div style=\"margin:0;padding:0;position:absolute;top:".($i*100)."px;left:".($j*100)."px;width:100px;height:100px;background-color:".$c."\"></div>";
	}
}
echo "</body>";
?>