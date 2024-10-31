<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['add_employee'])) {
    $name = $_POST['employee_name'];
    $empID = $_POST['employee_id'];
    $role = $_POST['role'];
    $sql = "INSERT INTO employees (employee_name, employee_id, role) VALUES ('$name', '$empID', '$role')";
    if ($conn->query($sql) === TRUE) {
        echo "Employee successfully added";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['delete_employee'])) {
    $empID = $_POST['employee_id'];
    $sql = "DELETE FROM employees WHERE employee_id='$empID'";
    if ($conn->query($sql) === TRUE) {
        echo "Employee deleted";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Add/Delete Employee</title></head>
<body>
    <h2>Add or Delete Employee</h2>
    <form method="post">
        Employee Name: <input type="text" name="employee_name" required><br>
        Employee ID: <input type="text" name="employee_id" required><br>
        Role: <input type="text" name="role" required><br>
        <button type="submit" name="add_employee">Add Employee</button>
        <button type="submit" name="delete_employee">Delete Employee</button>
    </form>
</body>
</html>
