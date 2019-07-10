<?php
include_once '../controller/controller.php';
$data=new export();
$file = "data.json";
if (file_put_contents($file, $data->select("employee"))) {
    
    header("Content-type: application/json");
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    readfile($file);
    header("refresh:1;url=../view/display_employee.php");
} else {
    echo 'There is some error';
}
?>