<h1><?= $detailOffer->offer_types_ids ?> en <?= $detailOffer->transaction_types_ids ?></h1>
<section>
    <div class="gallery detail">
        <div class="owl-carousel" data-owl-items="3" data-owl-loop="1" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="0" data-owl-margin="2" data-owl-nav-container="#gallery-nav">
            <div class="image">
                <div class="bg-transfer"><img src="/assets/img/items/2_1.jpg" alt=""></div>
            </div>
            <div class="image">
                <div class="bg-transfer"><img src="/assets/img/items/5_1.jpg" alt=""></div>
            </div>
            <div class="image">
                <div class="bg-transfer"><img src="/assets/img/items/3_1.jpg" alt=""></div>
            </div>
            <div class="image">
                <div class="bg-transfer"><img src="/assets/img/items/3_2.jpg" alt=""></div>
            </div>
            <div class="image">
                <div class="bg-transfer"><img src="/assets/img/items/4_1.jpg" alt=""></div>
            </div>
        </div>
    </div>
</section>



<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-7">
            <div id="gallery-nav"></div>
            <section>
                <h2>Description du bien</h2>
                <p style="opacity:1; white-space: pre-line; background:none; border:none; font-size: 14px; font-family: 'Lato', sans-serif;">
                    <?= $detailOffer->description ?>
                </p>
                Hauteur sous faitage : <?= $detailOffer->bridge_height ?> m<br>
                <br>
                Prix : <?= $detailOffer->price ?> euros
                <?php if($detailOffer->priceTaxe == 1){echo "TTC";}else{echo "HT";} ?><br>
                <p style="opacity: 1;">Surface : <?= $detailOffer->surface ?> m2
                    <?php if($detailOffer->subdividable == 1){
                        echo " (Divisible: ".$detailOffer->priceM2." €/m²";
                        if($detailOffer->priceM2Taxe == 1){echo "TTC";}else{echo "HT";} echo")";} ?><br>
                    Commission incluse : <?php if($detailOffer->commission_included == 1){echo "Oui";}else{echo "Non";} ?><br>
                    <br>
                    Disponible à partir du : <?= $detailOffer->dateDispo ?></p>

                <ul class="tags">
                    <li><?= $detailOffer->offer_types_ids ?></li>
                    <li><?= $detailOffer->transaction_types_ids ?></li>
                    <li>grand paking</li>
                    <li>50 €/m²</li>
                </ul>
                <a href="http://bourse-immo.vosges.cci.fr/<?= $detailOffer->pdf_url ?>" target="_blank">Télécharger la fiche du bien</a>
                <hr>
                <p>
                <h2>Informations sur le commercialisateur </h2>
                <figure><i class="fa fa-building-o" aria-hidden="true"></i>SOFIMARX SARL</figure>
                <?php if($detailOffer->suiviTel != NULL){echo '<figure><i class="fa fa-handshake-o" aria-hidden="true"></i>Suivie par: '.$detailOffer->suiviName.'</figure>
                <figure><i class="fa fa-phone"></i>'.$detailOffer->suiviTel.'</figure>';}
                else{echo '<figure><i class="fa fa-phone"></i>'.$detailOffer->affilate_id.'</figure>';}
                ; ?>
                <figure><i class="fa fa-map-marker"></i>18 chemin de la Droite du Lac / 88400 GERARDMER</figure>
                <figure><i class="fa fa-envelope"></i><a href="mailto:cat.marx@me.com">cat.marx@me.com</a></figure>
                <figure><i class="fa fa-globe"></i><a href=""> pas de site de disponible</a></figure>
            </section>
        </div>
        <div class="col-md-5 col-sm-5">
            <div class="detail-sidebar">
                <section class="shadow">
                    <div class="map height-250px" id="map-detail"></div>
                    <div class="content">
                        <h3>Localisation du bien </h3>
                        <address>
                            <figure><i class="fa fa-map-marker"></i><?= $detailOffer->address ?><br><?= $detailOffer->codePostal ?> - <?= $detailOffer->nameVille ?><br>
                                <br><?php if($detailOffer->nameZone != NULL){echo $detailOffer->nameZone;} ?></figure>
                        </address>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>


<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>
<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>

<script data-cfasync="false" src="/cdn-cgi/scripts/ddc5a536/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
<script type="text/javascript" src="/assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/assets/js/custom.js"></script>
<script type="text/javascript" src="/assets/js/maps.js"></script>

<script>
    rating(".visitor-rating");
    var element = "map-detail";
    simpleMap(<?= $detailOffer->latitude ?>,<?= $detailOffer->longitude ?>, element);
</script>

</body>

