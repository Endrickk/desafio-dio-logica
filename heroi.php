<?php

$nomeHeroi = "Herói";
$xpHeroi = 7586;

$nivel = match (true) {
    $xpHeroi < 1000 => "Ferro",
    $xpHeroi >= 1001 && $xpHeroi <= 2000 => "Bronze",
    $xpHeroi >= 2001 && $xpHeroi <= 5000 => "Prata",
    $xpHeroi >= 6001 && $xpHeroi <= 7000 => "Ouro",
    $xpHeroi >= 7001 && $xpHeroi <= 8000 => "Platina",
    $xpHeroi >= 8001 && $xpHeroi <= 9000 => "Ascendente",
    $xpHeroi >= 9001 && $xpHeroi <= 10000 => "Imortal",
    $xpHeroi >= 10001 => "Radiante",
};

echo "O herói de nome $nomeHeroi está no nível de $nivel e tem $xpHeroi de Xp";