<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
            <?php
            if (isset($_GET["update"])) {

                $id = $_GET["id"] ?? null;
                $where = array("id" => $id,);
                $row = $data->select_record("employee", $where);
               
                ?>

                <form  method="post" action="">
                    <div >
                        <span class="login100-form-title">update Employee details</span>
                        <input  type="hidden" name="id"  value="<?php echo $id; ?>">
                    </div>
                    <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter name">
                        <input class="input100" type="text" name="name"  value="<?php echo $row['name']; ?>">
                        <span class="focus-input100" data-placeholder="name" ></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter Email">
                        <input class="input100" type="email" name="email" value="<?php echo $row['email']; ?>">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter Address">
                        <input class="input100" type="text" name="address" value="<?php echo $row['address']; ?>">
                        <span class="focus-input100" data-placeholder="Address"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter phone number">
                        <input class="input100" type="tel" name="phone_no"value="<?php echo $row['phone_no']; ?>">
                        <span class="focus-input100" data-placeholder="phone number"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-50" data-validate="skills">
                        <input class="input100" type="text" name="skills" value="<?php echo $row['skills']; ?>">
                        <span class="focus-input100" data-placeholder="skills"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-50" data-validate="salary">
                        <input class="input100" type="text" name="salary" value="<?php echo $row['salary']; ?>">
                    <span class="focus-input100" data-placeholder="salary"></span>
                    </div>

                    <div class="container-login100-form-btn">                     
                     <button class="login100-form-btn" type="submit" name="edit" value="Update">
                        update
                    </button>
                   
                    </div>

                    
                


            </form>
        </div>
<?php
            }
            ?>


        </div>
    </div>
</div>


