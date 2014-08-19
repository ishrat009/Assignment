<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Information</title>
        
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
              <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Student <small>Information Overview</small>
                        </h1>
                    </div>
                </div>

        <?php
        {
            require_once 'student.php';
            require_once 'db.php';
            //session_start();               
                $sql = mysqli_query($con, "SELECT * FROM Students");  
        ?>
                <div>
                    <table border='1'>
                    <tr class="warning">
                    <th>Student Id</th>
                    <th>Student Name</th>
                    <th>Creation Date</th>
                    <th> Action </th>
                    </tr>
                <?php
                while($row = mysqli_fetch_array($sql)) 
                {   
                 ?>   
                    <tr class="success">
                    <td> <?php echo $row['id'] ?> </td>
                    <td> <?php  echo $row['student_name'] ?> </td>
                    <td> <?php echo $row['created'] ?> </td>
                    <td> <a href="studentDetails.php?id=<?php echo $row['id']; ?>"> View</a> |
                        <a href="editStudent.php?id=<?php  echo $row['id']; ?>"> Edit </a> |
                        <a href="deleteStudent.php?id=<?php echo $row['id']; ?>"> Delete </a>
                    
                    </td>
                    </tr>
                    
                <?php    
                }
                ?>
                    </table>
                </div>
              
              <?php
             mysqli_close($con);  
            }   
              ?>
        
           </div> <!--page-wrapper ends -->       
      </div> <!-- wrapper ends -->
              
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