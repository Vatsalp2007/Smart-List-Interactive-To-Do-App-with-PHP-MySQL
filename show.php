<?php
    include('connect.php');
    $display = mysqli_query($connect,"select * from tasks");
    echo "<style>*{background-color:#252525;color:#fff;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;}</style>";
    echo "<center>";
    echo "<a href='index.html'><button class='backb' style='height: 50px;width: 70%;margin-top: 2%;border-radius: 7px;background-color:#fff;font-size:1.2vw;color:#252525;transition: all .5s;&:hover{transform: translateY(5px);box-shadow: 0 0 10px #252525;cursor: pointer;}'>Back</button></a>";
    echo "<br><br><table border=1 cellspacing=0 cellpadding=3 style=text-align:center;>";
        echo"<rt>  
                <th style='height:50px;width:150px;'>Task</th>
                <th style='height:50px;width:150px;'>Date</th>
                <th style='height:50px;width:150px;'>Complated!</th>
                <th style='height:50px;width:150px;'>Action</th>
            </tr>";
    while($data = mysqli_fetch_array($display)){
        echo "<tr>";
        echo "<td>" .$data['Task']. "</td>";
        echo "<td>" .$data['Date']. "</td>";
        echo "<td>" .$data['Complated']. "</td>";
?>

    <td>
        <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> <br>
        <a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
    </td>

<?php
    }
?>