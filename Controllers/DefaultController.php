<?php

namespace App\Controllers;

use App\Models\GarageModel;
use App\Models\ReviewModel;
use App\Controllers\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        $review_model = new ReviewModel;
        $reviews = $review_model->findAll();
        $garage_model = new GarageModel;
        $garage = $garage_model->findBy(["id" => 1])[0];
        $this->render("home/home", [
            "title" => "Accueil",
            "garage" => $garage,
            "reviews" => $reviews
        ], ["nav", "delete_review"]);

    }
}
