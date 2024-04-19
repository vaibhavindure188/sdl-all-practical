


<?php
$servername = "localhost";
$username = "root";
$password = "vi18";
$database = "mydb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SHOW TABLES;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Tables in database $database:<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row["Tables_in_$database"] . "<br>";
    }
} else {
    echo "No tables found in database $database";
}

// Show data in users table
$sql_show_data = "SELECT * FROM users;";
$result_show_data = $conn->query($sql_show_data);

if ($result_show_data->num_rows > 0) {
    echo "<br>Data in users table:<br>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    while ($row = $result_show_data->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<br>No data found in users table";
}

$conn->close();
?>