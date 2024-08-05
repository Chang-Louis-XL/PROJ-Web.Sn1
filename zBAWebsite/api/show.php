<?php include_once "base.php";
$db = ${$_POST['do']};
// $product = $Product->find($_POST['id']);
$sh=$db->find($_POST['id']);

/* if ($movie['sh'] == 1) {
    $movie['sh'] = 0;
} else {
    $movie['sh'] = 1;
} */

// $movie['sh'] = ($movie['sh'] + 1) % 2;
$sh['sh'] = ($sh['sh'] + 1) % 2;


$db->save($sh);
