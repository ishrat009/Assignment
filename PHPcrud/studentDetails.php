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
                    Student <small>Information Details</small>
                </h1>
            </div>
        </div>

        <?php
        {

            require_once 'db.php';

            $ID=$_GET['id'];
            $query = "SELECT * FROM Students WHERE id='$ID'";
            $sql = mysqli_query($con, $query);
            $row = mysqli_fetch_object($sql);

            ?>

            <td> <?php echo $row->id; ?> </td>
            <td> <?php  echo $row->student_name; ?> </td>
            <td> <?php echo $row->created; ?> </td>


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