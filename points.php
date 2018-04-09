<?php 
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

$sql = "SELECT reason, House_idHouse, points, Student_idStudent FROM points ORDER BY idPoints DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        $getStudentSQL = "SELECT first_name, middle_name, last_name FROM student WHERE idStudent = '".$row["Student_idStudent"]."'";
        $studentResult = mysqli_query($conn, $getStudentSQL);
        $firstName = mysqli_fetch_assoc($studentResult);
        
        
        echo "reason: " . $row["reason"]. " - House: " . $row["House_idHouse"]. " - points: " . $row["points"]. " - student: " . $firstName["first_name"]. "<br>";
}
} else {
    echo "0 results";
}

mysqli_close($conn);
?>