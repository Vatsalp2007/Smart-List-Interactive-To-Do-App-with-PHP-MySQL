<?php 
    include('connect.php');

    $id = $_GET['id'];
    $display = mysqli_query($connect, "delete from tasks where id='$id'");
    if($display){
        echo "<script>alert('Data Deleted Successfully..');</script>";
        echo "<script>window.location.href='show.php'</script>";
    }
    else{
        echo "<script>alert('Issue while Delete a task');</script>";
        echo "<script>window.location.href='show.php'</script>";
    }
?>