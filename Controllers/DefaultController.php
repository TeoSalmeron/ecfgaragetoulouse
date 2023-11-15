<?php

namespace App\Controllers;

use App\Models\GarageModel;

class DefaultController extends Controller
{
    public function index()
    {
        $garage_model = new GarageModel;
        $garage = $garage_model->findBy(["id" => 1])[0];
        $this->render("home/home", [
            "title" => "Accueil",
            "garage" => $garage
        ], ["nav"]);

    }
}
