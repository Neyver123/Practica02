<?php
$a = 8;
$contador=0;
function primo(int $a):string
{
for ($i=1; $i<=$a; $i++) 
		{
			if($a % $i==0)
			{
				$contador++;
			}
		}
		if ($contador == 2) 
		{
	     echo "El número es primo" ;
		} else {
		 echo "El número no es primo";
		}
}
?>
