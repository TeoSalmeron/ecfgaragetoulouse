<?php

namespace App\Controllers;

use App\Models\CarModel;

class VoituresController extends Controller
{
    public function index()
    {
        $car_model = new CarModel;
        $cars = $car_model->findAll();
        $this->render("voitures/voitures", [
            "title" => "Voitures d'occasion",
            "cars" => $cars
        ], ["nav", "filter_car", "he"]);
    }

    public function filter_car() {
        require_once ROOT . '/Controllers/functions/filter_car.php';
        $response = filter_car();
        echo json_encode($response);
    }

}