<?php
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';

?>

<?php
include_once 'banco_de_dados/conexao.php';
$id_register = filter_input(INPUT_GET, 'id_register', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['id'] = $id_register;
$querySelect = $conn->query("SELECT * FROM db_cadastro WHERE id_register='$id_register'");

while ($registros = $querySelect->fetch_assoc()) :
    $id_register = $registros['id_register'];
    $hostname = $registros['hostname'];
    $patrimony = $registros['patrimony'];
    $model = $registros['model'];
    $version_windows = $registros['version_windows'];
    $key_windows = $registros['key_windows'];
    $version_office = $registros['version_office'];
    $key_office = $registros['key_office'];
    $email = $registros['email'];
    $others_softwares = $registros['others_softwares'];
    $others_keys = $registros['others_keys'];
    $created = $registros['created'];
    $modified = $registros['modified'];

endwhile;
?>

<!-- Form de registro-->
<div class="row container">
    <p>&nbsp;</p>
    <form method="POST" action="banco_de_dados/update.php" class="col s12">
        <fieldset class="formulario">
            <legend><img src="imagens/sharp_style_black_48pt_3x.png" alt="[]" width="100"></legend>
            <h3 class="strong center">Edit </h3>

            <!--CAMPO HOSTNAME-->
            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">computer</i>
                <input type="text" name="hostname" id="hostname" value="<?php echo $hostname ?>" maxlength="9" require
                    autofocus>
                <label for="hostname">Hostname</label>
            </div>
            <!--CAMPO PATRIMONIO-->
            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">local_parking</i>
                <input type="text" name="patrimony" id="patrimony" value="<?php echo $patrimony ?>" maxlength="6"
                    require>
                <label for="patrimony">Patrimony</label>
            </div>
            <!--CAMPO MODELO-->
            <div class="input-field col s12 m6 l4">
                <i class="material-icons prefix">devices_other</i>
                <select name="model" id="model">
                    <option value="" disabled selected>Choose your Model</option>
                    <option value="Dell Latitude 3470" <?php echo $model == 'Dell Latitude 3470' ? 'selected' : '';
                                                        ?>>Dell Latitude 3470</option>
                    <option value="Dell Latitude 3490" <?php echo $model == 'Dell Latitude 3490' ? 'selected' : '';
                                                        ?>>Dell Latitude 3490</option>
                    <option value="Dell Latitude 3400" <?php echo $model == 'Dell Latitude 3400' ? 'selected' : '';
                                                        ?>>Dell Latitude 3400</option>
                </select>
                <label for="model">Model</label>
            </div>
            <!--CAMPO VERSAO WINDOWS-->
            <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix"><img src="imagens/icon_windows.png" alt=""></i>
                <select name="version_windows" id="version_windows">
                    <option value="" disabled selected>Choose your Windows</option>
                    <option value="Windows 7" <?php echo $version_windows == 'Windows 7' ? 'selected' : '';
                                                ?>>Windows 7</option>
                    <option value="Windows 8.1" <?php echo $version_windows == 'Windows 8.1' ? 'selected' : '';
                                                ?>>Windows 8.1</option>
                    <option value="Windows 10" <?php echo $version_windows == 'Windows 10' ? 'selected' : '';
                                                ?>>Windows 10</option>
                </select>
                <label for="version_windows">Version Windows</label>
            </div>
            <!--CAMPO CHAVE WINDOWS-->
            <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">vpn_key</i>
                <input type="text" name="key_windows" id="key_windows" value="<?php echo $key_windows ?>" maxlength="29"
                    require>
                <label for="key_windows">Windows Key</label>
            </div>
            <!--CAMPO VERSAO OFFICE-->
            <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix"><img src="imagens/icon_office.png" alt=""></i>
                <select name="version_office" id="version_office">
                    <option value="" disabled selected>Choose your Office</option>
                    <option value="N/A" <?php echo $version_office == 'N/A' ? 'selected' : '';
                                        ?>>N/A</option>
                    <option value="Office 2019" <?php echo $version_office == 'Office 2019' ? 'selected' : '';
                                                ?>>Office 2019</option>
                    <option value="Office 2016" <?php echo $version_office == 'Office 2016' ? 'selected' : '';
                                                ?>>Office 2016</option>
                    <option value="Office 2010" <?php echo $version_office == 'Office 2010' ? 'selected' : '';
                                                ?>>Office 2010</option>
                </select>
                <label for="version_office">Version Office</label>
            </div>
            <!--CAMPO CHAVE OFFICE-->
            <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">vpn_key</i>
                <input type="text" name="key_office" id="key_office" value="<?php echo $key_office ?>" maxlength="29"
                    require>
                <label for="key_office">Office Key</label>
            </div>
            <!--CAMPO EMAIL-->
            <div class="input-field col s12 m6 l12">
                <i class="material-icons prefix">email</i>
                <input type="text" name="email" id="email" value="<?php echo $email ?>" maxlength="45" require>
                <label for="email">E-mail</label>
            </div>
            <!--CAMPO OUTROS SOFTWARES-->
            <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">computer</i>
                <select name="others_softwares" id="others_softwares">
                    <option value="" disabled selected>Choose your Others Softwares</option>
                    <option value="N/A" <?php echo $others_softwares == 'N/A' ? 'selected' : '';
                                        ?>>N/A</option>
                    <option value="Access 2010" <?php echo $others_softwares == 'Access 2010' ? 'selected' : '';
                                                ?>>Access 2010</option>
                    <option value="Access 2013" <?php echo $others_softwares == 'Access 2013' ? 'selected' : '';
                                                ?>>Access 2013</option>
                    <option value="Project 2007" <?php echo $others_softwares == 'Project 2007' ? 'selected' : '';
                                                    ?>>Project 2007</option>
                </select>
                <label for="others_softwares">Others Softwares</label>
            </div>
            <!--CAMPO LABEL KEY-->
            <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">vpn_key</i>
                <input type="text" name="others_keys" id="others_keys" value="<?php echo $others_keys ?>" maxlength="30"
                    require>
                <label for="others_keys">Key</label>
            </div>
            <!--CAMPO LABEL Create-->
            <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">event_note</i>
                <input type="text" name="created" id="created" disabled value="<?php echo $created ?>" maxlength="45">
                <label for="created">Created Date</label>
            </div>
            <!--CAMPO LABEL MODifica-->
            <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">event_note</i>
                <input type="text" name="modified" id="modified" disabled value="<?php echo $modified ?>"
                    maxlength="45">
                <label for="modified">Modified Date</label>
            </div>

            <!--Botoes -->
            <div class="input-field col s12 m6 l12 right">
                <input type="submit" value="Confirm" class="btn blue">
                <a href="search.php" class="btn red">Cancel</a>
            </div>

        </fieldset>
    </form>
</div>

<?php include_once 'includes/footer.inc.php' ?>