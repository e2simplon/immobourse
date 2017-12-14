<?php

echo

'<div class="modal-dialog width-400px" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="section-title">
                <h2>Connection</h2>
            </div>
        </div>
        <div class="modal-body">
            <form class="form inputs-underline" id="form-connection">
                <div class="form-group">
                    <label for="courriel">Courriel</label>
                    <input type="email" class="form-control" name="courriel" id="courriel" placeholder="Entrez votre courriel">
                </div>
                <!--end form-group-->
                <div class="form-group">
                    <label for="motPasse">Mot de passe</label>
                    <input type="password" class="form-control" name="motPasse" id="motPasse" placeholder="Entrez votre mot de passe">
                </div>
                <div class="form-group center">
                    <button type="submit" class="btn btn-primary width-100">Connection</button>
                </div>
                <!--end form-group-->
            </form>

            <a href="#" data-modal-external-file="/modal_reset_password.php" data-target="modal-reset-password">J\'ai oublié mon mot de passe</a>
            <!--end form-->
        </div>
        <!--end modal-body-->
    </div>
    <!--end modal-content-->
</div>
<!--end modal-dialog-->';