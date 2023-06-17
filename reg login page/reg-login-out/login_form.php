
<?php
@include 'configlog.php';

 if(isset($_POST['submit'])){
    $PPR = mysqli_real_escape_string($conn, $_POST['PPR']);    
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $select = " SELECT * FROM admin_form WHERE PPR = '$PPR' && password = '$password' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    if($row['user_type'] == 'admin'){

        $_SESSION['admin_PPR'] = $row['PPR'];
        header('location: ../users/admin/admin_page.php');
    }
    elseif($row['user_type'] == 'student'){

        $_SESSION['student_PPR'] = $row['PPR'];
        header('location: ../users/student/stu_page.php');

    }elseif($row['user_type'] == 'teacher'){

        $_SESSION['teacher_PPR'] = $row['PPR'];
        header('location: ../users/prof/prof_page.php');

    }
    else{
        $error[] = 'incorrect PPR or password';
    }
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>

   <link rel="stylesheet" href="../usersstyles.css">

</head>
<body>
    <div class="form-container">
        <form action="" method="post">
        <h3>Login Now</h3>
        <?php 
        if(isset($error)){
            foreach($error as $error){
                echo '<span class"error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="text" name="PPR" required placeholder="Enter your PPR">
        <input type="password" name="password" required placeholder="Enter your Password">
        <input type="submit" name="submit" value="Login now" class="form-btn">
        <p>don't have an account? <a href="register_form.php">register now</a> </p>
        </form>
    </div>
</body>
</html>