<nav id="nav">
    <a href="/">
        <img src="/img/logo.png" alt="">
    </a>
    <button id="toggleMenu">
        <img src="/img/toggle_menu.png" alt="">
    </button>
    <ul id="navList">
        <button id="closeMenu">
            <img src="/img/close_menu.png" alt="">
        </button>
        <li>
            <a href="/">Accueil</a>
        </li>
        <li>
            <a href="/voitures">Véhicules d'occasion</a>
        </li>
        <?php
            if(isset($_SESSION["is_connected"]) && $_SESSION["is_connected"] == true) {
                ?>
                    <li>
                        <a href="/<?=$_SESSION["user_role"]?>">Mon espace</a>
                    </li>
                    <li>
                        <a href="/deconnexion">Se déconnecter</a>
                    </li>
                <?php
            } else {
                ?>
                    <li>
                        <a href="/connexion">Espace personnel</a>
                    </li>   
                <?php
            }
        ?>
    </ul>
</nav>