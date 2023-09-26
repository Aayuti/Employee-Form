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
    $sql = "INSERT INTO emptbl (emp_id, emp_name, emp_dept, emp_pos) VALUES ('$id', '$name', '$dept', '$pos')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";

    } else {
        echo "Unsuccessful";
    }

    mysqli_close($conn);
?> 