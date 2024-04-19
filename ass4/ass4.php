<!DOCTYPE html>
<html>
<head>
    <title>Employee Search</title>
</head>
<body>

<?php
// Define the indexed array of employee names
$employee_names = array("John", "Alice", "Bob", "Emma", "Charlie", "David", "Eva", "Frank", "Grace", "Henry",
    "Ivy", "Jack", "Katie", "Liam", "Mary", "Nathan", "Olivia", "Peter", "Quinn", "Rachel");

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the employee name from the form
    $search_name = $_POST["search_name"];

    // Search for the name in the array
    
    if (in_array($search_name, $employee_names)) {
        echo "<p>$search_name is present in the array.</p>";
    } else {
        // If the name is not found, add it to the array
        array_push($employee_names, $search_name);
        echo "<p>$search_name was not present in the array. Added successfully!</p>";
    }
}

?>

<!-- Display the form for searching employee names -->
<form method="post" action="">
    <label for="search_name">Search Employee Name:</label>
    <input type="text" id="search_name" name="search_name">
    <input type="submit" value="Search">
</form>

</body>
</html>
