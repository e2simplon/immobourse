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

