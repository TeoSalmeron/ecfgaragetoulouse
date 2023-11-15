<?php

use App\Models\CarModel;

function create_car() {
    // Check if model is set
    if(empty($_POST["model"]) || !isset($_POST["model"])) {
        $response = [
            "error" => 1,
            "msg" => "Le modèle n'a pas été défini"
        ];
        return $response;
    } else {
        $model = htmlspecialchars(strip_tags(trim($_POST["model"])));
        // Check if year is set and correct
        if(empty($_POST["year"]) || strlen($_POST["year"]) !== 4 || !is_numeric($_POST["year"])) {
            $response = [
                "error" => 1,
                "msg" => "L'année n'a pas été définie ou n'est pas correct"
            ];
            return $response;
        } else {
            $year = (int)$_POST["year"];
            // Check if kilometers is set
            if(empty($_POST["kilometers"]) || !is_numeric($_POST["kilometers"])) {
                $response = [
                    "error" => 1,
                    "msg" => "Le kilométrage n'a pas été défini ou est incorrect"
                ];
                return $response;
            } else {
                $kilometers = (int)$_POST["kilometers"];
                // Check if price is correct
                if(empty($_POST["price"]) || !is_numeric($_POST["price"])) {
                    $response = [
                        "error" => 1,
                        "msg" => "Le prix n'a pas été défini ou est incorrect"
                    ];
                    return $response;
                } else {
                    $price = (int)$_POST["price"];
                    // Check if image is correct
                    if(!isset($_FILES["image"])) {
                        $response = [
                            "error" => 1,
                            "msg" => "L'image n'a pas été définie"
                        ];
                        return $response;
                    } else {
                        $tmpName = $_FILES["image"]["tmp_name"];
                        $name = $_FILES["image"]["name"];
                        $size = $_FILES["image"]["size"];
                        $error = $_FILES["image"]["error"];

                        // Check if extension is correct

                        $tabExtension = explode('.', $name);
                        $extension = strtolower(end($tabExtension));
                        // Extensions we accept
                        $extensions = ["jpg", "png", "jpeg"];

                        if(!in_array($extension, $extensions)) {
                            $response = [
                                "error" => 1,
                                "msg" => "Le format de l'image est incorrect"
                            ];
                            return $response;
                        } else {
                            // Check if image is not too heavy and no error
                            $maxSize = 10485760;
                            if($size >= $maxSize || $error != 0) {
                                $response = [
                                    "error" => 1,
                                    "msg" => "Le format de l'image est incorrect"
                                ];
                                return $response;
                            } else {
                                $uniqueName = uniqid("", true);
                                $image_path = $uniqueName . "." . $extension;
                                move_uploaded_file($tmpName, ROOT . '/uploads/' . $image_path);
                                // Check if description is set
                                if(empty($_POST["description"])) {
                                    $response = [
                                        "error" => 1,
                                        "msg" => "La description n'est pas définie"
                                    ];
                                    return $response;
                                } else {
                                    $description = htmlspecialchars(strip_tags(trim($_POST["description"])));
                                    // Create new car
                                    $car_model = new CarModel;
                                    $datas = [
                                        "model" => $model,
                                        "price" => $price,
                                        "year" => $year,
                                        "description" => $description,
                                        "image_path" => $image_path
                                    ];
                                    if(!$car_model->create($datas)) {
                                        $response = [
                                            "error" => 1,
                                            "msg" => "Impossible de créer la nouvelle annonce"
                                        ];
                                        return $response;
                                    } else {
                                        $response = [
                                            "error" => 0,
                                            "msg" => "Annonce créée"
                                        ];
                                        return $response;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        } 
    }
}