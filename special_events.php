<?php
// Values received via ajax
$eventColor = $_POST['Color'];
$eventTitle = $_POST['EventTitle'];
$eventStartTime = $_POST['StartTime'];
$eventEndTime = $_POST['EndTime'];
$dateofinitialEvent = $_POST['EventDate'];
$howManyWeeks = $_POST['RecurringWeeks'];
$_POST['check_list'];
echo $createEventondays;
echo $howManyWeeks;
// connection to the database
try {
$bdd = new PDO('mysql:host=localhost;dbname=fullcalendar', 'root', 'toor');
} catch(Exception $e) {
exit('Unable to connect to database.');
}

// insert the records
//$sql = "INSERT INTO events (title, start, end, color) VALUES (:title, :start, :end, :color)";
//$q = $bdd->prepare($sql);
//$q->execute(array(':title' => $title, ':start' => $start, ':end' => $end, ':color' => $color));
?>
