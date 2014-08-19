<?php
require_once 'db.php';
if(isset($_POST['submit_student']))
{
    $ID= $_POST['id'];
    $name = $_POST['student_name'];
    $query = "update students set student_name='$name' where id='$ID' ";
    if (mysqli_query($con, $query))
    {
        echo 'Data updated successfully';
        echo '<a href="index.php">View Students</a>';
    }
}
?>