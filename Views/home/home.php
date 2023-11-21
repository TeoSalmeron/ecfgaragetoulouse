<?php
    require_once(ROOT . '/Views/templates/nav.php');
?>

<header class="home_header">
    <h1>
        <?= $garage["name"]; ?>
    </h1>
    <ul>
        <li>
            Réparation
        </li>
        <li>
            Mécanique
        </li>
        <li>
            Entretien
        </li>
        <li>
            Vente de véhicules d'occasion
        </li>
    </ul>
</header>

<section class="home_services">
    <h2>
        Nos services
    </h2>
    <ul>
        <li>
            <strong>
                Réparation mécanique :
            </strong>
            <p>
                Réparation et entretien des composants mécaniques du véhicule, y compris le moteur, la transmission, la suspension et la direction.
            </p>
        </li>
        <li>
            <strong>
                Entretien préventif : 
            </strong>
            <p>
                Maintenance régulière pour prolonger la durée de vie du véhicule, comprenant la vidange d'huile, le remplacement de filtres, le contrôle des freins et la vérification de la climatisation.
            </p>
        </li>
        <li>
            <strong>
                Réparation de carrosserie : 
            </strong>
            <p>
                Réparation des dommages causés par des accidents, y compris la réparation de la carrosserie, la peinture, le redressement des chocs et le remplacement de pare-brise.
            </p>
        </li>
        <li>
            <strong>
                Services de pneus :
            </strong>
            <p>
                Vente de pneus neufs, équilibrage des pneus, montage et démontage de pneus, réparation de crevaisons.
            </p>
        </li>
        <li>
            <strong>
                Inspection et contrôle technique :
            </strong>
            <p>
                Inspection périodique des véhicules pour assurer leur conformité aux normes de sécurité et d'émissions.
            </p>
        </li>
        <li>
            <strong>
                Vente de pièces détachées :
            </strong>
            <p>
                Vente de pièces de rechange et d'accessoires automobiles pour les propriétaires de véhicules qui souhaitent effectuer leurs propres réparations ou améliorations.
            </p>
        </li>
        <li>
            <strong>
                Remorquage et dépannage :
            </strong>
            <p>
                Service de remorquage en cas de panne et dépannage sur place pour les véhicules en difficulté.
            </p>
        </li>
    </ul>
</section>

<section class="home_cars">
    <h2>Nos voitures d'occasion</h2>
    <p>
        Retrouvez un aperçu de nos voitures d'occasion à l'achat
    </p>
    <?php
    $i = 0;
        for($i = 0; $i < 3; $i++) { 
            ?>
                <div class="car">
                    <h3>
                        <?= $cars[$i]["model"] ?>
                    </h3>
                    <img src="/uploads/<?=$cars[$i]["image_path"]?>" alt="<?=$cars[$i]["model"]?>">
                    <p>
                        <?= $cars[$i]["price"] ?> €
                    </p>
                </div>
            <?php
        }
    ?>
</section>

<section class="home_reviews">
    <h2>AVIS CLIENTS</h2>
    <p>
        Nos clients satisfaits témoignent de notre expertise et de notre dévouement. Découvrez leurs commentaires authentiques sur notre service exceptionnel.
    </p>
    <?php
        foreach($reviews as $r) {
            ?>
                <div class="review">
                    <p class="score">
                        <?= $r["score"]?>/5
                    </p>
                    <small>
                        <?= $r["date"] ?>
                    </small>
                    <p class="comment">
                        <?= htmlspecialchars_decode($r["comment"]) ?>
                    </p>
                    <?php
                        if(isset($_SESSION["is_connected"]) && $_SESSION["user_role"] === "employee") {
                            ?>
                            <form action="" method="post" class="delete_review_forms">
                                <input type="checkbox" name="id" id="id" value="<?=$r["id"]?>" checked style="display:none">
                                <button class="button delete_review">
                                    SUPPRIMER
                                </button>
                            </form>
                            <?php
                        }
                    ?>
                </div>
            <?php
        }
    ?>
</section>

<section class="home_create_review">
    <h2>
        Déposez votre avis
    </h2>
    <p>
        Partagez votre expérience au garage V.Parrot
    </p>
    <form action="" method="post" id="createVisitorReviewForm" accept-charset="utf-8">
        <p id="createVisitorReviewFormStatus" class="form_status"></p>
        <div class="form_group">
            <label for="score">Note :</label>
            <select name="score" id="score">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select> / 5
        </div>
        <label for="comment">Commentaire :</label>
        <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Insérez le commentaire"></textarea>
        <button type="submit" class="button">
            VALIDER
        </button>
    </form>
</section>

<?php
    require_once ROOT . '/Views/templates/footer.php';
?>