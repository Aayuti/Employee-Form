<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 id="head">EMPLOYEE DETAILS</h1>
        </div>
        <!--        Form-->
        <form action="#" method="post">
            <div class="container-fluid">
                <label for="q1">EMPLOYEE ID</label>
                <input type="text" id="q1" name="empid"><br><br>
            </div>
            <div class="container-fluid">
                <label for="q2">EMPLOYEE NAME</label>
                <input type="text" id="q2" name="empname"><br><br>
            </div>
            <div class="container-fluid">
                <label for="q3">EMPLOYEE DEPT</label>
                <input type="text" id="q3" name="empdept"><br><br>
            </div>
            <div class="container-fluid">
                <label for="q4">EMPLOYEE POSITION</label>
                <input type="text" id="q4" name="emppos"><br><br>
            </div>
            <div class="btn">
                <input id="btn2" type="reset" value="RESET">
                <input id="btn1" type="submit" value="INSERT" formaction="insert.php">
                <input id="btn6" type="submit" value="VIEW" formaction="retrieve.php">
                <input id="btn3" type="submit" value="DELETE" formaction="delete.php">
                <input id="btn4" type="submit" value="UPDATE" formaction="update.php">
                <input id="btn5" type="submit" value="SEARCH" formaction="search.php">
            </div>
        </form>
    </div>
</body>
</html>