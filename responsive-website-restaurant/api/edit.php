<?php
include_once "base.php";
$do = $_POST['table'];
$db = ${$do};

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
          
        }

        $db->save($row);
    }
}
to("../back.php?do=$do");
