<?php $this->titre = 'Système de gestion de réparations automobiles'; ?>

<form action="Adminreparations/nouvelleReparation" method="post">
    <h2>Ajouter une réparation</h2>
        <p>
            <label for="id_vehicule">Id du véhicule</label> : <input class="formInput" type="number" min=0 name="id_vehicule" /><br />
            <label for="date_reparation_debut">Date de début</label> :  <input class="formInput" type="date" name="date_reparation_debut" /><br />
            <label for="date_reparation_fin">Date de fin</label> :  <input class="formInput" type="date" name="date_reparation_fin" /><br />
            <label for="description_reparations">Description</label> :  <textarea class="formInput" type="text" name="description_reparations"></textarea><br />
            <label for="montant_paye">Montant payé ($)</label> : <input class="formInput" type="number" min=0 name="montant_paye" /><br />
            <label for="mechanicien">Méchanicien</label> : <input class="formInput" type="text" name="mechanicien" /><br />
            <input type="submit" value="Envoyer" />
        </p>
</form>

<div class="divCentralCategories">

    <section></section>

    <div class="containerVueGenerale">
        <?php foreach ($reparations as $reparation):
            ?>
            <?php if ($reparation['efface'] == '0') : ?>
                <article class="articleVueGenerale">
                    <header>
                        <a href="Adminreparations/reparation/<?= $reparation['id'] ?>">
                            <h1 class="titreReparation">Réparation #<?= $this->nettoyer($reparation["id"]) ?></h1>
                        </a>
                            <h3><?= $this->nettoyer($reparation['description_reparations']) ?></h3>
                            <time><?= $this->nettoyer($reparation['date_reparation_debut']) ?></time> - <time><?= $this->nettoyer($reparation['date_reparation_fin']) ?></time>
                    <header>
                </article>
                
                <p>
                    <a href="Adminreparations/confirmerReparation/<?= $reparation['id'] ?>" >
                        [Supprimer]
                    </a>
                    <a href="Adminreparations/modifierReparation/<?= $reparation['id'] ?>" >
                        [Modifier]
                    </a>
                </p>
            <?php else : ?>
                <article class="articleVueGenerale">
                    <header>
                            <h1 id="efface" class="titreReparation">Réparation #<?= $this->nettoyer($reparation["id"]) ?></h1>
                            <h3 id="efface"><?= $this->nettoyer($reparation['description_reparations']) ?></h3>
                            <time><?= $this->nettoyer($reparation['date_reparation_debut']) ?></time> - <time><?= $this->nettoyer($reparation['date_reparation_fin']) ?></time>
                    <header>
                </article>
                
                <p>
                    <a href="Adminreparations/retablir/<?= $reparation['id'] ?>" >
                        [Rétablir]
                    </a>
                </p>
            <?php endif; ?>

            <hr id="hrArticles"/>
        <?php endforeach; ?>
    </div>

    <section></section>

</div>


