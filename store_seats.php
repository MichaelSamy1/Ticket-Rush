<?php 
$con = new mysqli("localhost","root","","ticket");
                  if($con->connect_error){
                      die("failed to connect:".$con->connect_error);
                    }
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['seats'])) {
    $selected_seats = $_POST['seats'];
    $sql = "UPDATE seat SET is_booked = 1 WHERE seat_number IN (" . implode(",", $selected_seats) . ")";
    if ($con->query($sql) === TRUE) {
        header('location: Payment.html');
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
} else {
    echo "No seats selected";
}

$con->close();
?>