<?php

$servername = "localhost";
$dbname = "loginsystem_purewaternz";
$title = $_POST['title'];
$body = $_POST['body'];
$date = "Today";
$author = "Alex";

// Create connection
$conn = new mysqli($servername, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO articles (title, body, date, author)
VALUES ($title, $body, $date, $author)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>