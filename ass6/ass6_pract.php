<?php


$conn = new mysqli("localhost", "root", "vi18", "emp");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    // echo $id."  ".$name. "  ".$email;
    $mysecondQuery = "insert into etable values($id, '$name', '$email');";
    $conn->query($mysecondQuery);


    $myQuery = "select * from etable;";

    $resul = $conn->query($myQuery);

    while ($row = $resul->fetch_assoc()) {
        echo $row["id"] . "  " . $row["name"] . "   " . $row["email"] . "  <br/> ";
    }
}

?>


<form action="" method="post">

    <input type="number" placeholder="id" name="id"> <br />
    <input type="text" placeholder="name" name="name"> <br />
    <input type="text" placeholder="email" name="email"> <br />
    <input type="submit" value="submit">

</form>