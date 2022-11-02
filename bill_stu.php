<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bill_ad.css" />
    <title>Bills & Payment</title>
  </head>
  <body>
    <img src="images/bupim.png">
<section>
<span><label class="bup">Bangladesh University of Professionals</label>
    <a href="logout.php" class="logoutStyle">Logout</a>
</span>
    
<section class="header"> 
    <nav>
      <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="mealrequest.php">Meal Entry</a></li>
          <li><a href="bill_stu.php">Bill & Payment</a></li>
          <li><a href="notice_stu.php">Notice</a></li>
          <li><a href="remarks_stu.php">Remarks</a></li>
        </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <hr class="line">


    <div class="info">
      <hr class="line">
      <p>Student Roll : 2054901001 Student <br>
      Name : NUSRAT NIZAM SUZANA <br>
      Program : Bachelor of Science in Information and Communication Engineering <br>
      Email : nusratsuzana8@gmail.com<br>
      Building : 01(Shongshoptok)
      </p>
      <hr class="line"> 
    </div>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Si. No.</th>
          <th scope="col">Month</th>
          <th scope="col">Reference Number</th>
          <th scope="col">Bill</th>
          <th scope="col">Billing Date</th>
          <th scope="col">Payment</th>
          <th scope="col">Collection Date</th>
          <th scope="col">Invoice</th>
          <th scope="col">Pay Online</th>
        </tr>
      </thead>
      <tbody>
        <tr class="table-striped">
          <th scope="row">1</th>
          <td>September</td>
          <td>19120100005</td>
          <td>4000tk.</td>
          <td>1-7 Sep</td>
          <td>4000tk.</td>
          <td>3-Sep</td>
          <td>202000004</td>
          <td>Paid</td>
        </tr>
      </tbody>
    </table>
</section>
  </body>
</html>
