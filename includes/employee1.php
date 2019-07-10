 <section class="row top_header pt-3">
            <div class="col-lg-12 z">

                <a href="../controller/logout.php" method="post" class="">
                    <input type="submit" value="logout" class="btn badge-success" name="logout">

                </a></div>
            <div class="col-lg-12 za">
                <a href="display_employee.php" method="post" class="">
                    <input type="submit" value="display Employee" class="btn badge-success" name="submit">

                </a>

            </div>
        </section>
  
<div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-t-85 p-b-20">
                    <form action="../model/add_employee.php" method="post" class="login100-form validate-form">
                        <span class="login100-form-title">
                            Add Employee
                        </span>

                        <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter name">
                            <input class="input100" type="text" name="name" v required="">
                            <span class="focus-input100" data-placeholder="name"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-50" data-validate="Enter Email">
                            <input class="input100" type="email" name="email" required="">
                            <span class="focus-input100" data-placeholder="Email"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-50" data-validate="Enter Address">
                            <input class="input100" type="text" name="address" required="">
                            <span class="focus-input100" data-placeholder="Address"></span>
                        </div>
                        <div class="wrap-input100 validate-input m-b-50" data-validate="Enter phone number">
                            <input class="input100" type="text" name="phone_no" required="">
                            <span class="focus-input100" data-placeholder="phone number"></span>
                        </div>
                        <div class="wrap-input100 validate-input m-b-50" data-validate="skills">
                            <input class="input100" type="text" name="skills" required="">
                            <span class="focus-input100" data-placeholder="skills"></span>
                        </div>
                        <div class="wrap-input100 validate-input m-b-50" data-validate="salary">
                            <input class="input100" type="text" name="salary" required="">
                            <span class="focus-input100" data-placeholder="salary"></span>
                        </div>


                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit" name="submit">
                                ADD
                            </button>
                        </div>


                    </form>
                </div>
            </div>
        </div>


