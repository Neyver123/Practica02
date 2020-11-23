<?php
class Libro
{
	public $nombrelibro;
    public $numero;
    public $nombreautor;
    public $editor;
    function __construct(string $nombrelibro, int $numero, string $nombreautor, string $editor)
    {
        echo "Informacion del libro";
        $this->nombrelibro = $nombrelibro;
        $this->numero = $numero;
        $this->nombreautor = $nombreautor;
        $this->editor = $editor;
    }
    function getLibroInfo(): void
    {
        return $this->nombrelibro;
        return $this->numero;
        return $this->nombreautor;
        return $this->editor;
    }

}
//INGRESANDO VALORES AL CONSTRUCTOR
$libropro = new Libro("It", 4234545, "Stephen King", "Lenadro");
echo $libropro->getLibroInfo();
?>