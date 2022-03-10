<?php
function penjumlahan($a, $b){
  return $a += $b;
}
function pengurangan($a, $b){
  return $a -= $b;
}
function perkalian($a, $b){
  return $a -= $b;
}
$nilai1 = 41;
$nilai2 = 12;
echo("hasil dari $nilai1 + $nilai2 = ".penjumlahan($nilai1,$nilai2))."<br>";
echo("hasil dari $nilai1 - $nilai2 = ".pengurangan($nilai1,$nilai2))."<br>";
echo("hasil dari $nilai1 * $nilai2 = ".perkalian($nilai1,$nilai2))."<br>";
?>