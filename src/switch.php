<?php
$lampu = "hijau";

//if else
if($lampu == "merah") {
    echo "<br /> X lebih kecil dari Y";
}else if($lampu == "kuning"){
    echo "Hati Hati";
}else if($lampu == "hijau"){
    echo "Jalan";
}else{
    echo "Lampu Lalu Lintas Mati";
}

echo "<br />";

//switch case
switch ($lampu) {
  case "merah":
    echo "Berhenti";
    break;
  case "kuning":
    echo "Hati Hati";
    break;
  case "hijau":
    echo "Jalan";
    break;
  default:
    echo "Lampu Lalu Lintas Mati";
}
?>