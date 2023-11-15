<?php

use App\Models\ReviewModel;

function delete_review() {
    if(!isset($_POST["id"]) || empty($_POST["id"])) {
        $response = [
            "error" => 1,   
            "msg" => "ID Manquant"
        ];
        return $response;
    } else {
        $review_model = new ReviewModel;
        if(!$review_model->delete($_POST["id"])){
            $response = [
                "error" => 1,
                "msg" => "Impossible de supprimer le commentaire"
            ];
            return $response;
        } else {
            $response = [
                "error" => 0,
                "msg" => ""
            ];
            return $response;
        }
    }
}