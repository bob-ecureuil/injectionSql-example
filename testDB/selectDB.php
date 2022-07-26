<?php


// =================================================================
// Premier exemple, cas simple
// =================================================================
$sql1 = 'SELECT id, user, password FROM `user`';
$dbh->query($sql1); // $dbh est récupéré depuis le fichier connectDb.php
$result = $dbh->fetchObject();

while ($value = $dbh->fetchObject()) { // Tant que je récupère des éléments je boucle (voir documentation de PDO::fetchObject())
    var_dump($value);
}

// =================================================================
// Deuxième exemple, envoie de paramètre
// =================================================================
$sql2 = 'SELECT id, user, password FROM `user` WHERE id = ?';
$arrayParam = array('1'); // Chaque element du tableau correspond a un '?' dans la requête
$dbh->prepare($sql2);
$dbh->query($arrayParam);
$result = $dbh->fetchObject();

var_dump($result);

/*
$sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute(array(':calories' => 150, ':couleur' => 'red'));
$red = $sth->fetchAll();
$sth->execute(array(':calories' => 175, ':couleur' => 'yellow'));
$yellow = $sth->fetchAll();
*/