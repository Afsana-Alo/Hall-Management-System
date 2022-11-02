<!-- <?php   
  require('connection.php');
  session_start();
  
  #for login
  if(isset($_POST['login']))
  {
    $query="SELECT * FROM `admin_login` WHERE `id`='$_POST[Admin_ID]' AND `pass`='$_POST[Password]'";
    $result=mysqli_query($con,$query);
    
    if($result)
    {
      if(mysqli_num_rows($result)==1)
      {
        $result_fetch=mysqli_fetch_assoc($result);
        if(password_verify($_POST['Password'],$result_fetch['pass']))
        {
          $_SESSION['logged_in']=true;
          $_SESSION['Admin_ID']=$result_fetch['id'];
          header("location: otp.php");
        }
        else
        {
          echo"
            <script>
              alert('Incorrect Password');
              window.location.href='index.php';
            </script>
          ";
        }
      }
    }
    else
    {
      echo"
        <script>
          alert('Cannot Run Query');
          window.location.href='index.php';
        </script>
      ";
    }
  }
  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" type="text/css" href="fontawsome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Login</title>
</head>
<body>
    <h1>
        BUP Student Hall Management System
    </h1>

    <div class="container">
        <div class="header">
            <p><b>BANGLADESH UNIVERSITY OF PROFESSIONALS</b></p>
            <img src="images/bupim.png">
            <h5>Enter your BUP ID and Password </h5>
        </div>
        <div class="main">
            <form action="/" method="post">
                <span>
                    <i class="fa-solid fa-user" ></i>
                <input type="text" placeholder="username" name="Student_ID" required>
                </span><br>
                <span>
                    <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="password" name="password" id="password" >
                </span><br>
                    <p><a href=""><b>Forgot password?</b></a></p><br>
                <button type="submit" name="login">Login</button><br>
            </form>

        </div>
    </div>
    <script src="login.js"></script>
</body>
</html> -->