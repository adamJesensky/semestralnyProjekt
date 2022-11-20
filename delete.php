<?php
include "connection.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string
echo $id;
$del = mysqli_query($con,"delete from users where usersId = '$id'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
     // redirects to all records page
     header("location:admin.php");
//     echo "
//     <script>
//     Swal.fire({
//       position: 'top-mid',
//       icon: 'success',
//       title: 'Vymazal si člena',
//       showConfirmButton: false,
//       timer: 1500
//     });
//     </script>
// ";
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>