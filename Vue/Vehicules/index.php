<?php $this->titre = 'Système de gestion de réparations automobiles'; ?>

<form action="Vehicules/nouveauVehicule" method="post">
    <h2>Ajouter un véhicule</h2>
        <p>
            <label for="id_utilisateur">Id du propriétaire</label> : <input class="formInput" type="number" min=0 name="id_utilisateur" /><br />
            <label for="marque">Marque</label> :  
            <select class="formInput" name="marque">
                <option value="Toyota">Toyota</option>
                <option value="Hyundai">Hyundai</option>
                <option value="Tesla">Tesla</option>
                <option value="Mazda">Mazda</option>
                <option value="Mercedes">Mercedes</option>
                <option value="BMW">BMW</option>
                <option value="Honda">Honda</option>
                <option value="Ford">Ford</option>
                <option value="Audi">Audi</option>
                <option value="Nissan">Nissan</option>
                <option value="Dodge">Dodge</option>
                <option value="Kia">Kia</option>
            </select><br />
            <label for="modele">Modele</label> : <input class="formInput" type="text" name="modele" /><br />
            <label for="plaque">Plaque (Format 123 AAA)</label> : <input class="formInput" type="text" name="plaque" maxlength="7"/><br />
            <label for="kilometrage">Kilometrage</label> : <input class="formInput" type="number" min=0 name="kilometrage" /><br />
            <!-- <input type="hidden" name="article_id" value="<= $article['id'] ?>" /><br /> -->
            <input type="submit" value="Envoyer" />
        </p>
</form>

<div class="divCentralCategories">

    <section></section>

    <div class="containerVueGenerale">
        <?php foreach ($vehicules as $vehicule):
            ?>
            <article class="articleVueGenerale">
                <header>
                    <a href="Vehicules/vehicule/<?= $vehicule['id'] ?>">
                        <h1 class="titreVehicule">Vehicule #<?= $vehicule["id"]  ?>: <?= $vehicule['plaque'] ?></h1>
                    </a>
                        <h3><?= $vehicule['marque'] ?> <?= $vehicule['modele'] ?></h3>
                <header>
            </article>
            <hr id="hrArticles"/>
        <?php endforeach; ?>
    </div>
    
    <section></section>

</div>
