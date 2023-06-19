<?php
include ('config.php');

$user_id=$_GET['id'];

$sql="DELETE  FROM user where user_id ={$user_id}";
$result= mysqli_query($conn,$sql)or die ("query field");
if ($result) {
    echo "<script>
    document.location='users.php';
    </script>";
}

?>