<?php
$data = new update();
        
        if(isset($_POST['edit'])) {

         
            $id = $_POST["id"];
            $where = array("id" => $id);
            $myArray = array(
                "name" => $_POST['name'],
                "email" => $_POST['email'],
                "address" => $_POST['address'],
                "phone_no" => $_POST['phone_no'],
                "skills" => $_POST['skills'],
                "salary" => $_POST['salary']
            );
           if( $data->update_record("employee", $where, $myArray)){
              
               header("location:display_employee.php");
           }
              
            
        }
  ?>      