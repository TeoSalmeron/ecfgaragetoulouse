<footer>
    <h3>GARAGE V PARROT</h3>
    <p>
        <strong>Adresse : 123 Rue de l'automobile, Toulouse 31000</strong>
    </p>
    <p>
        <strong>Téléphone : +33600000000</strong>
    </p>
    <p>
        <strong>E-mail : garageparrottoulouse@gmail.com</strong>
    </p>
    <div class="schedule">
        <h3>HORAIRES D'OUVERTURES</h3>
        <ul>
            <?php
                foreach($schedules as $s) {
                    if($s["is_opened"] === 0) {
                        ?>
                            <li>
                                <?= ucfirst($s["day"]) ?> : FERMÉ
                            </li>
                        <?php
                    } else {
                        ?>
                            <li>
                                <?= ucfirst($s["day"]) . " : " . substr($s["open_time"], 0, 5) . " / " . substr($s["close_time"], 0, 5)?> 
                            </li>
                        <?php
                    }
                }
            ?>
        </ul>
    </div>
</footer>