<?php

use App\Models\ReviewModel;

function moderate_review() {
    if(!isset($_POST["id"]) || !isset($_POST["action"]) || empty($_POST["id"]) || empty($_POST["action"])) {
        $response = [
            "error" => 1,
            "msg" => "Informations manquantes pour modérer le commentaire"
        ];
        return $response;
    } else {
        $review_model = new ReviewModel;
        // Define action
        if($_POST["action"] === "delete") {
            // Delete review
            $review_model->delete((int)$_POST["id"]);
            $response = [
                "error" => 0,
                "msg" => "Avis client supprimé"
            ];
            return $response;
        } else {
            $datas = [
                "verified" => 1
            ];
            $review_model->update($datas, (int)$_POST["id"]);
            $response = [
                "error" => 0,
                "msg" => "Avis client ajouté"
            ];
            return $response;
        }
    }
}