<?php
$conn = null;

try {
    $conn = new PDO("mysql:host=localhost:3306;dbname=id14871191_student", "saloni", "Salonisharma14#");
} catch(PDOException $e) {
    echo "Connection Error: " . $e->getMessage();
}
?>
