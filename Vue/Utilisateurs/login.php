<?php $this->titre = "Connexion" ?>
<p>Page de connexion</p>
<h2>Pour se connecter en admin:</h2>
<p>login: admin</p>
<p>mot de passe: root</p>

<form action="Utilisateurs/connecter" method="post">
    <input name="login" type="text" placeholder="Entrez votre login" required autofocus>
    <input name="mdp" type="password" placeholder="Entrez votre mot de passe" required>
    <button type="submit">Connexion</button>
</form>

<?php if (isset($msgErreur)): ?>
 <p><?= $msgErreur ?></p>
<?php endif; ?>
