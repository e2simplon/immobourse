<div id="page-content">
    <div class="hero-section full-screen has-map">
        <div class="map-wrapper">
            <div class="geo-location">
                <i class="fa fa-map-marker"></i>
            </div>
            <div class="map" id="map-homepage">
            </div>
        </div>

        <div class="form search-form horizontal position-bottom inputs-dark width-100" style="height:30px;">
            <div class="container width-100">
                <form>
                    <div class="row">
                        <div class="section-title">
                            <h2 class="center" style="color:white; opacity: 1;">Selectionner un bien</h2>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <button type="submit" data-ajax-response="map" data-ajax-data-file="assets/external/data_2.php" data-ajax-auto-zoom="1" class="btn btn-primary pull-right darker">Tous</button>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <select class="form-control selectpicker" name="produit" multiple>
                                    <option value="" selected>Type d'offre</option>
                                    <?php foreach ($offersTypesAll as $offerType) { ?>
                                        <option value="<?= $offerType->id ?>"><?= $offerType->nameType ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <select class="form-control selectpicker" name="transaction" multiple>
                                    <option value="" selected>Transaction</option>
                                    <?php foreach ($transactionsTypesAll as $transactionType) { ?>
                                        <option value="<?= $transactionType->id ?>"><?= $transactionType->nameTransac ?></option>
                                    <?php } ?>
                                </select>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <p class="slider-text" style="color:white; text-align: center; ">Surface en m²:</p>
                            <div class="ui-slider" data-value-min="<?= $minSurface[0]->min_surface?>" data-value-max="<?=   $maxSurface[0]->max_surface?>"  data-currency-placement="before" style="position: relative; bottom: 20px;">
                                <div class="values clearfix">
                                    <input class="value-min" name="euro-min[]" readonly>
                                    <input class="value-max" name="euro-max[]" readonly>
                                </div>
                                <div class="element"></div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <p class="slider-text" style="color:white; text-align: center;">Prix en €:</p>


                            <div class="ui-slider" data-value-min="<?= $minPrice[0]->min_price?>" data-value-max="<?= $maxPrice[0]->max_price?>" data-currency-placement="before" style="position: relative; bottom: 20px;">
                                <div class="values clearfix">
                                    <input class="value-min" name="M2-min[]" readonly>
                                    <input class="value-max" name="M2-max[]" readonly>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <button type="submit" data-ajax-response="map" data-ajax-data-file="assets/external/data_2.php" data-ajax-auto-zoom="1" class="btn btn-primary pull-right darker">Afficher</button>
                            </div>


                        </div>

                    </div>

                    <div class="link-form">
                        <a href="index.php?page=recherche" id="suggestion1" style="color: #FFF;"class="darker">-> Vous n'avez pas trouver de bien correspondant à votre recherche <-</a>
                        <a href="index.php?page=map" id="suggestion1" style="color: #FFF;"class="darker">-> Afficher les biens sur une carte <-</a>
                        <a href="index.php?page=propose" id="suggestion1" style="color: #FFF;"class="darker">-> Vous souhaitez proposer un bien à vendre ou à louer <-</a>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- full-screen -->

    <div class="block">
        <div class="container">
            <div class="center">
                <div class="section-title">
                    <div class="center">
                        <h1>Nos offres</h1>
                        <h3 class="subtitle"><?php echo count($offers) ?> offres correspondent à votre requête</h3>
                        <p>Trier par
                            <a><button>offre la plus récente</button></a> <a><button>prix</button><a> <a><button>date de disponibilité</button></a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
<?php foreach ($offers as $offer) { ?>

                <div class="col-md-3 col-sm-3">
                    <div class="item">
                        <a href="index.php?page=detailAnnonce&idAnnonce=<?= $offer->idO ?>">
                            <div class="image bg-transfer">
                                <img src="assets/img/items/<?= $offer->picture_url ?>" alt="">
                            </div>
                        </a>
                        <a class="lienDescription" href="/index.php?page=detailAnnonce&idAnnonce=<?= $offer->idO ?>">
                            <div class="additional-info">
                                <div><span class="label label-default">Bureau</span> <span class="label label-default">Location</span></div>
                                <div><span>Surface: </span><span><b><?= $offer->surface ?> m² <?php if($offer->subdividable == 1){echo "(Divisible)";} ?></b></span></div>
                                <div><span>Prix: </span><span><b><?= $offer->price ?> €</b></span></div>
                                <div><span>Localisation: </span><span><b><?= $offer->nameVille ?></b></span></div>
                            </div>
                        </a>
                    </div>
                </div>
<?php } ?>

                <?php foreach ($offers as $offer) { ?>

                    <div class="col-md-3 col-sm-3">
                        <div class="item">
                            <a href="index.php?page=detailAnnonce&idAnnonce=<?= $offer->idO ?>">
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/<?= $offer->picture_url ?>" alt="">
                                </div>
                            </a>
                            <a class="lienDescription" href="/index.php?page=detailAnnonce&idAnnonce=<?= $offer->idO ?>">
                                <div class="additional-info">
                                    <div><span class="label label-default">Bureau</span> <span class="label label-default">Location</span></div>
                                    <div><span>Surface: </span><span><b><?= $offer->surface ?> m² <?php if($offer->subdividable == 1){echo "(Divisible)";} ?></b></span></div>
                                    <div><span>Prix: </span><span><b><?= $offer->price ?> €</b></span></div>
                                    <div><span>Localisation: </span><span><b><?= $offer->nameVille ?></b></span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
                <?php foreach ($offers as $offer) { ?>

                    <div class="col-md-3 col-sm-3">
                        <div class="item">
                            <a href="index.php?page=detailAnnonce&idAnnonce=<?= $offer->idO ?>">
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/<?= $offer->picture_url ?>" alt="">
                                </div>
                            </a>
                            <a class="lienDescription" href="/index.php?page=detailAnnonce&idAnnonce=<?= $offer->idO ?>">
                                <div class="additional-info">
                                    <div><span class="label label-default">Bureau</span> <span class="label label-default">Location</span></div>
                                    <div><span>Surface: </span><span><b><?= $offer->surface ?> m² <?php if($offer->subdividable == 1){echo "(Divisible)";} ?></b></span></div>
                                    <div><span>Prix: </span><span><b><?= $offer->price ?> €</b></span></div>
                                    <div><span>Localisation: </span><span><b><?= $offer->nameVille ?></b></span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
                <?php foreach ($offers as $offer) { ?>

                    <div class="col-md-3 col-sm-3">
                        <div class="item">
                            <a href="index.php?page=detailAnnonce&idAnnonce=<?= $offer->idO ?>">
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/<?= $offer->picture_url ?>" alt="">
                                </div>
                            </a>
                            <a class="lienDescription" href="/index.php?page=detailAnnonce&idAnnonce=<?= $offer->idO ?>">
                                <div class="additional-info">
                                    <div><span class="label label-default">Bureau</span> <span class="label label-default">Location</span></div>
                                    <div><span>Surface: </span><span><b><?= $offer->surface ?> m² <?php if($offer->subdividable == 1){echo "(Divisible)";} ?></b></span></div>
                                    <div><span>Prix: </span><span><b><?= $offer->price ?> €</b></span></div>
                                    <div><span>Localisation: </span><span><b><?= $offer->nameVille ?></b></span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>

            </div>

            <div class="row">
                <div class="center">
                    <a href="views/listoffres.php" style="color: #014479" class="btn btn-primary btn-light-frame btn-rounded btn-framed arrow">Voir toutes les offres</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <hr>
    </div>

  <!--  <div class="container">
            <div class="center section-title">
                <h2>Nos partenaires</h2>
            </div>
            <div class="logos">

                <?php foreach ($affiliates as $affiliate) { ?>

                    <div class="logo">
                        <a href="index.php?page=detailPro"><img src="assets/img/<?= $affiliate->logo ?>" alt=""></a>
                    </div>

                <?php } ?>

            </div>
            
            <div class="slideshow">
                <ul>
                    <li><img src="/assets/img/default.png" alt="" width="350" height="200" /></li>
                    <li><img src="/assets/img/default.png" alt="" width="350" height="200" /></li>
                    <li><img src="/assets/img/default.png" alt="" width="350" height="200" /></li>
                    <li><img src="/assets/img/default.png" alt="" width="350" height="200" /></li>
                </ul>
            </div>
           
        </div>-->

        <br><br>

                <section class="block background-is-dark">
            <div class="container">
                <div class="section-title vertical-aligned-elements">
                    <div class="element">
                        <h2>Les Partenaires</h2>
                    </div>
                    <div class="element text-align-right">
                        <a href="views/listpros.php" class="btn btn-framed btn-rounded btn-default invisible-on-mobile">Voir tous</a>
                        <div id="gallery-nav"></div>
                    </div>
                </div>
                <!--end section-title-->


            </div>
            <div class="gallery featured">
                <div class="owl-carousel" data-owl-items="6" data-owl-loop="1" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="1" data-owl-nav-container="#gallery-nav">

                    <div class="item featured" data-id="1">
                        <a href="index.php?page=detailPro">
                            <div class="description">
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/<?= $affiliate->logo ?>" alt=""></a>
                            </div>
                            <!--end image-->
                        </a>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->

                    <div class="item featured" data-id="1">
                        <a href="index.php?page=detailPro">
                            <div class="description">
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/<?= $affiliate->logo ?>" alt=""></a>
                            </div>
                            <!--end image-->
                        </a>

                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                                        
                    <div class="item featured" data-id="1">
                        <a href="index.php?page=detailPro">
                            <div class="description">
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/<?= $affiliate->logo ?>" alt=""></a>
                            </div>
                            <!--end image-->
                        </a>

                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                                       
                     <div class="item featured" data-id="1">
                        <a href="index.php?page=detailPro">
                            <div class="description">
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/<?= $affiliate->logo ?>" alt=""></a>
                            </div>
                            <!--end image-->
                        </a>

                        <!--end additional-info-->
                    </div>
                    <!--end item-->

                    <div class="item featured" data-id="1">
                        <a href="index.php?page=detailPro">
                            <div class="description">
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/<?= $affiliate->logo ?>" alt=""></a>
                            </div>
                            <!--end image-->
                        </a>

                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                                        <div class="item featured" data-id="1">
                        <a href="index.php?page=detailPro">
                            <div class="description">
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/<?= $affiliate->logo ?>" alt=""></a>
                            </div>
                            <!--end image-->
                        </a>

                        <!--end additional-info-->
                    </div>
                    <!--end item-->

                   

                </div>
            </div>
            <!--end gallery-->
            <div class="background-wrapper">
                <div class="background-color background-color-default"></div>
            </div>
            <!--end background-wrapper-->
        </section>
<br>
<br>
</div>
