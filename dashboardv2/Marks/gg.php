<?php
@include "../configv2.php";

if (isset($_POST['submit'])) {
    $Maths = $_POST['Maths'];
    $JAVA = $_POST['JAVA'];
    $C_lan = $_POST['C-lang'];
    $Cplusplus = $_POST['Cplusplus'];

    $sql = "INSERT INTO `marks`(`marks_Id`,`Maths`, `JAVA`, `C_lan`, `Cplusplus`) VALUES (NULL,     '$Maths','$JAVA','$C_lan','$Cplusplus')";

    $result = mysqli_query($conn2, $sql);

    if ($result) {
        header("location: marks.php?msg=Student Marks added successfully");
    } else {
        echo "Failed: " . mysqli_error($conn2);
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
            <a href="ds.php" class="list-group-item list-group-item-action bg-transparent second-text active">
                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
            </a>
            <a href="../students/students.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fa-solid fa-graduation-cap me-2"></i>Students
            </a>
            <a href="marks.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fa-sharp fa-solid fa-file-lines me-2"></i>Marks
            </a>
            <a href="../Subjects/subjects.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
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
         

        <a class="btn btn-dark mb-4"  data-bs-toggle="modal" data-bs-target="#marksmodal" > Add Student Marks</a>

        <table class="table table-hover text-center "  >
            <thead>
                <tr>
                <th scope="col">Students Name</th>
                <th scope="col">Maths</th>
                <th scope="col">JAVA</th>
                <th scope="col">C language</th>
                <th scope="col">C++ language</th>
                <th scope="col">Action</th>
                
                </tr>
            </thead>
            <tbody class="table-group-divider">
                    <?php 
                        @include "../configv2.php";

                        $sql ="SELECT * FROM students ";
                        $sql2 ="SELECT * FROM markss ";

                        $result = mysqli_query($conn2, $sql);
                        $result2 = mysqli_query($conn2, $sql2);

                        while($row = mysqli_fetch_assoc($result)){
                            while($roww = mysqli_fetch_assoc($result2)){
                    ?>
                               <tr>
                                    <td> <?php echo $row['First_name'] ?> <?php echo $row['Last_name'] ?></td>
                                    <td> <?php echo $roww['Maths'] ?></td>
                                    <td> <?php echo $roww['JAVA'] ?></td>
                                    <td> <?php echo $roww['C_lan'] ?></td>
                                    <td> <?php echo $roww['Cplusplus'] ?></td>
                                    <td>
                                        <a href="edit.php?Stu_Id=<?php echo $row['Stu_Id'] ?>" class="link-dark"> <i class="fa-solid fa-pen-to-square fs-5 me-3" ></i> </a>    
                                        <a href="delete.php?Stu_Id=<?php echo $row['Stu_Id'] ?>" class="link-dark"> <i class="fa-solid fa-trash fs-5 " ></i> </a>                
                                    </td>
                
                                </tr>             

                            <?php
                        }}
                    ?>    
                </tr>
                
            </tbody>
        </table>

    </div>
    </div>
</div>
    <div class="modal fade modal-lg" id="marksmodal" tabindex="-1" role="dialog" aria-labelledby="marksmodalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="marksmodalLabel">Add Students marks</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="add-container">
                <div class="text-center mb-4  " style="margin: 20px;">
                    
                    <p class="text-muted"> complete the form below to add a new students Marks</p>
                </div>
                    <div class="add-container d-flex justify-content-center " >
                        <form action="" method="post" style="width:50vw; min-width:300px; " >
                            <div class="row">
                                <div class="Center" style="margin-left: 250px; margin-bottom: 50px; ">
                                    <label class="form-label Center" > Students Name : </label>
                                    <select id="student-name" name="student-name">
                                    <?php
                                    @include "../configv2.php";

                                    $query = "SELECT Stu_Id, First_name, Last_name FROM students";
                                    $result = mysqli_query($conn2, $query);

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $row['Stu_Id'] . '">' . $row['First_name'] . $row['Last_name'] . '</option>';
                                        }
                                    }
                                    ?>
                                    
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="form-label" > Maths </label>
                                    <input type="number" class="form-control" name="Maths" placeholder="Enter the Maths mark" >
                                </div> 
                                <div class="col mb-5">
                                    <label class="form-label" > JAVA </label>
                                    <input type="number" class="form-control" name="JAVA" placeholder="Enter the JAVA mark" >
                                </div> 
                                <div class="col mb-2">
                                    <label class="form-label" > C Language </label>
                                    <input type="number" class="form-control" name="C_lan" placeholder="Enter the C-Language mark" >
                                </div> 
                                <div class="col mb-5">
                                    <label class="form-label" > C++ Language </label>
                                    <input type="number" class="form-control" name="Cplusplus" placeholder="Enter the C++ Language mark" >
                                </div> 
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" name="submit" > save</button>
                                    <a href="marks.php" class="btn btn-danger" > Cancel</a>

                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        </div>
    </div>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>