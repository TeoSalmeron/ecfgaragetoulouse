<?php

require_once ROOT . '/Views/templates/nav.php';

?>

<section class="cars_section">
    <h2>NOS VÉHICULES D'OCCASION</h2>
    <h3>Filtrez votre recherche</h3>
    <form action="" method="post" id="carFilterForm">
        <p id="carFilterFormStatus"></p>
        <label for="kilometers">Kilométrage</label>
        <br>
        <div class="form-group">
            Entre
            <input type="number" name="kilometers_min" id="kilometers_min" required>
            et
            <input type="number" name="kilometers_max" id="kilometers_max" required> 
        </div>
        <br>
        <label for="price">Prix</label>
        <br>
        <div class="form-group">
            Entre
            <input type="number" name="price_min" id="price_min" required>
            et
            <input type="number" name="price_max" id="price_max" required>
        </div>
        <br>
        <label for="year">Année</label>
        <br>
        <div class="form-group">
            <input type="number" name="year" id="year" required>
        </div>
        <br>
        <button class="button" type="submit">Filtrer</button>
    </form>
    <div id="cars_display">
        <?php
            foreach($cars as $car) {
                ?>
                    <div class="car">
                        <h3>
                            <?= $car["model"] ?>
                        </h3>
                        <img src="/uploads/<?=$car["image_path"]?>" alt="<?=$car["model"]?>">
                        <p>
                            <strong>Prix : </strong><?= $car["price"] ?> €
                        </p>
                        <p>
                            <strong>Kilométrages : </strong> <?= $car["kilometers"] ?>
                        </p>
                        <p>
                            <strong>Année :</strong> <?= $car["year"] ?>
                        </p>
                        <p class="car_description">
                            <strong>Description :</strong> <br> <?= htmlspecialchars_decode($car["description"]) ?>
                        </p>
                    </div>
                <?php
            }
        ?>
    </div>
</section>