
<?php 
@include "config.php";

if(isset($_POST['submit'])){
    
    $First_name = $_POST['First-name'];
    $Last_name = $_POST['Last_name'];
    $Phone_num = $_POST['Phone_num'];
    $Email = $_POST['Email'];

    $sql = "UPDATE students SET `First_name`='$First_name',`Last_name`='$Last_name',`Phone_num`='$Phone_num',`Email`='$Email' WHERE Stu_Id =" .$_GET['Stu_Id'];

    $result = mysqli_query($conn2, $sql);
    $msg= 'new stu added '; 
    if($result){
        header("location: indexo.php?msg=DATA updated successfully");

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
    <div class="add-container">
        <div class="text-center mb-4  " style="margin: 230px;">
            <h3>Edit Student Infoormations</h3>
            <p class="text-muted"> Click update after changing any information !</p>
        </div>
        <?php 
    
        $sql = "SELECT * FROM students WHERE Stu_Id= ".$_GET['Stu_Id'];

        $result = mysqli_query($conn2, $sql);
        $row = mysqli_fetch_assoc($result);
        
        
        ?>


        <div class="add-container d-flex justify-content-center " >
            <form action="" method="post" style="width:50vw; min-width:300px; " >
            <div class="row">
                <div class="col">
                    <label class="form-label" > First Name </label>
                    <input type="text" class="form-control" name="First-name" value="<?php echo $row['First_name'] ?>" >
                </div>
                <div class="col mb-3">
                    <label class="form-label" > Last Name </label>
                    <input type="text" class="form-control" name="Last_name" value="<?php echo $row['Last_name'] ?>" >
                </div> 
                <div class="mb-3" >
                    <label class="form-label" > Phone Number </label>
                    <input type="number" class="form-control" name="Phone_num" value="<?php echo $row['Phone_num'] ?>" >
                </div> 
                <div class="mb-3">
                    <label class="form-label" > E-mail </label>
                    <input type="text" class="form-control" name="Email" value="<?php echo $row['Email'] ?>" >
                </div> 
                <div>
                    <button type="submit" class="btn btn-success" name="submit" > update</button>
                    <a href="indexo.php" class="btn btn-danger" > Cancel</a>

                    
                </div>
            </div>
            </form>
        </div>
        
    </div>




</body>
</html>