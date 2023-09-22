<?php $this->titre = 'À propos du site MVC'; ?>

<h1>À propos</h1>
<hr />

<br />
<h3>Informations générales</h3>
<p>Site Web à but pédagogique pour apprendre les différentes phases d'un site MVC<p>
<ul>
    <a href="https://github.com/EricMarinMejia/PHP-SiteWeb-MVC/tree/MVC-SIMPLE" target="_blank"><li>MVC Simple</li></a>
    <a href="https://github.com/EricMarinMejia/PHP-SiteWeb-MVC/tree/MVC-PROCEDURAL" target="_blank"><li>MVC Procédural</li></a>
    <a href="https://github.com/EricMarinMejia/PHP-SiteWeb-MVC/tree/MVC-OBJET" target="_blank"><li>MVC Orienté Objet</li></a>
    <a href="https://github.com/EricMarinMejia/PHP-SiteWeb-MVC/tree/MVC-FRAMEWORK" target="_blank"><li>MVC Framework</li></a>
    <a href="https://github.com/EricMarinMejia/PHP-SiteWeb-MVC/tree/MVC-AUTHENTIFICATION" target="_blank"><li>MVC avec authentification simple</li></a>
</ul>

<p>Note: La sécurité des données n'est pas le but visé pour ce projet</p>
<br />
<hr/>

<br />
<h3>Description du site et des fonctionalitées</h3>
<p>
L'application "Gestionnaire de réparations automobiles" permet d'entrer et de gérer des enregistrements de réparations, des véhicules et des utilisateurs. <br />
La page Réparations présente la liste des réparations des véhicules avec la description et la date. <br />
Elle offre également la possibilité d'ajouter une nouvelle entrée de réparation (seulement par un utilisateur en session). <br />
La page Réparations permet aussi de modifier ou supprimer une entrée (seulement par un utilisateur en session). <br />
Il est possible ensuite de cliquer sur n'importe quelle entrée et voir tout les détails ainsi qu'un lien vers le véhicule sur lequel la réparation à été faite. <br />
<br />
La page Véhicules présente la liste de véhicules enregistrés dans le système en affichant la plaque d'immatriculation, la marque et le modèle. <br />
Tout comme la page Réparations, elle permet également au utilisateurs connectés d'ajouter un nouveau véhicule et de le lier à un utilisateur. <br />
Chaque véhicule peut être cliquer pour afficher ses détails, l'historique des réparation de ce véhicule ainsi qu'un lien vers son utilisateur. <br />
<br />
La page utilisateur permet d'afficher une liste des utilisateurs enregistrés.<br />
Celle-ci permet de clicker sur les profils pour montrer ses informations et tout les véhicules de l'utilisateur.<br />
</p>
<br />
<hr />

<br />
<h3>Relations entre les tables</h3>
<p>Ce site utilise une relation 1 -> n pour les tables reparations et vehicules<br />
et une relation 1 -> n pour la table vehicules et utilisateurs.</p>
<br />
<hr />

<br/>
<h3>Comment effectuer un test</h3>
<p>Pour effectuer un test: il faut cliquer sur "-> TESTS <-" dans la barre de navigation.<br />
Il est ensuite possible de tester le modèle reparation, vehicule et leurs vues index respectives.<br />
Note: il faut mettre en place la base de données fourni avec ce projet pour avoir les modèles demandés.</p>
<br />
<hr />

<br/>
<h3>Comment démarrer une session</h3>
<p>Pour démarrer une session il faut cliquer sur la section "connexion" de la barre de navigation.<br />
Pour tester, veuillez utiliser le compte -> Login: admin - Mot de passe: root.</p>
<br />
<hr />

<br />
<h3>Diagramme de la base de données</h3>
<img src="img/Conception.png" />
<br/>
<h3>Basé sur modèle</h3>
<img src="img/Reference.png" />
<br />
<a href="https://modelarchive.databases.biz/data_models/car_svc_center/index.html" target="_blank">Cliquer ici pour visiter la page originale</a>
<br />
<hr />

<h3>Modifications du dossier Framework:</h3>
<ul>
    <li>Definition du fichier dev.ini comme defaut au lieu de prod.ini</li>
</ul>
<br />