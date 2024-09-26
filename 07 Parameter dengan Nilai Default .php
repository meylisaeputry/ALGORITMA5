<?php
// mmbuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan Teman-teman semua<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Meylisa", "Hi");

echo "<hr>";

$kita = "Meylisa";
$ucapanSalam = "Selamat pagi";
// memanggilnya lagi tanpa mengisi parameter salam
perkenalan($kita);

echo "<p><i><strong>By:Meylisa Eka putry</strong>";

?>
