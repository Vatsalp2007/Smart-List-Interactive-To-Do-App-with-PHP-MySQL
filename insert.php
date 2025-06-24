<?php 
    if(isset($_POST['Submit'])){
        include('connect.php');

        $Task = $_POST['task'];
        $Date = $_POST['date'];

        $result = mysqli_query($connect,"insert into tasks(Task,Date) values('$Task','$Date')");
        if($result){
            echo "<script>alert('Task Added Successfully!..');</script>";
            echo "<script>window.location.href='show.php'</script>";
        }
        else{
            echo "<script>alert('Issue while adding a task!..');</script>";
            echo "<script>window.location.href='create.php'; return false;</script>";
        }
    }
?>