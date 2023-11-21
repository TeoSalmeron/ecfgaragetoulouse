<?php

use App\Models\CarModel;

function filter_car() {
    $car_model = new CarModel;
    // Check if kilometers are set
    if(!isset($_POST["kilometers_min"]) || !isset($_POST["kilometers_max"]) || empty($_POST["kilometers_min"]) || empty($_POST["kilometers_max"])){
        $response = [
            "error" => 1,
            "msg" => "Veuillez renseigner les kilométrages"
        ];
        return $response;
    } else {
        // Check if max kilometers is superior to min kilometers
        if($_POST["kilometers_min"] >= $_POST["kilometers_max"]) {
            $response = [
                "error" => 1,
                "msg" => "Le kilométrage maximum ne peut pas être inférieur au kilométrage minimum"
            ];
            return $response;
        } else {
            // Check if price is set
            if(!isset($_POST["price_min"]) || !isset($_POST["price_max"]) || empty($_POST["price_min"]) || empty($_POST["price_max"])) {
                $response = [
                    "error" => 1,
                    "msg" => "Veuillez renseigner les prix"
                ];
                return $response;
            } else {
                // Check if min price is inferior to max price
                if($_POST["price_min"] >= $_POST["price_max"]) {
                    $response = [
                        "error" => 1,
                        "msg" => "Le prix minimum ne peut pas être inférieur au prix maximum"
                    ];
                    return $response;
                } else {
                    // Check if year is set
                    if(!isset($_POST["year"]) || empty($_POST["year"]) || strlen($_POST["year"]) !== 4) {
                        $response = [
                            "error" => 1,
                            "msg" => "L'année du véhicule est incorrect"
                        ];
                        return $response;
                    } else {
                        // Get cars
                        $filtered_cars = $car_model->filter_car($_POST["kilometers_min"], $_POST["kilometers_max"], $_POST["price_min"], $_POST["price_max"], (int)$_POST["year"]);
                        $response = [
                            "error" => 0,
                            "msg" => "Voici la liste des véhicules",
                            "filtered_cars" => $filtered_cars
                        ];
                        return $response;
                    }
                }
            }
        }
    }
}