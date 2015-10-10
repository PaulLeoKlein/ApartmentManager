<?php
// Values received via ajax
$title = $_POST['atitle'];
$start = $_POST['astart'];
$end = $_POST['aend'];
$color = $_POST['acolor'];

// connection to the database
try {
$bdd = new PDO('mysql:host=localhost;dbname=fullcalendar', 'root', 'toor');
} catch(Exception $e) {
exit('Unable to connect to database.');
}

// insert the records
$sql = "INSERT INTO events (title, start, end, color) VALUES (:title, :start, :end, :color)";
$q = $bdd->prepare($sql);
$q->execute(array(':title' => $title, ':start' => $start, ':end' => $end, ':color' => $color));
?>
