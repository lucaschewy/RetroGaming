<?php
require 'connect.php';

// Reques to to database (get nb_vote)
$q = $db->prepare("SELECT * FROM votes WHERE game = :game");
$q->bindParam(":game", $_GET["game"]);
$q->execute();

$nb_vote = $q->fetch(PDO::FETCH_ASSOC);

$nb_votes = $nb_vote["nb_vote"] +1 ;

$q = $db->prepare("UPDATE votes SET nb_vote= :nb_vote WHERE game = :game");
$q->bindParam(":nb_vote", $nb_votes);
$q->bindParam(":game", $_GET["game"]);
$q->execute();

header('Location: index.php');