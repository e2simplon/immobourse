<?php

echo

'<div class="modal-dialog width-75" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="section-title">
                <h2>Devenir Adhérent</h2>
            </div>            
                    <div class="box">
                        <p> Etre adhérent permet de personnaliser sa fiche dans l\'annuaire des professionnels de l\'immobilier, de publier un nombre illimité d\'annonces et de recevoir les demandes de recherche de bien.</p>
                        <p>Cette accès est soumis à une inscription de 150 € HT /an.</p>
                    </div>
        </div>
        <div class="modal-body">
            <form class="form inputs-underline">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="first_name">Nom</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Nom">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="last_name">Prénom</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Prénom">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="first_name">Société</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Société">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="first_name">Téléphone</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Numéro de téléphone">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="first_name">Adresse</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Adresse">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="first_name">Adresse suite</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Adresse suite">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="first_name">Code postal</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Nom">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="first_name">Ville</label>
                            <select class="form-control selectpicker" name="city">
                                <option>Épinal (88)</option>
                                <option>Saint-Dié (88)</option>
                                <option>Gérardmer (88)</option>
                                <option>Remiremont (88)</option>
                                <option>Golbey (88)</option>
                                <option>Thaon-les-Vosges (88)</option>
                                <option>Neufchâteau (88)</option>
                                <option>Raon-l\'Étape (88)</option>
                                <option>Mirecourt (88)</option>
                                <option>Vittel (88)</option>
                                <option>Rambervillers (88)</option>
                                <option>La Bresse (88)</option>
                                <option>Charmes (88)</option>
                            </select>
                        </div>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="first_name">Courriel</label>
                            <input type="email" class="form-control" name="first_name" id="first_name" placeholder="Courriel">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="first_name">Site internet</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Site internet">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="first_name">Mot de passe</label>
                            <input type="password" class="form-control" name="first_name" id="first_name" placeholder="Mot de passe">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="first_name">Confirmation mot de passe</label>
                            <input type="password" class="form-control" name="first_name" id="first_name" placeholder="Confirmation mot de passe">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="first_name">Logo<br><br></label>
                            <input type="file" class="form-control" name="first_name" id="first_name">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <input name="conditions" type="checkbox" id="conditions" value="ok">
                                J\'accepte les <a href="mentions-legales.php" target="_blank">conditions g&eacute;n&eacute;rales de vente</a>
                        </div>
                    </div>
                </div>
                
                <div class="form-group center">
                    <button type="submit" class="btn btn-primary width-100">Envoyer</button>
                </div>
            </form>
            <!--end form-->
        </div>
    </div>
</div>
<!--end modal-dialog-->';