<?php
include_once "base.php";
$do = $_POST['table'];
$db = ${$do};

dd($_POST);

foreach ($_POST['id'] as $key => $id) {
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
        $db->del($id);
    } else {
        $row = $db->find($id);

        switch ($do) {
            case 'admin':
                $row['acc'] = $_POST['acc'][$key];
                $row['pw'] = $_POST['pw'][$key];
                break;
            case 'Home':
                $row['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;
                $row['text1'] = $_POST['text1'][$key];
                $row['text2'] = $_POST['text2'][$key];
                break;
            case 'About':
                $row['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;
                $row['text1'] = $_POST['text1'][$key];
                $row['text2'] = $_POST['text2'][$key];
                break;
            case 'Profolio':
                $row['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;
                $row['text1'] = $_POST['text1'][$key];
                $row['text2'] = $_POST['text2'][$key];
                break;
            case 'Contect':
                $row['title'] = $_POST['title'][$key];
                $row['detailed'] = $_POST['detailed'][$key];
                break;

        }

        $db->save($row);
    }
}
to("../back.php?do=$do");
