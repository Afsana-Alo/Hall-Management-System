<?php

include('connection.php');
$query = "SELECT * FROM mealrequest WHERE DATE(date) = CURDATE();";
$result = mysqli_query($con, $query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="mealreq_ad.css" />
  <title>Meal Request - Admin</title>
  <style>
    table,
    td,
    th {
      border: 1px solid;
    }


    table {
      font-size: 20px;
      border-collapse: collapse;
      margin: 15px auto;
      color: #000;
      width: 80%;
      text-align: center;



    }

    td {
      padding: 5px;
    }

    th {
      padding: 10px;

    }

    h3 {

      text-align: center;
      margin-top: 50px;
      color: #222422;

    }

    .info p {
      padding: 25px;
      font-weight: 600;
    }

    #number {

      font-weight: 600;
      margin-left: 66px;

    }

    #number p {

      margin-top: 20px;
      margin-bottom: 20px;

    }
  </style>
</head>

<body>
  <img src="images/bupim.png">
  <section>
    <span><label class="bup">Bangladesh University of Professionals</label>
      <a href="logout.php" class="logoutStyle">Logout</a>
    </span>
  </section>

  <section class="header">
    <nav>
      <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
          <li><a href="index1.php">Home</a></li>
          <li><a href="menu1.php">Menu</a></li>
          <li><a href="mealreq_ad.php">Meal Entry</a></li>
          <li><a href="bill_stu.php">Bill & Payment</a></li>
          <li><a href="notice_stu.php">Notice</a></li>
          <li><a href="remarks_ad.php">Remarks</a></li>
        </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <hr class="line">


    <div class="info">
      <hr class="line">
      <p>
        Date :
        <?php

        echo date("F j, Y");

        ?>

      </p>
      <hr class="line">
    </div>


    <!-- no of meals required  -->


    <?php

    $b_query =  "SELECT  COUNT(*) as b_count FROM mealrequest WHERE Breakfast = 'Yes' ";
    $b_queryresult = mysqli_query($con, $b_query);

    while ($row = mysqli_fetch_assoc($b_queryresult)) {
      $breakfastno = $row['b_count'];
    }


    $l_query =  "SELECT  COUNT(*) as l_count FROM mealrequest WHERE Lunch = 'Yes' ";
    $l_queryresult = mysqli_query($con, $l_query);

    while ($row = mysqli_fetch_assoc($l_queryresult)) {
      $lunchno = $row['l_count'];
    }


    $d_query =  "SELECT  COUNT(*) as d_count FROM mealrequest WHERE Dinner = 'Yes' ";
    $d_queryresult = mysqli_query($con, $d_query);

    while ($row = mysqli_fetch_assoc($d_queryresult)) {
      $dinnerno = $row['d_count'];
    }

    ?>


    <div id="number">
      <p> Breakfast Required : <?php echo $breakfastno ?> </p>
      <p> Lunch Required : <?php echo $lunchno ?> </p>
      <p> Dinner Required : <?php echo $dinnerno ?> </p>

    </div>

    <table>

      <h3>All Meal Request</h3>
      <tr>
        <th>Date</td>
        <th>Name</td>
        <th>ID</td>
        <th>Department</td>
        <th>Building</td>
        <th>Breakfast</td>
        <th>Lunch</td>
        <th>Dinner</td>
      </tr>

      <?php
      while ($rows = mysqli_fetch_assoc($result)) {
      ?>
        <tr>
          <td><?php echo  $rows['Date'] ?></td>
          <td><?php echo  $rows['Name'] ?></td>
          <td><?php echo  $rows['ID'] ?></td>
          <td><?php echo  $rows['Department'] ?></td>
          <td><?php echo  $rows['Building'] ?></td>
          <td><?php echo  $rows['Breakfast'] ?></td>
          <td><?php echo  $rows['Lunch'] ?></td>
          <td><?php echo  $rows['Dinner'] ?></td>
        </tr>



      <?php

      }

      ?>

    </table>

    <!-- Breakfast request ************* -->
    <table>

      <h3> Breakfast Request</h3>
      <tr>

        <th>Name</th>
        <th>ID</th>
        <th>Department</th>
        <th>Building</th>

      </tr>

      <?php
      $run = "SELECT *
FROM mealrequest where Breakfast = 'Yes'";
      $result = $con->query($run);

      if ($result) {
        while ($data = mysqli_fetch_assoc($result)) {
      ?>
          <tr>
            <td><?php echo  $data['Name'] ?></td>
            <td><?php echo  $data['ID'] ?></td>
            <td><?php echo  $data['Department'] ?></td>
            <td><?php echo  $data['Building'] ?></td>

          </tr>

      <?php

        }
      }

      ?>
    </table>

    <!-- Lunch request ************* -->

    <table>

      <h3> Lunch Request</h3>
      <tr>

        <th>Name</th>
        <th>ID</th>
        <th>Department</th>
        <th>Building</th>

      </tr>

      <?php
      $run = "SELECT *
FROM mealrequest where Lunch = 'Yes'
";
      $result = $con->query($run);



      if ($result) {
        while ($data = mysqli_fetch_assoc($result)) {
      ?>
          <tr>
            <td><?php echo  $data['Name'] ?></td>
            <td><?php echo  $data['ID'] ?></td>
            <td><?php echo  $data['Department'] ?></td>
            <td><?php echo  $data['Building'] ?></td>

          </tr>



      <?php

        }
      }

      ?>
    </table>

    <!-- Dinner request ************* -->

    <table>

      <h3> Dinner Request</h3>
      <tr>

        <th>Name</th>
        <th>ID</th>
        <th>Department</th>
        <th>Building</th>

      </tr>

      <?php
      $run = "SELECT *
FROM mealrequest where Dinner = 'Yes'
";
      $result = $con->query($run);



      if ($result) {
        while ($data = mysqli_fetch_assoc($result)) {
      ?>
          <tr>
            <td><?php echo  $data['Name'] ?></td>
            <td><?php echo  $data['ID'] ?></td>
            <td><?php echo  $data['Department'] ?></td>
            <td><?php echo  $data['Building'] ?></td>

          </tr>



      <?php

        }
      }

      ?>
    </table>

    <!-- count*********** -->

</body>

</html>