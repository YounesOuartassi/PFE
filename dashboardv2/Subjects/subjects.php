<?php 
@include "configv2.php";

if(isset($_POST['submit'])){
    //$Stu_Id = $_POST['Stu_Id'];
    $First_name = $_POST['First-name'];
    $Last_name = $_POST['Last_name'];
    $Phone_num = $_POST['Phone_num'];
    $Email = $_POST['Email'];

    $sql = "INSERT INTO `students`(`Stu_Id`, `First_name`, `Last_name`, `Phone_num`, `Email`) VALUES (NULL,'$First_name','$Last_name','$Phone_num','$Email')";

    $result = mysqli_query($conn2, $sql);
    
    if($result){
        header("location: students.php?msg=New Student added successfully");

    }else{
        echo "Failed: " .mysqli_error($conn2);
    }
}
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <link rel="stylesheet" href="../dsstyle.css" />
   <title>Center Management</title>

</head>
<body>
<div class="d-flex" id="wrapper">
    <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom ">
            <i class="fas fa-user me-2"></i><br>MANAGEMENT
        </div>
        <div class="list-group list-group-flush my-3">
            <a href="../ds.php" class="list-group-item list-group-item-action bg-transparent second-text active">
                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
            </a>
            <a href="../students/students.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fa-solid fa-graduation-cap me-2"></i>Students
            </a>
            <a href="../Marks/marks.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fa-sharp fa-solid fa-file-lines me-2"></i>Marks
            </a>
            <a href="subjects.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fa-solid fa-book me-2"></i>Subjects
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fa-solid fa-school me-2"></i>Classes
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold ">
                <i class="fa-solid fa-right-from-bracket me-2 "></i>LogOut
            </a>
        </div>
    </div>
    <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center"> 
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-regular fa-user me-2"></i>younes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Students</p>
                            </div>
                            <i class="fas fa-graduation-cap fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">4920</h3>
                                <p class="fs-5">Classes</p>
                            </div>
                            <i
                                class="fa-solid fa-school fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">3899</h3>
                                <p class="fs-5">Subjects</p>
                            </div>
                            <i class="fa-solid fa-book fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    
                </div>
        </div>
    

      
    <div class="add-container " style="margin-top: 40px; margin-left: 27px;" >    
    <?php 
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        ?>
    <a  class="btn btn-dark mb-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop" > Add new Subject</a>
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
                        @include "../configv2.php";

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
                                        <a href="stu-del.php?Stu_Id=<?php echo $row['Stu_Id'] ?>" class="link-dark"> <i class="fa-solid fa-trash fs-5 " ></i> </a>                
                                    </td>
                
                                </tr>             

                            <?php
                        }
                    ?>    
                </tr>
                
            </tbody>
        </table>
    
</div>
    <div class="modal fade modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add new Student</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <div class="add-container">
                    <div class="text-center mb-4  " style="margin: 100px;">
                        
                        <p class="text-muted"> complete the form below to add a new student</p>
                    </div>
                    <div class="add-container d-flex justify-content-center " >
                        <form action="" method="post" style="width:50vw; min-width:300px; " >
                        <div class="row">
                            <div class="col">
                                <label class="form-label" > First Name </label>
                                <input type="text" class="form-control" name="First-name" placeholder="Enter your First Name" >
                            </div>
                            <div class="col mb-3">
                                <label class="form-label" > Last Name </label>
                                <input type="text" class="form-control" name="Last_name" placeholder="Enter your Last Name" >
                            </div> 
                            <div class="mb-3" >
                                <label class="form-label" > Phone Number </label>
                                <input type="number" class="form-control" name="Phone_num" placeholder="Enter your Phone Number" >
                            </div> 
                            <div class="mb-3">
                                <label class="form-label" > E-mail </label>
                                <input type="text" class="form-control" name="Email" placeholder="Enter your E-mail" >
                            </div> 
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="submit" > save</button>
                                <a href="students.php" class="btn btn-danger" > Cancel</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>