<?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,"dbcrud");
$edit = $_GET['edit'];

$sql = "select * from student where id = '$edit'";

$run = mysqli_query($connection,$sql);


while($row=mysqli_fetch_array($run))
{
    $uid = $row['id'];
    $name = $row['name'];
    $address = $row['address'];
    $mobile = $row['mobile'];
    $password = $row['password'];

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

        <div class="container">
            <div class="row">
                 <div class="col-md-9">
                    <div class="card">
                    <div class="card-header">
                        <h1> Edit Details </h1>
                    </div>
                    <div class="card-body">

                    <form action="add.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter Name" value="<?php echo $name; ?>"> 
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="address" class="form-control"  placeholder="Enter Address" value="<?php echo $address ?>"> 
                        </div>

                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" name ="mobile" class="form-control"  placeholder="Enter Mobile" value="<?php echo $mobile ?>"> 
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name ="password" class="form-control"  placeholder="Enter Password" value="<?php echo $password ?>"> 
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" name="submit" value="Edit">
                        </form>
                    </div>
                    </div>

                </div>
            
            </div>
        </div>

</body>
</html>