<?php
    require_once ROOT . '/Views/templates/nav.php';
?>
<section class="employee_pannel">
    <!-- CREATE CAR SECTION -->
    <section class="create_car">
        <h2>Créer une annonce</h2>
        <small>Déposez une annonce pour un véhicule d'occasion</small>
        <form action="" method="POST" id="createCarForm" accept-charset="utf-8" enctype="multipart/form-data">
            <p id="createCarFormStatus" class="form_status"></p>
            <div class="form_group">
                <label for="model">Modèle</label>
                <input type="text" name="model" id="model" placeholder="Modèle">
            </div>
            <div class="form_group">
                <label for="year">Année</label>
                <select name="year" id="year">
                    <?php
                        for($i = 1950; $i <= (int)date("Y", time()); $i++) {
                            ?>
                                <option value="<?=$i?>">
                                    <?=$i?>
                                </option>
                            <?php
                        }
                    ?>
                </select>
            </div>
            <div class="form_group">
                <label for="kilometers">Kilométrage</label>
                <input type="number" name="kilometers" id="kilometers" placeholder="Kilométrage">
            </div>
            <div class="form_group">
                <label for="price">Prix</label>
                <input type="number" name="price" id="price" placeholder="Prix">
            </div>
            <small>L'image doit être au format png, jpg ou jpeg et ne doit pas dépasser 20mo</small>
            <div class="form_group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>
            <div class="form_group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Description de la voiture"></textarea>
            </div>
            <button type="submit" class="button">
                VALIDER
            </button>
        </form>
    </section>
    <!-- END CREATE CAR SECTION -->

    <!-- MODERATE REVIEW SECTION -->
    <section class="moderate_review">
        <h2>Modérer les avis clients</h2>
        <p>
            Retrouvez la liste des nouveaux avis à modérer
        </p>
        <p id="moderateReviewStatus"></p>
        <?php
            foreach($unmoderated_reviews as $u) {
                ?>
                    <div class="unmoderated_review" id="review<?=$u["id"]?>">
                        <p class="review_score">
                            <?= $u["score"] ?> / 5
                        </p>
                        <p class="review_date">
                            <?= $u["date"] ?>
                        </p>
                        <p class="review_comment">
                            <?= $u["comment"] ?>
                        </p>
                        <form action="" method="post" class="unmoderated_review_form" accept-charset="utf-8">
                            <input type="checkbox" name="id" id="id" checked value="<?=$u["id"]?>" style="display:none">
                            <select name="action" id="action">
                                <option value="delete">Supprimer</option>
                                <option value="confirm">Valider</option>
                            </select>
                            <button class="button" value="confirm" type="submit">VALIDER</button>
                        </form>
                    </div>
                <?php
            }
        ?>
    </section>
    <!-- END MODERATE REVIEW SECTION -->

    <!-- CREATE REVIEW SECTION -->
    <section class="create_review">
        <h2>
            POSTER UN AVIS CLIENT
        </h2>
        <small>Pour poster un avis client, veuillez renseigner la note et le commentaire</small>
        <form action="" method="post" id="createReviewForm" accept-charset="utf-8">
            <p id="createReviewFormStatus" class="form_status"></p>
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
            <br>
            <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Insérez le commentaire"></textarea>
            <button type="submit" class="button">
                VALIDER
            </button>
        </form>
    </section>
    <!-- END CREATE REVIEW SECTION -->
</section>