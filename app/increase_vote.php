<?php
require 'connect.php';

// Reques to to database (get nb_vote)
$q = $db->prepare("SELECT * FROM votes WHERE game = :game");
$q->bindParam(":game", $_GET["game"]);
$q->execute();

$nb_vote = $q->fetch(PDO::FETCH_ASSOC);

if(isset($_COOKIE)){
    $message="Vous ne pouvez voter qu'une fois par jour";
    echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
}else{
    $nb_votes = $nb_vote["nb_vote"] +1 ;
    $q = $db->prepare("UPDATE votes SET nb_vote= :nb_vote WHERE game = :game");
    $q->bindParam(":nb_vote", $nb_votes);
    $q->bindParam(":game", $_GET["game"]);
    $q->execute();

    setcookie('votes', 'true', time() + 24*3600);

    header('Location: index.php');
}