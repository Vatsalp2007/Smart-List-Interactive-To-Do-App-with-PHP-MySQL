<?php
    include('connect.php');
    $id = $_GET['id'];
    $display = mysqli_query($connect,"select * from tasks where id='$id'");
    $data = mysqli_fetch_array($display);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
    <link rel="stylesheet" href="styles3.css">
</head>
<body>
    <a href="show.php"><button class="backb">Back</button></a>
    <center>
        <h2 style="color:#fff;">Edit Your Task</h2> <br>
        <form action="update.php?id=<?php echo $id;?>" enctype="multipart/form-data" method="post">

            <input type="text" name="task" required id="task" placeholder="Update Your Task" value="<?php echo $data['Task']; ?>" ><br>
            <input type="date" name="date" id="date" value="<?php echo $data['Date']; ?>">
    <br>
            <h4 style="color:#fff;margin-top:50px;">Complated! <input type='checkbox' name="done" id="done" class="done" value="✅" style="width:10%;"></h4>
            
            <button type="submit" name="Submit">Update Task</button>

        </form>
    </center>
</body>
</html>