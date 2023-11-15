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
</section>