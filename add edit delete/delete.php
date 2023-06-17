<?php 

@include "config.php";


$sql = " DELETE FROM students WHERE Stu_ID = ".$_GET['Stu_Id'];

$result = mysqli_query($conn2, $sql);
if($result){
    header("Location: indexo.php?msg=Student deleted successfully");

}else{
    echo "Filed"  . mysqli_error($conn2);
}


?>