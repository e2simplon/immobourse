<h1>Bienvenue</h1>

<h2>Les dernières offers</h2>

<ul>
    <?php foreach ($lastOffers as $offer) { ?>
        <li>
            <a href="index.php?page=offer&id=<?= $offer->id ?>">
                Offre à <?= $offer->city ?> pour <?= $offer->price ?>€
            </a>
        </li>
    <?php } ?>
</ul>