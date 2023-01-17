<?php 
  include "../connection.php"; 
  session_start();
  if (!isset($_SESSION['email'])) {
    header("location:login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  <?php
    $get_id = $_GET['id'];
    $delete = mysqli_query($con,"DELETE FROM services WHERE id=$get_id");
    if ($delete) {
      echo "<script>
                        swal({
                          title: 'Good job!',
                          text: 'Record Deleted Successfully!',
                          icon: 'success',
                        }).then(function() {
                            window.location = 'services.php';
                        });
                    </script>";
    }
    else
    {
      echo "<script>
                        swal({
                          title: 'Failed!',
                          text: 'An Error Occured!',
                          icon: 'error',
                        }).then(function() {
                            window.location = 'services.php';
                        });
                    </script>";
    }
  
?>
</body>
</html>

