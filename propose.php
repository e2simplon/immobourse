    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h1>Déposer une offre</h1>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-12">
                    <form class="form inputs" id="form-propose">
                        <fieldset>
                            <legend>Description du bien</legend>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="suiviePar">Commercialisateur en charge du bien</label>
                                    <input type="text" class="form-control" name="suiviePar" id="suiviePar" placeholder="Nom et prénom de la personne en charge du bien">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="suiviePar">Téléphone du commercialisateur</label>
                                    <input type="number" class="form-control" name="suiviePar" id="suiviePar">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="suiviEmail">Courriel du commercialisateur</label>
                                    <input type="email" class="form-control" name="suiviEmail" id="suiviEmail" placeholder="Courriel de la personne en charge du bien">
                                </div>
                            </div>



                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="adresse">Adresse du bien</label>
                                    <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Nom et prénom de la personne en charge du bien">
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="form-group" style="display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
<?php foreach ($zonesActivitesAll as $zoneActivite) { ?>
                                        <div>
                                            <input name="loca" id="<?= $zoneActivite->id ?>" value="<?= $zoneActivite->id ?>" type="checkbox"/>
                                            <label for="<?= $zoneActivite->id ?>"><?= $zoneActivite->nameZone ?></label>
                                        </div>
<?php } ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="ville">Code postal du bien *</label>
                                    <select class="form-control selectpicker" name="ville">
                                        <option value=""></option>
<?php foreach ($villesCP as $ville) { ?>
                                            <option value="<?= $ville->id ?>"><?= $ville->codePostal ?></option>
<?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="ville">Ville du bien *</label>
                                    <select class="form-control selectpicker" name="ville">
<?php foreach ($villesParCP as $ville) { ?>
                                            <option value="<?= $ville->id ?>"><?= $ville->name ?></option>
<?php } ?>
                                        <option value=""> </option>
                                        <option value="532">ADOMPT</option>
                                        <option value="2">AHEVILLE</option>
                                        <option value="3">AINGEVILLE</option>
                                        <option value="4">AINVELLE</option>
                                        <option value="5">ALLARMONT</option>
                                        <option value="6">AMBACOURT</option>
                                        <option value="523">AMEREY</option>
                                        <option value="7">AMEUVELLE</option>
                                        <option value="8">ANGLEMONT</option>
                                        <option value="9">ANOULD</option>
                                        <option value="10">AOUZE</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="produit">Type de produit *</label>
                                    <select class="form-control selectpicker" name="produit" multiple>
<?php foreach ($offersTypesAll as $offerType) { ?>
                                            <option value="<?= $offerType->id ?>"><?= $offerType->nameType ?></option>
<?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="transaction">Type de transaction *</label>
                                    <select class="form-control selectpicker" name="transaction" multiple>
<?php foreach ($transactionsTypesAll as $transactionType) { ?>
                                            <option value="<?= $transactionType->id ?>"><?= $transactionType->nameTransac ?></option>
<?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="prix">Prix total *</label>
                                    <input type="number" class="form-control" name="prix" id="prix">
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <div class="form-group">
                                    <br>
                                    <input name="prixHTttc" id="ht" value="ht" type="radio">
                                    <label for="ht">HT *</label>
                                    <br>
                                    <input name="prixHTttc" id="ttc" value="ttc" type="radio">
                                    <label for="ttc">TTC *</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4" style="display: flex; flex-direction: row; justify-content: space-between;">
                                <div class="form-group" style="display: flex; flex-direction: column; align-items: center;">
                                    <label>Commition incluse:</label>
                                    <div style="display: flex; flex-direction: row;">
                                        <div>
                                            <input name="divisable" id="ouiCom" value="ouiCom" type="radio">
                                            <label for="ouiCom">Oui</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div>
                                            <label for="nonCom">Non</label>&nbsp;&nbsp;&nbsp;
                                            <input name="divisable" id="nonCom" value="nonCom" type="radio">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="display: flex; flex-direction: column; align-items: center;">
                                    <label>Divisable:</label>
                                    <div style="display: flex; flex-direction: row;">
                                        <div>
                                            <input name="divisable" id="ouiDiv" value="ouiDiv" type="radio">
                                            <label for="ouiDiv">Oui</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div>
                                            <label for="nonDiv">Non</label>&nbsp;&nbsp;&nbsp;
                                            <input name="divisable" id="nonDiv" value="nonDiv" type="radio">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="prixAUm">Prix au m2</label>
                                    <input type="number" class="form-control" name="prixAUm" id="prixAUm">
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <div class="form-group">
                                    <br>
                                    <input name="prixAUmHTttc" id="htAUm" value="htAUm" type="radio">
                                    <label for="htAUm" >HT</label>
                                    <br>
                                    <input name="prixAUmHTttc" id="ttcAUm" value="ttcAUm" type="radio">
                                    <label for="ttcAUm" ">TTC</label>
                                </div>
                            </div>


                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="surface">Surface en m² *</label>
                                    <input type="text" class="form-control" name="surface" id="surface">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="hauteur">Hauteur sous faitage en metre (sol-plafond)</label>
                                    <input type="text" class="form-control" name="hauteur" id="hauteur">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="dispo">Date de disponibilité</label>
                                    <input type="date" class="form-control" name="dispo" id="dispo">
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="tag1">Atout du bien à mettre en avant 1</label>
                                    <input type="text" class="form-control" name="tag1" id="tag1">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="tag2">Atout du bien à mettre en avant 2</label>
                                    <input type="text" class="form-control" name="tag2" id="tag2">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="tag3">Atout du bien à mettre en avant 3</label>
                                    <input type="text" class="form-control" name="tag3" id="tag3">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="tag4">Atout du bien à mettre en avant 4</label>
                                    <input type="text" class="form-control" name="tag4" id="tag4">
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control" name="description" id="description" style="height:200px;">
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="form-group" style="display: flex; flex-direction: column;">
                                    <label for="photo1">Photo 1 *</label>
                                    <input name="photo1" type="file">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group" style="display: flex; flex-direction: column;">
                                    <label for="photo2">Photo 2</label>
                                    <input name="photo2" type="file">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group" style="display: flex; flex-direction: column;">
                                    <label for="photo3">Photo 3</label>
                                    <input name="photo3" type="file">
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="form-group" style="display: flex; flex-direction: column;">
                                    <label for="photo4">Photo 4</label>
                                    <input name="photo4" type="file">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group" style="display: flex; flex-direction: column;">
                                    <label for="photo5">Photo 5</label>
                                    <input name="photo5" type="file">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group" style="display: flex; flex-direction: column;">
                                    <label for="photo6">Photo 6</label>
                                    <input name="photo6" type="file">
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
