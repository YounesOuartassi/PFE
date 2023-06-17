<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <link rel="stylesheet" href="dsstyle.css" />
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
            <a href="../dashboard v2/students/students.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fa-solid fa-graduation-cap me-2"></i>Students
            </a>
            <a href="../dashboard v2/Marks/marks.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fa-sharp fa-solid fa-file-lines me-2"></i>Marks
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
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