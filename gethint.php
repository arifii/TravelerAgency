<?php
// Array with names
$a[] = "Arif";
$a[] = "Besart";
$a[] = "Clirim";
$a[] = "Diana";
$a[] = "Erblina";
$a[] = "Fiona";
$a[] = "Gzim";
$a[] = "Hekuran";
$a[] = "Ibrahim";
$a[] = "Jon";
$a[] = "Kenan";
$a[] = "Linda";
$a[] = "Nora";
$a[] = "Ortiola";
$a[] = "Petrit";
$a[] = "Adriatik";
$a[] = "Rinor";
$a[] = "Kastriot";
$a[] = "Donat";
$a[] = "Eriola";
$a[] = "Ermal";
$a[] = "Sunaj";
$a[] = "Taulant";
$a[] = "Uran";
$a[] = "Vjollca";
$a[] = "Liza";
$a[] = "Arsim";
$a[] = "Mentor";
$a[] = "Viktor";
$a[] = "Erzen";
$a[] = "Ardian";
$a[] = "Shqipe";
$a[] = "Yll";
$a[] = "Dardan";
$a[] = "Qenan";
$a[] = "Harisa";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
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

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>