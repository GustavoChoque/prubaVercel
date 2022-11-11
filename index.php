<?php
require_once("Services/PokeAPIService.php");

$limiteInferior = 1;
$limiteSuperior = 600;

if (isset($_REQUEST['inicio']))
  $inicio = $_REQUEST['inicio'];
else
  $inicio = $limiteInferior;

$servicio = new PokeApi();

$avance=50;


if($inicio < $limiteInferior){
    $inicio = $limiteInferior;
}

if($inicio > $limiteSuperior){
    $inicio = $limiteSuperior;
}

$anterior=$inicio-$avance;
$siguiente=$inicio+$avance;




echo '<a href="index.php?inicio='.$anterior.'">Anterior</a>';
echo '<a href="index.php?inicio='.$siguiente.'">Siguiente</a>';

for($x=$inicio;$x<$inicio + $avance;$x++){

    echo $servicio->getPokemonName($x)."<br>";
    echo '<img src="'.$servicio->getPokemonSprite($x).'"><br>';

}

?>