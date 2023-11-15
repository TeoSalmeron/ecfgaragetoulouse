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