<?php
include_once "base.php";
$do = $_POST['table'];
$db = ${$do};

if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../assets/img/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}

unset($_POST['table']);
$db->save($_POST);

to("../back.php?do=$do");

