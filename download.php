<?php

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$id1 = [
    1 => "https://drive.google.com/uc?export=download&id=1plvJL-0UtTpzAHHsL86GnV2sIJBI5hZ0",
    2 => "https://drive.google.com/uc?export=download&id=1lS-oPwR8lbcuxWT9mV5lIwIHEkDwqvEI",
    3 => "https://drive.google.com/uc?export=download&id=1BJW1fU0OK1BeQL5MHWSO_g9zYEkmohnm",
    4 => "https://drive.google.com/uc?export=download&id=1dp1H_b9pzYBQuhVMHEWwVJEjaSsBNer5",
    5 => "https://drive.google.com/uc?export=download&id=1ThewFJ5fJOuvnZ6NnjaY22-3aonzkQ2S",
    6 => "https://drive.google.com/uc?export=download&id=18uHMVnSvqIXwMaauXpXYGBC8Fy9CHlI4",
];

if(array_key_exists($id, $id1)){
    header("Location: " . $id1[$id]);
    exit();
} else {
    echo "File not found!";
}

?>

