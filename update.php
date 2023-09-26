<?php
    //Replace with your database connection details
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "companydb";

    $conn = mysqli_connect($hostname, $username, $password, $database);

    if(!$conn) 
    {
        die("Connection failed : ".mysqli_connect_error());
    }

    else {
       echo "Connection attempt was successful\n";
    }                                        

    //get data from the form
    $id = $_POST['empid'];
    $name = $_POST['empname'];
    $dept = $_POST['empdept'];
    $pos = $_POST['emppos'];

    //INSERT INTO THE DATABASE
    $sql = "UPDATE emptbl SET emp_name = '$name', emp_dept = '$dept', emp_pos = '$pos' WHERE emp_id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Data updated successfully";
        header("Location:retrieve.php");
        exit;
    } else {
        echo "Unsuccessful attempt to update";
    }

    mysqli_close($conn);
?> 