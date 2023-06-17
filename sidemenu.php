
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Form</title>

   <link rel="stylesheet" href="/css/tstt.css">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-backgroung-color="black" data-active-color="danger">
    <div class="sidebar-wrapper" id="sideLinks">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    Center Management 
                </a>
            </div>
            <ul class="nav">
                <li class="" id="dashboard">
                    <a href="dashboard.php" class="menu-link">
                        <i class="ti-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li id="students">
                    <a href="students.php" class="menu-link">
                        <i class="ti-user"></i>
                        <p>Students</p>
                    </a>
                </li>
                <li id="classes">
                    <a href="classes.php" class="menu-link">
                        <i class="ti-crown"></i>
                        <p>Classes</p>
                    </a>
                </li>
                <li id="teacher">
                    <a href="teacher.php" class="menu-link">
                        <i class="ti-home"></i>
                        <p>Teachers</p>
                    </a>
                </li>
				<li id="subjects">
                    <a href="subjects.php" class="menu-link">
                        <i class="ti-home"></i>
                        <p>Subjects</p>
                    </a>
                </li> 				
            </ul>
    	</div>
    </div>

<div class="main-panel">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar bar1"></span>
					<span class="icon-bar bar2"></span>
					<span class="icon-bar bar3"></span>
				</button>
				<a class="navbar-brand" href="#">Center Management System</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="logout.php"><i class="fa fa-power-off"></i> <strong>Logout</strong></a>
						</ul>
					</li>
				</ul>
				</li>
				</ul>
			</div>
		</div>
	</nav>
</body>