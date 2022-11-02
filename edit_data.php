<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUP Student Hall Menu</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="add_data.css">
</head>

<body>
    <img src="images/bupim.png">
    <section>
        <div><label class="bup">Bangladesh University of Professionals</label></div>
    </section>

    <section class="header">
        <nav>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index1.php">Home</a></li>
                    <li><a href="menu1.php">Menu</a></li>
                    <li><a href="mealreq_ad.php">Meal Entry</a></li>
                    <li><a href="bill_ad.php">Bill & Payment</a></li>
                    <li><a href="notice_ad.php">Notice</a></li>
                    <li><a href="remarks_ad.php">Remarks</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <hr class="line">

        <div id="main-content">
            <h2>Update Record</h2>
            <?php
            
            include 'connection.php';
            
            $sl= $_GET['sl'];
            $sql = "SELECT * FROM updatemenu WHERE SL = {$sl}";
            $result = mysqli_query($con, $sql) or die("Query failed");

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <form class="post-form" action="updatedata.php" method="POST">
                        <table class="table">
                            <tr>
                                <td>Day</td>
                                <td> <input type="text" name="Day" value="<?php echo  $row['Day']; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Meal Type</td>
                                <td><input type="text" name="Mealtype" value="<?php echo  $row['Mealtype']; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Meal Item</td>
                                <td><input type="text" name="Mealitem" value="<?php echo  $row['Mealitem']; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td><input type="text" name="Price" value="<?php echo  $row['Price']; ?>" /></td>
                            </tr>
                        </table>
                        <input class="submit" type="submit" name="submit" value="Update" />
                    </form>

            <?php }
              } ?>
        </div>

</body>

</html>