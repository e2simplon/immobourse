<section class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h1>Votre recherche n'a pas aboutie</h1>
                <div class="box">
                    <ul>
                        <li>Les données saisies dans ce formulaire permettent à la CCI de vous alerter dès qu’un bien correspondant à vos critères sera mis à disposition</li>
                        <li>Afin de répondre le plus rapidement possible à votre demande, la CCI transmettra celle-ci à ses partenaires.</li>
                    </ul>
                    </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-12">
                <form class="form inputs" id="form-recherche">
                    <fieldset>
                        <legend>Description du bien recherché</legend>

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Type de produit recherché</label>
                                <select class="form-control selectpicker" name="produit" multiple>
<?php foreach ($offersTypesAll as $offerType) { ?>
                                        <option value="<?= $offerType->id ?>"><?= $offerType->nameType ?></option>
<?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Type de transaction</label>
                                <select class="form-control selectpicker" name="transaction" multiple>
<?php foreach ($transactionsTypesAll as $transactionType) { ?>
                                        <option value="<?= $transactionType->id ?>"><?= $transactionType->nameTransac ?></option>
<?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Localisation</label>
                                <select class="form-control selectpicker" name="ville" multiple>
<?php foreach ($villesAll as $ville) { ?>
                                        <option value="<?= $ville->id ?>">(<?= $ville->codePostal ?>) <?= $ville->nameVille ?></option>
<?php } ?>
                                </select>
                                <br>
                            </div>

                            <div class="form-group" style="display: flex; flex-direction: row; justify-content: space-between;">
<?php foreach ($zonesActivitesAll as $zoneActivite) { ?>
                                <div>
                                    <input name="loca" id="<?= $zoneActivite->id ?>" value="<?= $zoneActivite->id ?>" type="checkbox"/>
                                    <label for="<?= $zoneActivite->id ?>"><?= $zoneActivite->nameZone ?></label>
                                </div>
<?php } ?>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="surface">Surface en m²</label>
                                <input type="text" class="form-control" name="surface" id="surface">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Écheance du besoin : </label><br>
                                <div style="display: flex; flex-direction: row; justify-content: space-between;">
                                    <span>
                                        <input name="echeance" id="urgent" value="urgent" type="radio">
                                        <label for="urgent" >Urgent</label>
                                    </span>
                                    <span>
                                        <label for="-6mois" ">Moins de six mois</label>
                                        <input name="echeance" id="-6mois" value="-6mois" type="radio">
                                    </span>
                                    <span>
                                        <input name="echeance" id="+6mois" value="+6mois" type="radio">
                                        <label for="+6mois">Plus de six mois</label>
                                    </span>
                                    <span>
                                        <label for="+1an" ">Plus d'un an</label>
                                        <input name="echeance" id="+1an" value="+1an" type="radio">
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="name">Commentaire</label>
                                <input type="text" class="form-control" name="name" id="name" style="height:150px">
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-rounded width-100">Valider</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
