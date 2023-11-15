<?php
    require_once ROOT . '/Views/templates/nav.php';
?>
<section class="employee_pannel">
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
            <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Insérez le commentaire"></textarea>
            <button type="submit" class="button">
                VALIDER
            </button>
        </form>
    </section>
</section>