<?php 
include('connect.php');
$id=$_GET['id'];

$Task=$_POST['task'];
$Date=$_POST['date'];
$done=$_POST['done'];


$result=mysqli_query($connect,"update tasks set Task='$Task',Date='$Date',Complated='$done' where id = '$id'");

if($result){
    echo "<script>alert('Task Updated Successfully:')</script>";
    echo "<script>window.location.href='show.php'</script>";
}
else{
    echo "<script>alert('Issus To Update Task:')</script>";
    echo "<script>window.location.href='show.php'</script>";
}
?>