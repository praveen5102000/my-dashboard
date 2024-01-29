<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- <style>
        .addbtn{
            border: 1px solid blue;
        }
        .twos{
          display: flex;
        }
    </style> -->
<nav class="navbar navbar-expand-lg navbar-light text-white bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h1 class="text-white"><i class="fa-solid fa-clapperboard p-3"></i>Boardy Dashboard</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Boards</a>
        </li>
      </ul>
      <span class="navbar-text">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-bell"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-gear"></i></a>
        </li>
      </ul>
      </span>
    </div>
  </div>
</nav>


<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar w/ text</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
      <span class="navbar-text">
        Navbar text with an inline element
      </span>
    </div>
  </div>
</nav> -->

    <section id="home">
        <div class="container">
            <div class="row">
                <div class="head h3 col-12 mt-4 mb-4 text-center">Board Statistics</div>
                <!-- <div class="all-box col-lg-12 col-md-12 col-sm-12" style="margin: 40px 0;"> -->
                <div class="box box1 col-lg-4 col-md-12 col-sm-12 mb-5">
                    <div class="col-12 row" style="background-color: #e67e7e;color: white;border-radius: 16px;box-shadow: 0px 9px 15px 5px indianred;">
                    <div class="bb1 col-6"><i class="fa-solid fa-file-lines fa-3x pt-3"></i></div>
                    <div class="bb2 col-6"><ul><a class="h2">00</a><li><a>Number of boards</a></li></ul></div>
                </div></div>
                <div class="box box2 col-lg-4 col-md-12 col-sm-12 mb-5">
                    <div class="col-12 row" style="background-color: #5050d9;color: white;border-radius: 16px;box-shadow: 0px 9px 15px 5px cornflowerblue;">
                    <div class="bb1 col-6"><i class="fa-solid fa-file-lines fa-3x pt-3"></i></div>
                    <div class="bb2 col-6"><ul><a class="h2">00</a><li><a>Pending</a></li></ul></div>
                </div></div>
                <div class="box box3 col-lg-4 col-md-12 col-sm-12 mb-5">
                    <div class="col-12 row" style="background-color: violet;color: white;border-radius: 16px;box-shadow: 0px 9px 15px 5px darkorchid;">
                    <div class="bb1 col-6"><i class="fa-solid fa-file-lines fa-3x pt-3"></i></div>
                    <div class="bb2 col-6"><ul><a class="h2">00</a><li><a>Assigned for me</a></li></ul></div>
                </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </section>

  
  

   
  <div class="calender col-lg-12 col-md-12 col-sm-12">
<div class="month">
<ul>
<li class="prev">&#10094;</li>
<li class="next">&#10095;</li>
<li>January<br><span style="font-size:18px">2024</span></li>
</ul>
</div>

<ul class="weekdays">
<li>Mo</li>
<li>Tu</li>
<li>We</li>
<li>Th</li>
<li>Fr</li>
<li>Sa</li>
<li>Su</li>
</ul>

<ul class="days">
<li>1</li>
<li>2</li>
<li>3</li>
<li>4</li>
<li>5</li>
<li>6</li>
<li>7</li>
<li>8</li>
<li>9</li>
<li>10</li>
<li>11</li>
<li>12</li>
<li>13</li>
<li>14</li>
<li>15</li>
<li>16</li>
<li>17</li>
<li>18</li>
<li>19</li>
<li>20</li>
<li>21</li>
<li>22</li>
<li>23</li>
<li>24</li>
<li>25</li>
<li>26</li>
<li>27</li>
<li>28</li>
<li><span class="active">29</span></li>
<li>30</li>
<li>31</li>


</ul>
</div>

<div class="tble table-responsive col-lg-12 text-center mt-5">
<table class="table">
<button class="btn btn-large btn-primary mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><a href="add.php" class="text-light">Add Member</a></button>
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Password</th>
                            <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                $connection = mysqli_connect("localhost","root","");
                                $db = mysqli_select_db($connection,"dbcrud");

                                $sql = "select * from student";
                                $run = mysqli_query($connection, $sql);
                                $id= 1;

                                while($row = mysqli_fetch_array($run))
                                {
                                    $uid = $row['id'];
                                    $name = $row['name'];
                                    $address = $row['address'];
                                    $mobile = $row['mobile'];
                                    $password = $row['password'];
                                ?>

                                   <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $address ?></td>
                                        <td><?php echo $mobile ?></td>
                                        <td><?php echo $password ?></td>

                                        <td>
                                        <button class="btn btn-primary"> <a href='edit.php?edit=<?php echo $uid ?>' class="text-light"> Update </a> </button> &nbsp;
                                       <button class="btn btn-danger"><a href='delete.php?del=<?php echo $uid ?>' class="text-light"> Delete </a> </button>
                                        </td>
                                   </tr>
                                    <?php $id++; } ?>
                        </tbody>
                        </table>
</div>
                                

<!-- <section id="add" class="text-center col-6 m-5">
       
            
  
            
               
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
    <form action="add.php" method="post">
          <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control"  placeholder="Enter Name"> 
          </div>

          <div class="form-group">
              <label>Email</label>
              <input type="text" name="address" class="form-control"  placeholder="Enter Email"> 
          </div>

          <div class="form-group">
              <label>Mobile</label>
              <input type="text" name ="mobile" class="form-control"  placeholder="Enter Mobile"> 
          </div>

          <div class="form-group">
              <label>Password</label>
              <input type="text" name ="password" class="form-control"  placeholder="Enter Password"> 
          </div>
          <br/>
          <input type="submit" class="btn btn-primary" name="submit" value="Register">
          </form>
    </div>
  </div>
</section> -->
                  
                             
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>