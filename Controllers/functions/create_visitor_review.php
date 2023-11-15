<?php

use App\Models\ReviewModel;

function create_visitor_review() {
    // Check if score is correct
    $score = (int)$_POST["score"];
    if(!is_int($score)) {
        $response = [
            "error" => 1,
            "msg" => "Format de la note incorrect"
        ];
        return $response;
    } else {
        // Check if comment is correct
        if(empty($_POST["comment"])) {
            $response = [
                "error" => 1,
                "msg" => "Le commentaire n'est pas défini"
            ];
            return $response;
        } else {
            // Create new review
            $review_model = new ReviewModel;

            $comment = htmlspecialchars(strip_tags(trim($_POST["comment"])));
            $date = date("Y-m-d", time());

            $datas = [
                "score" => $score,
                "comment" => $comment,
                "date" => $date,
                "verified" => 0 
            ];

            if(!$review_model->create($datas)) {
                $response = [
                    "error" => 1,
                    "msg" => "Impossible de créer le nouvel avis client"
                ];
                return $response;
            } else {
                $response = [
                    "error" => 0,
                    "msg" => "Votre avis est en attente de modération"
                ];
                return $response;
            }
        }
    }
}