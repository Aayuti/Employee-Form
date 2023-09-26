<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        input {
            background-color: lightblue;
            border: none;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <h3>Results found</h3>
    <?php 
    $hostname="localhost";
    $username="root";
    $password="";
    $database="companydb";

    $conn=mysqli_connect($hostname,$username,$password,$database);
    if(!$conn)
    {
        die("error: ".mysqli_connect_error());
    }
    $id=$_POST['empid'];
    $name=$_POST['empname'];
    $dept=$_POST['empdept'];
    $pos=$_POST['emppos'];

    $sql ="SELECT * FROM emptbl WHERE emp_dept='$dept'";
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
        echo'<tr>
        <td><input type="text" value="'.$row["emp_id"].'"></td>
        <td><input type="text" value="'.$row["emp_name"].'"</td>
        <td><input type="text" value="'.$row["emp_dept"].'"</td>
        <td><input type="text" value="'.$row["emp_pos"].'"</td>
        </tr>';
    }
    echo "</table>";
    }
    else
    {
        echo "NO RESULTS";
    }
    mysqli_close($conn);
    ?>
</body>
</html> 