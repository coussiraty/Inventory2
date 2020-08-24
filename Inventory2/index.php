<?php include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';
session_start();
?>

<!-- Form de registro-->
<div class="row container">
    <p>&nbsp;</p>
    <form method="POST" action="banco_de_dados/login.php" class="col s12">
        <fieldset class="formulario ">
            <legend><img src="imagens/sharp_style_black_48pt_3x.png" alt="[]" width="100"></legend>
            <h3 class="strong center">Login <br> </h3>
            <h5>

            </h5>

            <div class="center-align">
                <!--CAMPO LOGIN-->
                <div class="input-field col s12 m12 l12 center-align">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="login" id="login" maxlength="9" require autofocus>
                    <label for="login">Login</label>
                </div>
                <!--CAMPO PASSWORD-->
                <div class="input-field col s12 m12 l12">
                    <i class="material-icons prefix">local_parking</i>
                    <input type="text" name="password" id="password" maxlength="20" require>
                    <label for="password">Password</label>
                </div>
                <!--Botoes -->
                <div class="input-field col s12 m12 l12 ">
                    <input type="submit" value="Confirm" name="btn-confirm" class="btn blue right">
                    <input type="reset" value="Clean" class="btn red right">
                </div>
            </div>
        </fieldset>
    </form>
</div>

<?php include_once 'footer.inc.php' ?>