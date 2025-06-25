<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
    <link rel="stylesheet" href="stylec2.css">
</head>
<body>
    <a href="index.html"><button class="backb">Back</button></a>
    <center>
        <h2 style="color:#fff;">ADD Your Task</h2> <br>
        <form action="insert.php" enctype="multipart/form-data" method="post">

            <input type="text" name="task" required id="task" placeholder="ADD Your Task"><br>
            <input type="date" name="date" id="date" class="data">
            
            <button type="submit" name="Submit">ADD Task</button>

        </form>
    </center>
</body>
</html>