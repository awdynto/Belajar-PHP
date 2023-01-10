<?php

$kota = array("Pekalongan", "Semarang", "Jakarta");

// ---------------
//for

// for (init counter; test counter; increment counter) {
//     code to be executed for each iteration;
// }  

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

echo "<br />";

for ($index = 0; $index <= count($kota)-1; $index++) {
    echo "Kota : $kota[$index] <br>";
}

// ---------------
//foreach

echo "<br />";
foreach ($kota as $value) {
    echo "Kota : $value <br>";
}

echo "<br />";
foreach ($kota as $value) {
    if($value == "Pekalongan") {
        echo "- <br>";
    }else {
        echo "Kota : $value <br>";
    }
}



?>