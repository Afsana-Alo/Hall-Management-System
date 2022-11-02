<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Meal Entry</title>
  <link rel="stylesheet" href="mealrequest.css">


  <style>
    .head {
      text-align: center;
      margin: 15px;
      font-size: 20px;
    }
  </style>
</head>

<body>


  <!-- ************new************ -->

  <img src="images/bupim.png">
  <section>
    <span><label class="bup">Bangladesh University of Professionals</label>
      <a href="logout.php" class="logoutStyle">Logout</a>
    </span>

    <section class="header">
      <nav>
        <div class="nav-links" id="navLinks">

          <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./menu.php">Menu</a></li>
            <li><a href="./mealrequest.php" class="active">Meal Entry</a></li>
            <li><a href="./bill_stu.php">Bill & Payment</a></li>
            <li><a href="./notice_stu.php">Notice</a></li>
            <li><a href="./remarks_stu.php">Remarks</a></li>
          </ul>
        </div>
      </nav>
      <hr class="line">

    <?php

    include('connection.php');

    if (isset($_POST['date']) &&  isset($_POST['name']) && isset($_POST['sid'])  && isset($_POST['dept']) && isset($_POST['building']) && isset($_POST['breakfast'])  && isset($_POST['lunch']) && isset($_POST['dinner'])) {

      $date =  $_POST['date'];
      $name = $_POST['name'];
      $sid = $_POST['sid'];
      $dept = $_POST['dept'];
      $building = $_POST['building'];
      $breakfast = $_POST['breakfast'];
      $lunch = $_POST['lunch'];
      $dinner = $_POST['dinner'];

      $sql = "INSERT INTO mealrequest (Date, Name, ID, Department, Building, Breakfast, Lunch, Dinner)   VALUES ( '$date ' , '$name ' , '$sid' , '$dept' , '$building ' , '$breakfast' , '$lunch' , '$dinner ' ) ";

      if (mysqli_query($con, $sql)) {

        echo '<script>alert("Submitted Successfully")</script>';
      } else {

        echo '<script>alert("Error")</script>';
      }
    }

    ?>

    <div class="container">
    <p id="mealFormRestriction" style="color:red;text-align:center;font-weight:bolder">We only take response from 10 am to 10pm</p>
      <form id="mealForm" action="mealrequest.php" method="POST" onsubmit="return Validation()">

        <p class="head">Request for Daily Meal</p>


        <div class="row">
          <div class="col-25">
            <label for="date">Date </label>
          </div>
          <div class="col-75">
            <input type="date" id="date" name="date" placeholder="Enter Date">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="name">Name </label>
          </div>
          <div class="col-75">
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="sid">Student ID </label>
          </div>
          <div class="col-75">
            <input type="text" id="sid" name="sid" placeholder="Enter your Id" required>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="dept">Department </label>
          </div>
          <div class="col-75">
            <input type="text" id="dept" name="dept" placeholder="Enter your department" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="building">Building </label>
          </div>
          <div class="col-75">
            <input type="text" id="building" name="building" placeholder="Enter your building number" required>
          </div>
        </div>


        <div class="row">
          <div class="col-25">
            <label for="b_yes">Breakfast </label>
          </div>
          <div class="col-75">


            <input type="radio" id="b_yes" name="breakfast" value="yes">
            <label for="b_yes">Yes</label><br>
            <input type="radio" id="b_no" name="breakfast" value="no">
            <label for="b_no">No</label><br>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="l_yes">Lunch </label>
          </div>
          <div class="col-75">


            <input type="radio" id="l_yes" name="lunch" value="yes">
            <label for="l_yes">Yes</label><br>
            <input type="radio" id="l_no" name="lunch" value="no">
            <label for="l_no">No</label><br>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="d_yes">Dinner </label>
          </div>
          <div class="col-75">

            <input type="radio" id="d_yes" name="dinner" value="yes">
            <label for="d_yes">Yes</label><br>
            <input type="radio" id="b_no" name="dinner" value="no">
            <label for="d_no">No</label><br>
          </div>
        </div>

        <div class="row">
          <input type="submit" value="submit">
        </div>
      </form>
    </div>

    <script>
    var today = new Date();
    var time = today.getHours();
    //var time=6;
    var mealForm=document.getElementById('mealForm');
    var mealFormRestriction=document.getElementById('mealFormRestriction');
    if(time>=10 && time<=22){
      mealForm.style.display="block";
      mealFormRestriction.style.display="none";
    }
    else{
      mealForm.style.display="none";
      mealFormRestriction.style.display="block";
    }
  </script>

</body>

</html>