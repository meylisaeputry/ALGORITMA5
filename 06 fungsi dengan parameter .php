<?php
// mmbuat fungsi
function perkenalan($nama, $salam){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan Teman-teman semua<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Meylisa", "Hi");

  echo "<hr>";

  $saya = "Meylisa";
  $ucapanSalam = "Selamat pagi";
  // memanggilnya lagi
  perkenalan($saya, $ucapanSalam);

  echo "<p><i><strong>By:Meylisa Eka putry</strong>";

?>
