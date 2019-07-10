
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <?php
        include_once '../includes/links.php';
        ?>


    </head>

    <body>
        <?php include_once '../includes/back.php'; ?>

        <div class="container ab">


            <table class="table  table-bordered table-hover" id="mytable">

                <thead class="thead-dark">

                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>phone_no</th>
                        <th>Skills</th>
                        <th>Salary</th>
                        <th width="100px">Action</th>
                        <th width="100px">Action</th>

                    </tr>
                </thead>
                <?php include_once '../controller/controller.php'; ?>

                <?php
                $data = new display;
                $post_data = $data->select('employee');
                //  print_r($post_data);
                foreach ($post_data as $row) {
                      
                    ?>
                    <tr id="<?php echo $row['id'] ?>">
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['phone_no'] ?></td>
                        <td><?php echo $row['skills'] ?></td>
                        <td><?php echo $row['salary'] ?></td>
                        <td><a href="../model/delete.php?delete=1&id=<?php echo $row["id"]; ?>" class="btn btn-danger btn-lg remove" name="delete" >Delete</a></td>
                        <td><a href="/view/edit.php?update=1&id=<?php echo $row['id']; ?>" class="btn btn-success btn-lg"> Edit</a></td>
                    </tr>

                    <?php
                }
                ?>
            </table>
        </div> 

        <?php include_once '../includes/backup.php'; ?>




    </body>

    <script type="text/javascript" src="../assets/js/delete.js"></script>
</html>