<?php
function aritmatika($nilai1, $nilai2, $operator)
{
  if (in_array($operator, ['+', '-', '*', '/'])) {
    switch ($operator) {
      case '+':
        return $nilai1 + $nilai2;
      case '-':
        return $nilai1 - $nilai2;
      case '*':
        return $nilai1 * $nilai2;
      case '/':
        return $nilai1 / $nilai2;
    }
  }
}
$angka1 = 20;
$angka2 = 10;

echo "Hasil Penjumlahan $angka1 + $angka2 = " . aritmatika($angka1, $angka2, '+') . "<br>";
echo "Hasil Pengurangan $angka1 - $angka2 = " . aritmatika($angka1, $angka2, '-') . "<br>";
echo "Hasil Perkalian $angka1 * $angka2 = " . aritmatika($angka1, $angka2, '*') . "<br>";
echo "Hasil Pembagian $angka1 / $angka2 = " . aritmatika($angka1, $angka2, '/') . "<br>";
?>