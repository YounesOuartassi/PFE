<?php
@include "../configv2.php";
if (isset($_POST['submit'])) {
    //$marks_Id = $_POST['marks_Id'];
    $Stu_Id = $_POST['Stu_Id'];
    $Maths = $_POST['Maths'];
    $JAVA = $_POST['JAVA'];
    $C_lan = $_POST['C_lan'];
    $Cplusplus = $_POST['Cplusplus'];


    $sql = "INSERT INTO `markss` (marks_Id ,Stu_Id ,Maths, JAVA, C_lan, Cplusplus) VALUES (NULL,'$Stu_Id','$Maths','$JAVA','$C_lan','$Cplusplus') ";

    $result = mysqli_query($conn2, $sql);

    if ($result) {
        header("location: marks.php?msg=Student Marks added successfully");
    } else {
        echo "Failed: " . mysqli_error($conn2);
    }
}
?>

<div class="add-container">
                <div class="text-center mb-4  " style="margin: 20px;">
                    
                    <p class="text-muted"> complete the form below to add a new students Marks</p>
                </div>
                    <div class="add-container d-flex justify-content-center " >
                        <form action="" method="post" style="width:50vw; min-width:300px; " id="marks-form">
                            <div class="row">
                                <div class="Center" style=" margin-bottom: 50px; ">
                                    <label class="form-label Center fw-bold" style="margin-left: 300px;  "> Select a STUDENT </label>
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="margin-left: 0px;" id="student-name" name="student-name">
                                    <option selected  >Students name :</option>
                                    <?php
                                    @include "../configv2.php";

                                    $query = "SELECT Stu_Id, First_name, Last_name FROM students ";
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