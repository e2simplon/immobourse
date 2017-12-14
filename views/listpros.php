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