
<?php

include_once '../controller/controller.php';
$data = new update();
if (isset($_GET["delete"])) {
    $id = $_GET["id"] ?? null;
    $where = array("id" => $id);
    if ($data->delete_record("employee", $where)) {
        header("location:../view/display_employee.php");
    }
}
    ?>
