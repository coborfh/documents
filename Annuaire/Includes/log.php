
<div class="container pat">
    <div class="row">
        <div class="col-md-3 col-md-offset-4">
            <div class="" style=" 
    border: 2px solid rgba(153, 153, 153, 0.75);
    border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    -khtml-border-radius: 2px;
    -o-border-radius: 2px;
    z-index: 3;
    font-size: 13px !important;
    font-family: Helvetica,Arial,sans-serif;
    background-color: #ffffff;
    padding: 20px;
    ">
                
                <form class="form-signin" method="post" action="Vues/other.php">
                <!-- <div class="col-md-10"> -->
                <div class="form-group">
                    <input type="text" class="form-control input-md" id="pseudo" name="pseudo" placeholder="Pseudo" required autofocus />
                </div>
                <!-- </div> -->
                <div class="form-group">
                    <input type="password" class="form-control input-md" id="password" name ="password" placeholder="Password" required />
                </div>
                <label class="checkbox" style="color: black">
                    <input type="checkbox" value="remember-me" />
                    Se souvenir de moi
                </label>
                <button class="btn btn-lg btn-block purple-bg" name ="envoyer" type="submit" style=" background-color: #6E329D; color: #fff;">Valider</button>
                </form>
                <a class="forgotLnk" href="" style=" margin-top: 10px; display: block;">J'ai oublié mon mot de passe...</a>
                
                <div class="or-box row-block" style="position: relative;
    border-top: 1px solid #dfdfdf;
    padding-top: 20px;
    margin-top:20px;">
                    <div class="row">
                        <div class="col-md-12 row-block">
                            <a href="Vues/inscription.php" class="btn btn-primary btn-block">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
