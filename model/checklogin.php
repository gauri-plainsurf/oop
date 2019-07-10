 <?php  
 //include '../database/dbconnection.php';  
 include '../controller/controller.php';  
 session_start();  
 $data = new Database;  
 $message = '';  
 if(isset($_POST["submit"]))  
 {  
      $field = array(  
           'user'     =>     $_POST["user"],  
           'pass'     =>     $_POST["pass"]  
      );  
      if($data->required_validation($field))  
      {  
           if($data->can_login("login", $field))  
           {  
                $_SESSION["user"] = $_POST["user"];  
                header('location:/view/employee.php');  
           }  
           else  
           {  
                $message = $data->error;
                   header('location:/index.php');  
           }  
      }  
      else  
      {  
           $message = $data->error;  
      }  
 }  
 ?>  
