<h1>Liste des offres</h1>

<table class="table">
    <tr>
        <th>Ville</th>
        <th>Prix</th>
        <th></th>
    </tr>
    <?php foreach ($offers as $offer) { ?>
    <tr>
        <td><?= $offer->city ?></td>
        <td><?= $offer->price ?></td>
        <td>
            <a href="index.php?page=offer&id=<?= $offer->id ?>" class="btn btn-info">
                <i class="glyphicon glyphicon-eye-open"></i>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>

<h1>Liste des partenaires</h1>

<table class="table">
    <tr>
        <th>Nom</th>
        <th>Email</th>
    </tr>
    <?php foreach ($affiliates as $affiliate) { ?>
        <tr>
            <td><?= $affiliate->name ?></td>
            <td><?= $affiliate->email ?></td>
        </tr>
    <?php } ?>
</table>