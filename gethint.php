<?php
include_once ("includes/bd.php");

$result = $database -> select('receta_tb', '*');

for($i = 0; $i < count($result); $i++){
    $a[$i] = $result[$i]['nombre'];
}

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
      if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

echo $hint === "" ? "no suggestion" : $hint;
?>