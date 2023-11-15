<?php

namespace App\Controllers;

class DefaultController extends Controller
{
    public function index()
    {
        $this->render("home", [
            "title" => "Accueil"
        ]);

    }
}
