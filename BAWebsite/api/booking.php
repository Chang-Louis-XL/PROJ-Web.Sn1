<?php
//處理新增資料的請求
include_once "base.php";
echo $Book->save($_POST);
