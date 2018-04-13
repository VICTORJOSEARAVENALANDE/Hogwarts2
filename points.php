<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Frontpage</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="assets/main.css" type="text/css" rel="stylesheet"/>
    </head>
    <body class="">
<?php 
                include_once('assets/header.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM  `house`";
$points = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($points)){
    echo($row["idHouse"]. " - ");
    echo($row["points"]);
    echo("<br>");
}
        
$sql = "SELECT reason, House_idHouse, points, Student_idStudent FROM points ORDER BY idPoints DESC";
$result = mysqli_query($conn, $sql);
?>
        <h1 class="pointsText">Registered Points</h1>
        <div>
            <div class="pointsHeader">
            <h3>Reason</h3>
            <h3>House</h3>
            <h3>Points</h3>
            <h3>Name</h3>
            </div>
        <?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        $getStudentSQL = "SELECT first_name, middle_name, last_name FROM student WHERE idStudent = '".$row["Student_idStudent"]."'";
        $studentResult = mysqli_query($conn, $getStudentSQL);
        $namerow = mysqli_fetch_assoc($studentResult);
        $name = "";
        if(isset($namerow["first_name"])){
            $name .= $namerow["first_name"];
        }
        
        if(isset($namerow["middle_name"])){
            if($name != ""){
                $name .= " ".$namerow["middle_name"];
            }
        }
        
        if(isset($namerow["last_name"])){
            if($name != ""){
                $name .= " ".$namerow["last_name"];
            }
        }
        
        echo "<div class='pointsDisplay'><p>". $row["reason"]."</p> <p>" . $row["House_idHouse"]. "</p> <p>" . $row["points"]. "</p><p>" . $name. "</p></div>";
}
} else {
    echo "0 results";
}
?>
        </div>
            <?php
mysqli_close($conn);
?>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>