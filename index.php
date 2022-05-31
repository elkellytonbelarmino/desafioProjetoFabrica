<?php

/*Voce deverá criar uma fabrica onde so deverá ter o armazenamento dos carros
e listar os carros informando todas as caracteristicas.*/

class veiculo
{
    public $modelo;
}

$carro1 = new veiculo();
$carro1 -> modelo = 'Honda: HR-V';
$carro1 -> fichaTecnica =
    'Honda HR-V EX CVT 1.8 I-VTEC FlexOne 2021,
    Motorização: 1.8,
    Combustível: Álcool / Gasolina,
    Potência (cv): 140 A / 139 G,
    Torque (kgf.m): 17,7 A / 17,5 G,
    Consumo cidade (km/l): 7,7 A / 11 G,
    Consumo estrada (km/l): 8,6 A / 12,3 G';

$carro2 = new veiculo();
$carro2 -> modelo = 'Honda: Civic';
$carro2 -> fichaTecnica =
    'Honda Civic 2.0 LX CVT 2021,
    Motorização: 2.0,
    Combustível: Álcool / Gasolina,
    Potência (cv): 155 A / 150 G,
    Torque (kgf.m): 19,5 A / 19,3 G,
    Consumo cidade (km/l): 7,2 A / 10,5 G,
    Consumo estrada (km/l): 8,9 A / 13 G';

$carros = array($carro1, $carro2);

/*?>
<pre><?php print_r($carros);?></pre>*/
var_dump($carros);

