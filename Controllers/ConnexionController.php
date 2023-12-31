<?php

namespace App\Controllers;

class ConnexionController extends Controller
{
    public function index()
    {
        $this->render("connexion/connexion", [
            "title" => "Votre espace personnel",
        ], ["nav", "sign_in"]);

    }

    public function sign_in() {
        require_once ROOT . '/Controllers/functions/sign_in.php';
        $response = sign_in();
        echo json_encode($response);
    }
}