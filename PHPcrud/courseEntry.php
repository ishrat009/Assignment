<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Course Database Connection</title>
         <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/sb-admin.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
       <div id="wrapper">  
         <div id="page-wrapper" class="container"> 
            <form method="POST">
             <fieldset>  
                <legend>Course Registration </legend>
                Course Title: <input type="text" name="course_name" placeholder="Enter course title" /><br/>
                Course Code: <input type="text" name="course_code" placeholder="Enter Course Code" /><br/>
                <input type="submit" name="submit" value="Register" /><br/>
            
            </fieldset>  
            </form>
             
         </div> <!--page-wrapper ends -->       
      </div> <!-- wrapper ends -->    
        
        <?php
        {
            require 'courses.php';
            require_once 'db.php';
            //session_start();
            if (isset($_POST['submit']))
            {
                $course = new Course($_POST['course_name'], $_POST['course_code']);
               // $_SESSION['student'] = $course;
//                print_r($_SESSION['course']);
//                exit();
                
            $course_name = mysqli_real_escape_string($con, $_POST['course_name']);
            $course_code = mysqli_real_escape_string($con, $_POST['course_code']);

            $sql = mysqli_query($con, "INSERT INTO courses (title, code)
            VALUES ('$course_name', '$course_code')") ; 
                 
            echo "One record added.";
            echo '<br/>'."Course database updated.";

            mysqli_close($con);
            }
        }   
        ?>
        
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
        
    </body>
</html>

