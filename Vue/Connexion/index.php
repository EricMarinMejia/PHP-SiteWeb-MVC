<?php $this->titre = "Connexion" ?>
<p>Vous devez être connecté pour accéder à cette zone.</p>

<form action="Connexion/connecter" method="post">
    <input name="login" type="text" placeholder="Entrez votre login" required autofocus>
    <input name="mdp" type="password" placeholder="Entrez votre mot de passe" required>
    <button type="submit">Connexion</button>
</form>

<?php if (isset($msgErreur)): ?>
 <p><?= $msgErreur ?></p>
<?php endif; ?>
