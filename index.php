<?php
require_once 'elements/header.php';
require_once 'conectDb.php';

?>

<div class="container">
    <h1>Formulaire d'inscription</h1>

<form action="" method="post">
<div class="form-group">
    <div class="mb-3">
        <input type="text" name="username" placeholder="Votre pseudo" class="form-control">
    </div>
    <div class="mb-3">
        <input type="password" name="password" placeholder="Votre mot de passe" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Soumettre</button>
    </div>
<?php $sql = 'SELECT id, user, password FROM `user`';
var_dump($sql);?>    
</div>
</form>
