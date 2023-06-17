
<?php
@include 'configlog.php';

 if(isset($_POST['submit'])){
    $PPR = mysqli_real_escape_string($conn, $_POST['PPR']);
    $CIN = mysqli_real_escape_string($conn, $_POST['CIN']);
    $Phone_num = mysqli_real_escape_string($conn, $_POST['Phone_num']);
    $Birthdate = mysqli_real_escape_string($conn, $_POST['Birthdate']);    
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    $user_type = $_POST['user_type'];
    
    $select = " SELECT * FROM admin_form WHERE PPR = '$PPR' && password = '$password' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'user already exists !';

    }else{
        if($password != $cpassword){ 
        $error[] = 'passwords dont match !' ;}
        else{
            $insert = "INSERT INTO admin_form(PPR,	CIN,	Phone_num,	Birthdate,	Password,	user_type) VALUES('$PPR','$CIN','$Phone_num','$Birthdate','$password','$user_type')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
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
   <title>Register Form</title>

   <link rel="stylesheet" href="../usersstyles.css">

</head>
<body>
    <div class="form-container">
        <form action="" method="post">
        <h3>Register Now</h3>
        <?php 
        if(isset($error)){
            foreach($error as $error){
                echo '<span class"error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="text" name="PPR" required placeholder="Enter your PPR">
        <input type="text" name="CIN" required placeholder="Enter your CIN">
        <input type="number" name="Phone_num" required placeholder="Enter your Phone Number">
        <input type="date" name="Birthdate" required placeholder="Enter your Date of Birth">
        <input type="password" name="password" required placeholder="Enter your Password">
        <input type="password" name="cpassword" required placeholder="Confirm your Password">
        <select name="user_type">
            <option value="admin">Admin</option>
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
        </select>
        <input type="submit" name="submit" value="register now" class="form-btn">
        <p>already have an account? <a href="login_form.php">login now</a></p>
        </form>
    </div>
</body>
</html>