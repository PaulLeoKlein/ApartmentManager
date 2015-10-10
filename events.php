<?php
// List of events
// $json = array();
 // Query that retrieves events
 $requete = "SELECT * FROM events ORDER BY id";
 // connection to the database
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=fullcalendar', 'root', 'toor');
 } catch(Exception $e) {
  exit('Unable to connect to database.');
 }

 // Execute the query
$resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
 // sending the encoded result to success page
//$result = ($resultat->fetchAll(PDO::FETCH_ASSOC));
echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));
?>
