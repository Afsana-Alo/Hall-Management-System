<?php 
    require ('connection.php');
    session_start();

    $Student_ID= " " ;
    $password= " " ;
    $errors= array();

    $db= mysqli_connect("localhost","root", "1234Suzana.","Hall Management System");

    // login user
    if(isset($POST['login_user'])){
        $Student_ID = mysqli_real_escape_string($db, $_POST['Student_ID']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(empty($Student_ID)) {
            array_push($errors, 'ID is  required');
        }
        if(empty($password)) {
            array_push($errors, 'Password is  required');
        }

        if(count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM Student-login WHERE username = '$Student_ID' and password = '$password'";
            $results = mysqli_query($db, $query);
            if(mysqli_num_rows($results) == 1)  {
                $_SESSION['username'] = $Student_ID;
                $_SESSION['success'] = true;
                header("location: index.php");
            }
            else{
                array_push($errors, "Invalid ID or password");
            }
        }
    }
?>