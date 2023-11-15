<?php
    require_once(ROOT . '/Views/templates/nav.php');
?>

<header class="connexion_header">
    <h1>
        Se connecter
    </h1>
    <form action="" method="post" id="signInForm">
        <p id="formStatus"></p>
        <input type="email" name="email" id="email" placeholder="E-mail" class="input_text">
        <input type="password" name="password" id="password" placeholder="Mot de passe" class="input_text">
        <button class="button" type="submit">
            VALIDER
        </button>
    </form>
</header>