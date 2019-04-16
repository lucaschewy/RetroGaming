<?php
require 'connect.php';

$id = '';
$pseudo = $_POST['pseudo'];
$game = $_POST['choix'];
$message = $_POST['message'];

$q = $db->prepare('INSERT INTO commentaires(id, commentaire, pseudo, game) VALUES(:id, :commentaire, :pseudo, :game)');
$q->execute(array(
    'id' => $id,
	'commentaire' => $message,
	'pseudo' => $pseudo,
	'game' => $game,
    ));
    
header("Location: index.php")
?>