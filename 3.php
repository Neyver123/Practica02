<?php
class Calculadora
{
	public $num1;
    public $num2;
	function suma(int $num1, int $num2):void
	{
		return "La suma es: ".($num1 + $num2)."<br>";
	}
	function multiplicacion(int $num1, int $num2):void
	{
		return "La multiplicacion es: ".($num1 * $num2)."<br>";
	}
	function division (int $num1, int $num2):void 
	{
		return "La division es: ".($num1 / $num2)."<br>";
	}
	function resta(float $num1, float $num2):void 
	{
		return "La resta es: ".($num1 - $num2)."<br>";
	}
}
$micalculadora = new Calculadora(18, 6);
echo $micalculadora->suma()
echo $micalculadora->multiplicacion()
echo $micalculadora->resta()
echo $micalculadora->division()
?>