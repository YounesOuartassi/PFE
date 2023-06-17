<?php 

@include "../configv2.php";


$sql = " DELETE FROM students WHERE Stu_ID = ".$_GET['Stu_Id'];

$result = mysqli_query($conn2, $sql);
if($result){
    header("Location: students.php?msg=Student deleted successfully");

}else{
    echo "Filed"  . mysqli_error($conn2);
}


?>