<?php

include_once '../controller/controller.php';


if (isset($_POST['Import'])) {
   
    $obj = new import();
    $obj->importdata("employee");
}
?>