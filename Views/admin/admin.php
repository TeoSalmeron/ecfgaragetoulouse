<?php
    require_once ROOT . '/Views/templates/nav.php';
?>
<section class="admin_pannel">
    <section class="create_employee">
        <h2>Créer un compte employé</h2>
        <form action="" method="post" id="createEmployeeForm">
            <small>Le mot de passe doit contenir une minuscule, une majuscule, un chiffre, un caractère spécial et faire au moins 8 caractères</small>
            <p id="createEmployeeFormStatus" class="form_status"></p>
            <input type="email" name="email" id="email" placeholder="E-mail" class="input_text">
            <input type="password" name="password" id="password" placeholder="Mot de passe" class="input_text">
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirmez mot de passe" class="input_text">
            <button type="submit" class="button">
                VALIDER
            </button>
        </form>
    </section>
    <br>
    <br>
    <section class="manage_schedule">
        <h2>Gérer les ouvertures du garage</h2>
        <form action="" method="post" id="manageOpeningForm">
            <p id="manageOpeningFormStatus"></p>
            <div class="form-group">
                <label for="monday">Lundi</label>
                <select name="monday" id="1">
                    <option value="1">Ouvert</option>
                    <option value="0">Fermé</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tuesday">Mardi</label>
                <select name="tuesday" id="2">
                    <option value="1">Ouvert</option>
                    <option value="0">Fermé</option>
                </select>
            </div>
            <div class="form-group">
                <label for="wednesday">Mercredi</label>
                <select name="wednesday" id="3">
                    <option value="1">Ouvert</option>
                    <option value="0">Fermé</option>
                </select>
            </div>
            <div class="form-group">
                <label for="thursday">Jeudi</label>
                <select name="thursday" id="4">
                    <option value="1">Ouvert</option>
                    <option value="0">Fermé</option>
                </select>
            </div>
            <div class="form-group">
                <label for="friday">Vendredi</label>
                <select name="friday" id="5">
                    <option value="1">Ouvert</option>
                    <option value="0">Fermé</option>
                </select>
            </div>
            <div class="form-group">
                <label for="saturday">Samedi</label>
                <select name="saturday" id="6">
                    <option value="1">Ouvert</option>
                    <option value="0">Fermé</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sunday">Dimanche</label>
                <select name="sunday" id="7">
                    <option value="1">Ouvert</option>
                    <option value="0">Fermé</option>
                </select>
            </div>
            <button class="button" type="submit">VALIDER</button>
        </form>
    </section>
</section>
