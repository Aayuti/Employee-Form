<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve</title>
    <style>
        h3 {
            padding-left: 200px;
            color: navyblue;
            text-decoration: underline;
        }
        
        td {
            background-color: lightblue;
            padding: 5px;
            height: 10px;
            width: 70px;
        }

        td:nth-child(4) {
            width: 150px;
        }
    </style>
</head>
<body>
    <h3>DATA</h3>
    <?php
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "companydb";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if(!$conn)
    {
        die("error: ".mysqli_connect_error());
    }

    $sql ="SELECT * FROM emptbl";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0)
    {
        echo "<table border='0'>
        <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>DEPARTMENT</th>
        <th>POSITION</th>
        </tr>";

    while($row=mysqli_fetch_assoc($result))
    {
        echo"<tr>
        <td>".$row['emp_id']."</td>
        <td>".$row['emp_name']."</td>
        <td>".$row['emp_dept']."</td>
        <td>".$row['emp_pos']."</td>
        </tr>";
    }
    echo "</table>";
    }
    else
    {
        echo "Not Retrieved";
    }
    mysqli_close($conn);

    ?>
</body>
</html> 