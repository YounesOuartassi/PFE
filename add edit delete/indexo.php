
<?php 
@include "config.php";

if(isset($_POST['submit'])){
    $Stu_Id = $_POST['Stu_Id'];
    $First_name = $_POST['First-name'];
    $Last_name = $_POST['Last_name'];
    $Phone_num = $_POST['Phone_num'];
    $Email = $_POST['Email'];

    $sql = "INSERT INTO `students`(`Stu_Id`, `First_name`, `Last_name`, `Phone_num`, `Email`) VALUES (NULL,'$First_name','$Last_name','$Phone_num','$Email')";

    $result = mysqli_query($conn2, $sql);


    if($result){
        header("location: indexo.php?msg=New Student added successfully");

    }else{
        echo "Failed: " .mysqli_error($conn2);
    }
}
?>







<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Add new student</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <div class="add-container " style="margin-top: 230px; margin-left: 100px;" >

        <?php 
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        ?>
         

        <a href="add.php" class="btn btn-dark mb-4"  > Add new Student</a>

        <table class="table table-hover text-center "  >
            <thead>
                <tr>
                <th scope="col">Student Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
                
                </tr>
            </thead>
            <tbody class="table-group-divider">
                    <?php 
                        @include "config.php";

                        $sql ="SELECT * FROM students ";

                        $result = mysqli_query($conn2, $sql);

                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                               <tr>
                                    <td> <?php echo $row['Stu_Id'] ?></td>
                                    <td> <?php echo $row['First_name'] ?></td>
                                    <td> <?php echo $row['Last_name'] ?></td>
                                    <td> <?php echo $row['Phone_num'] ?></td>
                                    <td> <?php echo $row['Email'] ?></td>
                                    <td>
                                        <a href="edit.php?Stu_Id=<?php echo $row['Stu_Id'] ?>" class="link-dark"> <i class="fa-solid fa-pen-to-square fs-5 me-3" ></i> </a>    
                                        <a href="delete.php?Stu_Id=<?php echo $row['Stu_Id'] ?>" class="link-dark"> <i class="fa-solid fa-trash fs-5 " ></i> </a>                
                                    </td>
                
                                </tr>             

                            <?php
                        }
                    ?>    
                </tr>
                
            </tbody>
        </table>

    </div>




</body>
</html>