<?php
$conn = new mysqli("localhost", "root", "", "hotel_management");

if (isset($_POST['search'])) {
    $search = $_POST['search_term'];
    $sql = "SELECT * FROM guests WHERE guest_name LIKE '%$search%' OR reservation_number LIKE '%$search%'";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head><title>Search Guests</title></head>
<body>
    <h2>Search Guests</h2>
    <form method="post">
        <input type="text" name="search_term" placeholder="Enter guest name or reservation number">
        <button type="submit" name="search">Search</button>
    </form>
    <table border="1">
        <tr><th>Guest Name</th><th>Reservation Number</th><th>Check-in Date</th><th>Check-out Date</th><th>Room Number</th></tr>
        <?php
        if (isset($result) && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['guest_name']}</td><td>{$row['reservation_number']}</td><td>{$row['check_in_date']}</td><td>{$row['check_out_date']}</td><td>{$row['room_number']}</td></tr>";
            }
        }
        ?>
    </table>
</body>
</html>
