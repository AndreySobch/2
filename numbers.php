<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "numbers";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$sql = "SELECT number, color FROM numbers_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<span style='color:" . $row["color"] . ";'>" . $row["number"] . "</span> ";
    }
} else {
    echo "Нет данных";
}

$conn->close();
?>
