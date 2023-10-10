<?php
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "Name: " . $row[“username”]. " " . $row[“email”]. "<br>";
  }
  