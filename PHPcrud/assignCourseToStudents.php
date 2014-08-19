<!DOCTYPE html>

<html>
    <head>
        <title>Assign Course To Student</title>
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
        
      <form method='GET'>
        <fieldset>
           <legend> Online Course Registration</legend>
             <?php 
               require_once 'student.php';
               require_once 'courses.php';
               require_once 'db.php';
               $get_course = mysqli_query($con, "SELECT title FROM courses");
               $get_student = mysqli_query($con, "SELECT student_name FROM students");
              ?>
          
           <label for="Student">Select Student: </label>
            <select id="student_name">
                <option>Select a Student</option>
                <option>
                <?php    
                while($option= mysqli_fetch_object($get_student))
                 {
                    echo '<option>'.$option->student_name.'</option>';
                 }
                ?>
                </option>

            </select><br/>
           
            <label for="Course">Select your course: </label>
            <select id="course_name" multiple="">
                <option>Select Course(s) </option>
                <option>
                <?php    
                while($option= mysqli_fetch_object($get_course))
                 {
                    echo '<option>'.$option->title.'</option>';
                 }
                ?>
                </option>

            </select><br/>
          
            <input type="submit" name="submit" value="Assign Course to Student" /><br/>
                
        </fieldset>    
      </form>
       </div> <!--page-wrapper ends -->       
      </div> <!-- wrapper ends -->
        <?php
           // Retrieve POST data
            if(isset($_POST['options']))
            {
                $course_name = $_POST["course_name"];
                //$course_code = $_POST["course_code"];
                $db_insert_course = "INSERT INTO course_registration (course_name, course_code) VALUES ('$course_name','$course_code')";
                mysqli_query($db_con, $db_insert4);
                
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


