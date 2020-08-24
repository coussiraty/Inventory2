<?php session_start() ?>
<?php include_once 'includes/header.inc.php' ?>


<?php include_once 'includes/menu.inc.php' ?>

<!-- Form de registro-->
<div class="row container">
    <p>&nbsp;</p>
    <form method="POST" action="banco_de_dados/create.php" class="col s12">
        <fieldset class="formulario">
            <legend><img src="imagens/sharp_style_black_48pt_3x.png" alt="[]" width="100"></legend>
            <h3 class="strong center">Register <br>
                <h5 class="strong center">
                    <?php
                    if (isset($_SESSION['msg']))
                        echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                    ?></h5>
            </h3>

            <!--CAMPO HOSTNAME-->
            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">computer</i>
                <input type="text" name="hostname" id="hostname" maxlength="9" require autofocus>
                <label for="hostname">Hostname</label>
            </div>
            <!--CAMPO PATRIMONIO-->
            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">local_parking</i>
                <input type="text" name="patrimony" id="patrimony" maxlength="6" require>
                <label for="patrimony">Patrimony</label>
            </div>
            <!--CAMPO MODELO-->
            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">devices_other</i>
                <select name="model" id="model">
                    <option value="" disabled selected>Choose your Model</option>
                    <option value="Dell Latitude 3470">Dell Latitude 3470</option>
                    <option value="Dell Latitude 3490">Dell Latitude 3490</option>
                    <option value="Dell Latitude 3400">Dell Latitude 3400</option>
                </select>
                <label for="model">Model</label>
            </div>
            <!--CAMPO VERSAO WINDOWS-->
            <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix"><img src="imagens/icon_windows.png" alt=""></i>
                <select name="version_windows" id="version_windows">
                    <option value="" disabled selected>Choose your Windows</option>
                    <option value="Windows 7">Windows 7</option>
                    <option value="Windows 8.1">Windows 8.1</option>
                    <option value="Windows 10">Windows 10</option>
                </select>

            </div>
            <!--CAMPO CHAVE WINDOWS-->
            <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">vpn_key</i>
                <input type="text" name="key_windows" id="key_windows" maxlength="29" require>
                <label for="key_windows">Windows Key</label>
            </div>
            <!--CAMPO VERSAO OFFICE-->
            <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix"><img src="imagens/icon_office.png" alt=""></i>
                <select name="version_office" id="version_office">
                    <option value="" disabled selected>Choose your Office</option>
                    <option value="Office 2019">Office 2019</option>
                    <option value="Office 2016">Office 2016</option>
                    <option value="Office 2010">Office 2010</option>
                </select>

            </div>
            <!--CAMPO CHAVE OFFICE-->
            <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">vpn_key</i>
                <input type="text" name="key_office" id="key_office" maxlength="29" require>
                <label for="key_office">Office Key</label>
            </div>
            <!--CAMPO EMAIL-->
            <div class="input-field col s12 m6 l12">
                <i class="material-icons prefix">email</i>
                <input type="text" name="email" id="email" maxlength="45" require>
                <label for="email">E-mail</label>
            </div>
            <!--CAMPO OUTROS SOFTWARES-->
            <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">computer</i>
                <select name="others_softwares" id="others_softwares">
                    <option value="" disabled selected>Choose your Others Softwares</option>
                    <option value="N/A">N/A</option>
                    <option value="Access 2010">Access 2010</option>
                    <option value="Access 2013">Access 2013</option>
                    <option value="Project 2007">Project 2007</option>
                </select>
            </div>
            <!--CAMPO OUTROS SOFTWARES KEY-->
            <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">vpn_key</i>
                <input type="text" name="others_keys" id="others_keys" maxlength="30" require>
                <label for="others_keys">Key</label>
            </div>

            <!--Botoes -->
            <div class="input-field col s12 m6 l4">
                <input type="submit" value="Confirm" class="btn blue">
                <input type="reset" value="Clean" class="btn red">
            </div>
        </fieldset>
    </form>
</div>

<?php include_once 'includes/footer.inc.php' ?>