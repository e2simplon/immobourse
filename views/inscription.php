<section class="block">
    <div class="container">

        <h1>Inscription</h1>
        <div class="row">
            <button class="col-md-12 col-sm-12" onclick="myFunction('enregistrement');">
                    <h3>Vous n'êtes pas un professionnel de l'immobilier</h3>
            </button>
        </div>

        <div id="enregistrement" class="form" style="display:none;">

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3>Non professionnel de l'immobilier</h3>
                    <div class="box">
                        <p>S'enregistrer vous permet de pouvoir gratuitement: </p>
                        <ul>
                            <li>publier des annonces</li>
                            <li>déposer une recherche</li>
                        </ul>
                        <p>Vous disposez d'un droit d'accès, de modification, de rectification et de suppression des données vous concernant (art. 34 de la loi « Informatique et Libertés » du 6 janvier 1978).</p>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-12">
                    <form class="form inputs" id="form-inscription">
                        <fieldset>
                            <legend>Formulaire</legend>

                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="name">Qualité du commercialisateur</label>
                                    <select class="form-control selectpicker" name="job">
                                        <option value=""> </option>
                                        <option value="1">Particulier</option>
                                        <option value="2">Association</option>
                                        <option value="3">Entreprise</option>
                                        <option value="4">Administration</option>
                                        <option value="10">Autre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="form-group">
                                    <label for="societe">Société *</label>
                                    <input type="text" class="form-control" name="societe" id="societe" placeholder="Société ET/OU Nom obligatoire">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="nom">Nom *</label>
                                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Société ET/OU Nom obligatoire">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="prenom">Prénom</label>
                                    <input type="text" class="form-control" name="prenom" id="prenom">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="adresse">Adresse</label>
                                    <input type="text" class="form-control" name="adresse" id="adresse">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="adresseSuite">Adresse suite</label>
                                    <input type="text" class="form-control" name="adresseSuite" id="adresseSuite">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="cp">Code Postal</label>
                                    <input type="text" class="form-control" name="cp" id="cp">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="ville">Ville</label>
                                    <input type="text" class="form-control" name="ville" id="ville">
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="tel">Téléphone</label>
                                    <input type="number" class="form-control" name="tel" id="tel">
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="form-group">
                                    <label for="courriel">Courriel *</label>
                                    <input type="email" class="form-control" name="courriel" id="courriel">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="motPasse">Mot de passe *</label>
                                    <input type="password" class="form-control" name="motPasse" id="motPasse">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="confirmMdP">Confirmation mot de passe *</label>
                                    <input type="password" class="form-control" name="confirmMdP" id="confirmMdP">
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input name="conditions" type="checkbox" id="conditions" value="ok">
                                    <label for="conditions">J'accepte les <a href="/index.php?page=mentionsLegales" target="_blank">conditions générales</a></label>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-rounded width-100">S'enregistrer</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>


        <div class="row">
            <button class="col-md-12 col-sm-12" onclick="myFunction('adherent');">
                <h3>Vous êtes un professionnel de l'immobilier</h3>
            </button>
        </div>

        <div id="adherent" class="form" style="display:none;">

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3>Professionnel de l'immobilier</h3>
                    <div class="box">
                        <p></p>
                        <p>Etre adhérent vous permet de:</p>
                        <ul>
                            <li>publier un nombre illimité d'annonces</li>
                            <li>recevoir les demandes de recherche de bien</li>
                            <li>bénéficier d'un espace personnalisé dans l'annuaire des professionnels de l'immobilier</li>
                            <li>afficher la liste compléte de vos annonces sur le site</li>
                            <li>apparaitre comme partennaire sur le site</li>
                        </ul>
                        <p>Cette accès est soumis à une inscription de 150 € HT /an.</p>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
            <div class="col-md-12">
                <form class="form inputs" id="form-adherent">
                    <fieldset>
                        <legend>Formulaire</legend>

                        <div class="col-md-3 col-sm-3">
                            <div class="form-group">
                                <label for="name">Qualité du commercialisateur</label>
                                <select class="form-control selectpicker" name="job">
                                    <option value=""> </option>
                                    <option value="1">Agent immobilier</option>
                                    <option value="2">SCI</option>
                                    <option value="3">Societé</option>
                                    <option value="4">Autre</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="societe">Société *</label>
                                <input type="text" class="form-control" name="societe" id="societe">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="form-group">
                                <label>Etes-vous déjà implanté dans les Vosges:</label><br>
                                <div style="display: flex; flex-direction: row; justify-content: space-around;">
                                    <div>
                                        <label for="oui" >Oui</label>
                                        <input name="inVosges" id="oui" value="oui" type="radio">
                                    </div>
                                    <div>
                                        <label for="non" ">Non</label>
                                        <input name="inVosges" id="non" value="non" type="radio">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="adresse">Adresse</label>
                                <input type="text" class="form-control" name="adresse" id="adresse">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="adresseSuite">Adresse suite</label>
                                <input type="text" class="form-control" name="adresseSuite" id="adresseSuite">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="cp">Code Postal</label>
                                <input type="text" class="form-control" name="cp" id="cp">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="ville">Ville</label>
                                <input type="text" class="form-control" name="ville" id="ville">
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="tel">Téléphone</label>
                                <input type="number" class="form-control" name="tel" id="tel">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="form-group">
                                <label for="courriel">Courriel *</label>
                                <input type="email" class="form-control" name="courriel" id="courriel">
                            </div>
                        </div>

                        <div class="col-md-8 col-sm-8">
                            <div class="form-group">
                                <label for="site">Site internet</label>
                                <input type="text" class="form-control" id="site" name="site">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="logo">Logo<br><br></label>
                                <input type="file" class="form-control" name="logo" id="logo">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="motPasse">Mot de passe *</label>
                                <input type="password" class="form-control" name="motPasse" id="motPasse">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="confirmMdP">Confirmation mot de passe *</label>
                                <input type="password" class="form-control" name="confirmMdP" id="confirmMdP">
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <input name="conditionsVente" type="checkbox" id="conditionsVente" value="ok">
                                <label for="conditionsVente">J'accepte les <a href="/index.php?page=mentionsLegales" target="_blank">conditions générales de vente</a></label>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-rounded width-100">Devenir adhérent</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        </div>
    </div>
</section>

<script>
    function myFunction($div) {
        var x = document.getElementById($div);
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>